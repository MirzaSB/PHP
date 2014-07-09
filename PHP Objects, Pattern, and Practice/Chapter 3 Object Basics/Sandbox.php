<?php

require_once('ShopProduct.php');

//$product1 = new ShopProduct();
//$product2 = new ShopProduct();

//$product1->title = "My Antonia";
//$product1->producerMainName = "Cather";
//$product1->producerFirstName = "Willa";
//$product1->price = 5.99;

//echo "author: {$product1->getProducer()}\n";

//$product2->title = "Catch 22";

//$product1 = new ShopProduct("My Antonia", "Willia", "Cather", 5.99);
//echo "author: {$product1->getProducer()}\n";

$product2 = new CdProduct("Exile on Coldharbour Lane", "The", "Alabama 3", 10.99, null, 60.33);
echo "artist: {$product2->getProducer()}\n";

$product1 = new ShopProduct("My Antonia", "Willia", "Cather", 5.99);
$writer = new ShopProductWriter();
$writer->addProduct($product1);
$writer->write($product1);

?>