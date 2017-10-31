<?php
namespace Vitvik\TestCrud\Model;
class TodoItem extends \Magento\Framework\Model\AbstractModel implements TodoItemInterface, \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'vitvik_testcrud_todoitem';

    protected function _construct()
    {
        $this->_init('Vitvik\TestCrud\Model\ResourceModel\TodoItem');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }
}
