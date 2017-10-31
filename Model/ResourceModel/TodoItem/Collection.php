<?php
namespace Vitvik\TestCrud\Model\ResourceModel\TodoItem;
class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Vitvik\TestCrud\Model\TodoItem','Vitvik\TestCrud\Model\ResourceModel\TodoItem');
    }
}
