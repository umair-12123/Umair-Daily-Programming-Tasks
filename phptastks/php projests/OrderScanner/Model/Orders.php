<?php
declare(strict_types=1);

namespace AsquareTec\OrderScanner\Model;

use Magento\Framework\Model\AbstractModel;

class Orders extends AbstractModel // Updated class name to Orders
{
    /**
     * @inheritDoc
     */
    public function _construct()
    {   
        $this->_init(\AsquareTec\OrderScanner\Model\ResourceModel\Orders::class); // Updated resource model reference
    }
}
