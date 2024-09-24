<?php

namespace AsquareTec\OrderScanner\Block;

use Magento\Framework\View\Element\Template;
use Magento\Customer\Model\ResourceModel\Customer\CollectionFactory as CustomerCollectionFactory;
use Magento\Sales\Model\ResourceModel\Order\CollectionFactory as OrderCollectionFactory;
use Magento\Sales\Model\OrderFactory;
use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory; // Import ProductCollectionFactory

class OrderDropdown extends Template
{
    protected $customerCollectionFactory;
    protected $orderCollectionFactory;
    protected $orderFactory;
    protected $productCollectionFactory; // Add this line
    protected $_storeManager;

    public function __construct(
        Template\Context $context,
        CustomerCollectionFactory $customerCollectionFactory,
        OrderCollectionFactory $orderCollectionFactory,
        OrderFactory $orderFactory,
        ProductCollectionFactory $productCollectionFactory, // Add this line
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        $this->customerCollectionFactory = $customerCollectionFactory;
        $this->orderCollectionFactory = $orderCollectionFactory;
        $this->orderFactory = $orderFactory;
        $this->productCollectionFactory = $productCollectionFactory; // Initialize the property
        $this->_storeManager = $storeManager;
        parent::__construct($context, $data);
    }


    public function getCustomerCollection()
    {
        try {
            $customerCollection = $this->customerCollectionFactory->create();
            $customerCollection->addAttributeToSelect(['firstname', 'lastname', 'email']);
            return $customerCollection;
        } catch (\Exception $e) {
            // Log error if needed
            return [];
        }
    }

    public function getCurrentOrder()
    {
        return (int)$this->getRequest()->getParam('order_id', 0);
    }

    public function getOrderIncrementId()
    {
        return (int)$this->getRequest()->getParam('order_increment_id', 0);
    }

    public function getOrderCollection($orderIds)
    {
        $orderCollection = $this->orderCollectionFactory->create()
            ->addFieldToSelect('*')
            ->addFieldToFilter('entity_id', ['in' => $orderIds]);
        $orderData = [];
        
        foreach ($orderCollection as $order) {
            $billingAddress = $order->getBillingAddress();
            $shippingAddress = $order->getShippingAddress();

            // Prepare order data
            $orderData[] = [
                'id' => $order->getId(),
                'increment_id' => $order->getIncrementId(),
                'customer_name' => $order->getCustomerName(),
                'customer_email' => $order->getCustomerEmail(),
                'grand_total' => $order->getGrandTotal(),
                'status' => $order->getStatus(),
                'billing_address' => $billingAddress ? $billingAddress->format('html') : 'N/A',
                'shipping_address' => $shippingAddress ? $shippingAddress->format('html') : 'N/A',
                'items' => $this->getOrderItemsData($order)
            ];
        }

        return $orderData;
    }

    protected function getOrderItemsData($order)
    {
        $itemsData = [];
        foreach ($order->getAllVisibleItems() as $item) {
            $itemsData[] = [
                'name' => $item->getName(),
                'sku' => $item->getSku(),
                'price' => $item->getPrice(),
                'qty_ordered' => $item->getQtyOrdered(),
                'row_total' => $item->getRowTotal()
            ];
        }
        return $itemsData;
    }

    public function getOrdersCollection()
    {
        try {
            $orderCollection = $this->orderCollectionFactory->create();
            $orderCollection->getSelect()->group('entity_id')->order('entity_id DESC');

            return $orderCollection;
        } catch (\Exception $e) {
            // Log error if needed
            return [];
        }
    }
    public function getProductsBySku($sku, $limit = 3)
{
    $productCollection = $this->_productCollectionFactory->create()
        ->addAttributeToSelect('*')
        ->addAttributeToFilter('sku', ['like' => '%' . $sku . '%'])
        ->setPageSize($limit);

    return $productCollection->getItems();
}

}
