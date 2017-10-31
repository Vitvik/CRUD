<?php
namespace Vitvik\TestCrud\Block;
class Main extends \Magento\Framework\View\Element\Template
{
  protected $toDoFactory;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Vitvik\TestCrud\Model\TodoItemFactory $toDoFactory
    )
    {
        $this->toDoFactory = $toDoFactory;
        parent::__construct($context);
    }

    function _prepareLayout()
    {
      return '/vitvik/testcrud/index';
      /*
      $todo = $this->toDoFactory->create();
      $todo->setData('testcrud_content','Test crud set data')
      ->save();
      var_dump('Done');
      exit;
      */

      /*
      $todo = $this->toDoFactory->create();

      $todo = $todo->load(1);
      var_dump($todo->getData());
      exit;
      */
      /*
      $todo = $this->toDoFactory->create();

   $collection = $todo->getCollection();

   foreach($collection as $item)
   {
       var_dump('Item ID: ' . $item->getId());
       var_dump($item->getData());
   }
   exit;
   */


    }
}
