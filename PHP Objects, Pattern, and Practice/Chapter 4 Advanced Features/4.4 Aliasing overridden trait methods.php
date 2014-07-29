<?php

trait TaxTools {
    function calculateTax($price) {
        return 222;
    }
}

trait PriceUtilities {
    private $taxrate = 17;

    function calculateTax($price) {
        return (($this->taxrate/100) * $price);
    }

    //other utilities.
}

abstract class Service {
    //service oriented stuff.
}

class UtilityService extends Service {
    use PriceUtilities, TaxTools {
        TaxTools:: calculateTax insteadOf PriceUtilities;
        PriceUtilities:: calculateTax as basicTax;
    }
}

$u = new UtilityService();
print $u->calculateTax(100) . "\n";
print $u->basicTax(100) . "\n";

?>