<?php
namespace Meezin\PriceWarning\Observer;

class Productsaveafter implements \Magento\Framework\Event\ObserverInterface
{
  public function execute(\Magento\Framework\Event\Observer $observer)
  {
        $_product = $observer->getProduct();  // you will get product object
        $price = $_product->getPrice(); // will get price
        if($price < 1)
        {
           	
            throw new \Magento\Framework\Exception\CouldNotDeleteException(__("Prices have been changed below 1!"));
        }

     return $this;
  }
}