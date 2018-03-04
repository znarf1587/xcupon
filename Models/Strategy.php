<?php
namespace Behavioral\Strategy\Example\ShoppingCart;
 
interface PaymentInterface
{
    public function pay($amount);
}

namespace Behavioral\Strategy\Example\ShoppingCart;
 
use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;
 
class CreditCardPayment implements PaymentInterface
{
 
    private $name;
    private $cardNumber;
    private $cvv;
    private $dateOfExpiry;
 
    public function __construct($name, $cardNumber, $cvv, $dateOfExpiry)
    {
        $this->name         = $name;
        $this->cardNumber   = $cardNumber;
        $this->cvv          = $cvv;
        $this->dateOfExpiry = $dateOfExpiry;
    }
 
    public function pay($amount)
    {
        echo $amount . " paid with credit/debit card";
    }
 
}




namespace Behavioral\Strategy\Example\ShoppingCart;
 
use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;
 
class PaypalPayment implements PaymentInterface
{
 
    private $emailId;
    private $password;
 
    public function __construct($email, $password)
    {
        $this->emailId  = $email;
        $this->password = $password;
    }
 
    public function pay($amount)
    {
        echo $amount . " paid using Paypal";
    }
 
}




namespace Behavioral\Strategy\Example\ShoppingCart;

use Behavioral\Strategy\Example\ShoppingCart\Item;
use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;

class ShoppingCart
{

    private $items = [];

    public function addItem(Item $item)
    {
        $this->items[$item->getId()] = $item;
    }

    public function removeItem($itemId)
    {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }

    public function getItems()
    {
        return $this->items;
    }

    public function calculateTotal()
    {
        $sum = 0;
        foreach ($this->items as $items) {
            $sum += $items->getPrice();
        }
        return $sum;
    }

    public function pay(PaymentInterface $paymentMethod)
    {
        $amount = $this->calculateTotal();
        $paymentMethod->pay($amount);
    }

}


namespace Behavioral\Strategy\Example\ShoppingCart;
 
use Behavioral\Strategy\Example\ShoppingCart\Item;
use Behavioral\Strategy\Example\ShoppingCart\PaymentInterface;
 
class ShoppingCart
{
 
    private $items = [];
 
    public function addItem(Item $item)
    {
        $this->items[$item->getId()] = $item;
    }
 
    public function removeItem($itemId)
    {
        if (isset($this->items[$itemId])) {
            unset($this->items[$itemId]);
        }
    }
 
    public function getItems()
    {
        return $this->items;
    }
 
    public function calculateTotal()
    {
        $sum = 0;
        foreach ($this->items as $items) {
            $sum += $items->getPrice();
        }
        return $sum;
    }
 
    public function pay(PaymentInterface $paymentMethod)
    {
        $amount = $this->calculateTotal();
        $paymentMethod->pay($amount);
    }
 
}


namespace Behavioral\Strategy\Example\ShoppingCart;
 
class Item
{
 
    private $id;
    private $upcCode;
    private $price;
 
    public function __construct($id, $upc, $cost)
    {
        $this->id      = $id;
        $this->upcCode = $upc;
        $this->price   = $cost;
    }
 
    public function getId()
    {
        return $this->id;
    }
 
    public function getUpcCode()
    {
        return $this->upcCode;
    }
 
    public function getPrice()
    {
        return $this->price;
    }
 
}

use Behavioral\Strategy\Example\ShoppingCart\Item;
use Behavioral\Strategy\Example\ShoppingCart\ShoppingCart;
use Behavioral\Strategy\Example\ShoppingCart\CreditCardPayment;
use Behavioral\Strategy\Example\ShoppingCart\PaypalPayment;
 
$cart = new ShoppingCart();
 
$item1 = new Item(1, '124', 10);
$item2 = new Item(2, '14', 40);
 
$cart->addItem($item1);
$cart->addItem($item2);
 
/** Si mi cliente va usar una tarjeta de crédito, uso esto**/  
//Pago con Tarjeta de Crédito
$cart->pay(new CreditCardPayment("Jhon W.", "101012123456", "786", "12/15"));
//El resultado sera:
//50 paid with credit/debit card
 
 
/** Si mi cliente va usar su cuenta paypal uso esto**/ 
//Pago con Paypal
$cart->pay(new PaypalPayment("my_email@example.com", "my_password"));
//El resultado sera:
//50 paid using Paypal

?>