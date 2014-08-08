<?php

require_once('ShopProduct.php');

$prod_class = new ReflectionClass('CdProduct');
Reflection::export($prod_class);

echo $prod_class;

echo "-------------------" . PHP_EOL;

$cd = new CdProduct("cd1", "bob", "bobbleson", 4, 50);
var_dump($cd);

?>