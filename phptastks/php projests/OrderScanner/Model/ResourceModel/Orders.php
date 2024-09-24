<?php
declare(strict_types=1);

namespace AsquareTec\OrderScanner\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Orders extends AbstractDb // Changed class name to 'Orders'
{
    /**
     * @inheritDoc
     */
    protected function _construct()
    {
        $this->_init('asquaretec_orders', 'entity_id'); // Changed table name to 'asquaretec_orders'
    }
}
