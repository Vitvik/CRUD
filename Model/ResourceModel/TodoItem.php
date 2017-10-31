<?php
namespace Vitvik\TestCrud\Model\ResourceModel;
class TodoItem extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('testcrud','testcrud_id');
    }
}
