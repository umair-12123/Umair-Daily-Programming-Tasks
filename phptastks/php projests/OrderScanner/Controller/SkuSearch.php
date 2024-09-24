<!-- <?php -->

// namespace AsquareTec\OrderScanner\Controller\Adminhtml\Custom;

// use Magento\Framework\App\Action\Context;
// use Magento\Framework\Controller\Result\JsonFactory;
// use Magento\Catalog\Model\ResourceModel\Product\CollectionFactory as ProductCollectionFactory;
// use Psr\Log\LoggerInterface;

// class SkuSearch extends \Magento\Framework\App\Action\Action
// {
//     protected $resultJsonFactory;
//     protected $productCollectionFactory;
//     protected $logger;

//     public function __construct(
//         Context $context,
//         JsonFactory $resultJsonFactory,
//         ProductCollectionFactory $productCollectionFactory,
//         LoggerInterface $logger
//     ) {
//         $this->resultJsonFactory = $resultJsonFactory;
//         $this->productCollectionFactory = $productCollectionFactory;
//         $this->logger = $logger;
//         parent::__construct($context);
//     }

//     public function execute()
//     {
//         $result = $this->resultJsonFactory->create();
//         $searchTerm = $this->getRequest()->getParam('sku');

//         if ($searchTerm) {
//             try {
//                 $productCollection = $this->productCollectionFactory->create();
//                 $productCollection->addAttributeToSelect('*')
//                     ->addAttributeToFilter('sku', ['like' => '%' . $searchTerm . '%'])
//                     ->setPageSize(3); // Limit results to 3 products

//                 $products = [];
//                 foreach ($productCollection as $product) {
//                     $products[] = [performSearch
//                         'id' => $product->getId(),  
//                         'name' => $product->getName(),
//                         'sku' => $product->getSku(),
//                         'image_url' => $this->getProductImageUrl($product),
//                     ];
//                 }

//                 return $result->setData($products);
//             } catch (\Exception $e) {
//                 // Log error
//                 $this->logger->error($e->getMessage());
//                 return $result->setData(['error' => 'An error occurred: ' . $e->getMessage()]);
//             }
//         } else {
//             return $result->setData(['error' => 'No SKU provided.']);
//         }
//     }

//     private function getProductImageUrl($product)
//     {
//         return $this->getUrl('pub/media/catalog/product') . $product->getImage();
//     }
// } -->