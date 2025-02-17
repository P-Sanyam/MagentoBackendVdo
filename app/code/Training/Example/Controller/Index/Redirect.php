<?php
declare(strict_types= 1);
namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;

class Page implements ActionInterface
{
    protected $pageFactory;
    public function __construct(\Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->pageFactory = $pageFactory;
    }
    public function execute()
    {
        $page =  $this->pageFactory->create();
        $page->getConfig()->getTitle()->set('This is a custom page');
        return $page;
    }
}
