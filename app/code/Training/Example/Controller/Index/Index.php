<?php

declare(strict_types=1);

namespace Training\Example\Controller\Index;

use Magento\Framework\App\ActionInterface;
use Magento\Framework\Controller\Result\RawFactory;
use Magento\Framework\Controller\ResultInterface;

class Index implements ActionInterface
{
    protected $resultFactory;

    public function __construct(RawFactory $resultFactory)
    {
        $this->resultFactory = $resultFactory;
    }

    public function execute(): ResultInterface
    {
        $result = $this->resultFactory->create();
        $result->setHeader('Content-Type', 'text/xml')->setContents('
        <root>
            <name>Devansh Rathod</name>
            <job>Software Developer</job>
        </root>');
        return $result;
    }
}
