<?php

function straightIncludeWithCase ($className) {
    $file = "{$className}.php";
    if(file_exists($file)) {
        require_once($file);
    }
}

//This will not work as the "ShopProduct" file is not in the current directory.
spl_autoload_register('straightIncludeWithCase');
$product = new ShopProduct('The Darkening', 'Harry', 'Hunter', 12.99);

function replaceUnderscores($className) {
    $path = str_replace('_', DIRECTORY_SEPARATOR, $className);
    if(file_exists("{path}.php")) {
        require_once("{$path}.php");
    }
}

spl_autoload_register('replaceUnderscores');

$x = new ShopProduct();
$y = new business_ShopProduct();

function myNamespaceAutoload($path) {
    if(preg_match('/\\\/', $path)) {
        $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
    }
    if(file_exists("{path}.php")) {
        require_once("{$path}.php");
    }
}



?>