<?php

trait PriceUtilities {
    function calculateTax($price) {
        //better design..we know getTaxRate() is implemented
        return (($this->getTaxRate()/100) * $price);
    }

    abstract function getTaxRate();
}

abstract class Service{
    //service oriented stuff
}

class UtilityService extends Service {
    use PriceUtilities;

    function getTaxRate() {
        return 17;
    }
}

$u = new UtilityService();
print $u->calculateTax(100) . "\n";

?>