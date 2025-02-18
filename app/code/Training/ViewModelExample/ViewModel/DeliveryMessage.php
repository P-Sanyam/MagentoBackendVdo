<?php
declare(strict_types= 1);
namespace Training\ViewModelExample\ViewModel;
use Magento\Framework\View\Element\Block\ArgumentInterface;
class DeliveryMessage implements ArgumentInterface
{
    public function getMessage()
    {
        return "Your order will be delivered within 3-5 business days. Thank you for shopping with Devansh!";
    }
}
