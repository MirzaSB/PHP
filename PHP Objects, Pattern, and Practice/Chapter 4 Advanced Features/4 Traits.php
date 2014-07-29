<?php


class ShopProduct {

    use PriceUtilities;
    /*
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100) * $price);
    }
    */

}

$p = new ShopProduct();
print $p->calculateTax(100) . "\n";


abstract class Service {
}

class UtilityService extends Service {

    use PriceUtilities;

    /*
    private $taxrate = 17;

    function calculatetax($price) {
        return(($this->taxrate/100) * $price);
    }
    */

}

$u = new UtilityService();
print $u->calculatetax(100) . "\n";

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return(($this->taxrate/100) * $price);
    }

    //other utilities
}



?>