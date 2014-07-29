<?php

trait PriceUtilities {
    function calculateTax($price) {
        //Is this a good design?
        return (($this->taxrate/100) * $price);
    }
}

abstract class Service {
    //service oriented stuff
}

class UtilityService extends Service {
    public $taxrate = 17;
    use PriceUtilities;
}

$u = new UtilityService();
print $u->calculateTax(100) . "\n";

?>