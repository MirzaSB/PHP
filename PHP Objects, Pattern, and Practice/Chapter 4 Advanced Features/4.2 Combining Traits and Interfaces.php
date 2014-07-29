<?php

interface IdentityObject {
    public function generateId();
}

trait IdentityTrait {
    public function generateId() {
        return uniqid();
    }
}

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100) * price);
    }

    // other utilities
}

class ShopProduct implements IdentityObject {
    use PriceUtilities, IdentityTrait;
}

function storeIdentityObject(IdentityObject $idobj) {
    //do something with the Identity Object
}

$p = new ShopProduct();
storeIdentityObject($p);

?>