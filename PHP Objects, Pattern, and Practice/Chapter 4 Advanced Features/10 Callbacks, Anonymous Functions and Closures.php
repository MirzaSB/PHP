<?php

class Product {
    public $name;
    public $price;

    function __construct($name, $price) {
        $this->name = $name;
        $this->price = $price;
    }
}

class ProcessSale {

    private $callbacks;

    function registerCallback($callback) {
        if (! is_callable($callback)) {
            throw new Exception("callback not callable");
        }
        $this->callbacks[] = $callback;
    }

    function sale($product) {
        print "{$product->name}: processing \n";
        foreach($this->callbacks as $callback) {
            call_user_func($callback, $product);
        }
    }
}

class Mailer {
    function doMail($product) {
        print "       mailing ({$product->name})\n";
    }
}

class Totalizer {
    /*
    static function warnAmount() {
        return function($product) {
            if ($product->price > 5) {
                print "       reached high price: {$product->price}\n";
            }
        };
    }
    */
    static function warnAmount($amt) {
        $count = 0;
        return function($product) use ($amt, &$count) {
            $count += $product->price;
            print "    count: $count\n";
            if($count > $amt) {
                print "     high price reached: {$count}\n";
            }
        };
    }
}

echo "-----------------" . PHP_EOL;

$logger = create_function( '$product',
    'print " logging ({$product->name})\n";' );

$processor = new ProcessSale();
$processor->registerCallback($logger);

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));

echo "-----------------" . PHP_EOL;

$logger2 = function($product) {
    print "     logging ({$product->name})\n";
};

$processor = new ProcessSale();
$processor->registerCallback($logger2);

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));

echo "-----------------" . PHP_EOL;

$processor = new ProcessSale();
$processor->registerCallback(array(new Mailer(), "doMail"));

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));

echo "-----------------" . PHP_EOL;

/*
$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount());
*/
echo "-----------------" . PHP_EOL;

$processor = new ProcessSale();
$processor->registerCallback(Totalizer::warnAmount(8));

$processor->sale(new Product("shoes", 6));
print "\n";
$processor->sale(new Product("coffee", 6));

?>