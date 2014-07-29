<?php

trait PriceUtilities {
    private static $taxrate = 17;

    static function calculateTax($price) {
        return ((self::$taxrate/100) * $price);
    }
}

class Service {
}

class UtilityService extends Service {
    use PriceUtilities;
}

$u = new UtilityService();
print $u::calculateTax(100) . "\n";

?>