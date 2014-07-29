<?php

trait IdentityTrait {
    public function generateId() {
        return uniqid();
    }
}

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100) * $price);
    }
}

class ShopProduct {
    use PriceUtilities, IdentityTrait;
}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";
print $p->generateId() . "\n";

?>