<?php
declare(strict_types=1);

namespace AsquareTec\OrderScanner\Model\ResourceModel\Orders; // Updated namespace to reflect orders

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * @inheritDoc
     */
    protected $_idFieldName = 'entity_id';

    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init(
            \AsquareTec\OrderScanner\Model\Orders::class, // Changed to reference the Orders model
            \AsquareTec\OrderScanner\Model\ResourceModel\Orders::class // Changed to reference the Orders resource model
        );
    }
}
