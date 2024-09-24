<?php

namespace AsquareTec\OrderScanner\Controller\Adminhtml\Custom;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Sales\Model\OrderFactory;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as OrderCollectionFactory;

class OrderSearch extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected $orderFactory;
    protected $orderCollectionFactory;

    public function __construct(
        Context $context,
        JsonFactory $resultJsonFactory,
        OrderFactory $orderFactory,
        OrderCollectionFactory $orderCollectionFactory
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->orderFactory = $orderFactory;
        $this->orderCollectionFactory = $orderCollectionFactory;
        parent::__construct($context);
    }

    public function execute()
{
    $result = $this->resultJsonFactory->create();
    $searchTerm = $this->getRequest()->getParam('search');

    if ($searchTerm) {
        $order = $this->orderFactory->create()->loadByIncrementId($searchTerm);

        $orderData = [];

        if ($order->getId()) {
            $data = [
                'order_id' => $order->getIncrementId(),
                'order_name' => $order->getCustomerName(),
                'customer_email' => $order->getCustomerEmail(),
                'sku' => '',
                'billing_name' => $order->getBillingAddress()->getName() ?? '',
                'shipping_name' => $order->getShippingAddress()->getName() ?? '',
                'purchase_date' => $order->getCreatedAt(),
                'product_name' => '',
                'price' => '',
                'quantity' => '',
                'item_images' => '', // New field for item images
                'upc' => '', // New field for UPC
            ];

            // Get SKU, product name, price, quantity, images, and UPC from order items
            $orderItemsCollection = $order->getItemsCollection();
            foreach ($orderItemsCollection as $item) {
                $data['sku'] .= $item->getSku() . "\n"; // Concatenates SKUs on a new line
                $data['product_name'] .= $item->getName() . "\n"; // Concatenates product names on a new line
                $data['price'] .= $item->getPrice() . "\n"; // Concatenates prices on a new line
                $data['quantity'] .= $item->getQtyOrdered() . "\n"; // Concatenates quantities on a new line
                
                // Get product details
                $product = $item->getProduct();
                if ($product) {
                    $imageUrl = $product->getImageUrl(); // Assuming this returns the image URL
                    $data['item_images'] .= $imageUrl . "\n"; // Concatenates image URLs
                    $data['upc'] .= $product->getData('UPC') . "\n"; // Fetch UPC from product data
                }
            }

            $orderData[] = $data;
        } else {
            // Search by SKU or Product Name using %LIKE%
            $orderCollection = $this->orderCollectionFactory->create();
            $orderCollection->addFieldToFilter('status', ['neq' => 'canceled']);
            $orderCollection->getSelect()->join(
                ['order_items' => $orderCollection->getTable('sales_order_item')],
                'main_table.entity_id = order_items.order_id',
                []
            )->where('order_items.sku LIKE ? OR order_items.name LIKE ?', "%$searchTerm%", "%$searchTerm%")
            ->group('main_table.entity_id'); // Group by entity_id to avoid duplicates

            foreach ($orderCollection as $order) {
                $data = [
                    'order_id' => $order->getIncrementId(),
                    'order_name' => $order->getCustomerName(),
                    'customer_email' => $order->getCustomerEmail(),
                    'phone' => $order->getBillingAddress()->getTelephone() ?? '',
                    'sku' => '',
                    'billing_name' => $order->getBillingAddress()->getName() ?? '',
                    'shipping_name' => $order->getShippingAddress()->getName() ?? '',
                    'purchase_date' => $order->getCreatedAt(),
                    'product_name' => '',
                    'price' => '',
                    'quantity' => '',
                    'item_images' => '', // New field for item images
                    'upc' => '', // New field for UPC
                ];

                // Get SKU, product name, price, quantity, images, and UPC from order items
                $orderItemsCollection = $order->getItemsCollection();
                foreach ($orderItemsCollection as $item) {
                    $data['sku'] .= $item->getSku() . "\n"; // Concatenates SKUs on a new line
                    $data['product_name'] .= $item->getName() . "\n"; // Concatenates product names on a new line
                    $data['price'] .= $item->getPrice() . "\n"; // Concatenates prices on a new line
                    $data['quantity'] .= $item->getQtyOrdered() . "\n"; // Concatenates quantities on a new line

                    // Get product details
                    $product = $item->getProduct();
                    if ($product) {
                        $imageUrl = $product->getImageUrl(); // Assuming this returns the image URL
                        $data['item_images'] .= $imageUrl . "\n"; // Concatenates image URLs
                        $data['upc'] .= $product->getData('UPC') . "\n"; // Fetch UPC from product data
                    }
                }

                $orderData[] = $data;
            }
        }

        // Return the order data
        return $result->setData($orderData);
    } else {
        return $result->setData(['error' => 'No search term provided.']);
    }
}
}