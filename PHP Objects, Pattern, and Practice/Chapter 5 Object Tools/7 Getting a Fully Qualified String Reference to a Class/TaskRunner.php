<?php

namespace tasks;

$path = "/Users/mirzabaig/Workspace/PHP Workspace/PHP Objects, Pattern, and Practice/Chapter 5 Object Tools/6 The Class and Object Functions";
$className = "Task";

$completePath = "$path/{$className}.php";
if (! file_exists($completePath)) {
    throw new Exception("No such file as {$completePath}");
}

require_once("$path/{$className}.php");
$qcclassName = "tasks\\$className";
if(! class_exists($qcclassName)) {
    throw new Exception("No such class as $qcclassname");
}

$myObj = new $qcclassName();
$myObj->doSpeak();

print_r(get_declared_classes());

function __call($method, $args) {
    if(method_exists($this->thirdPartyShop, $method)) {
        return $this->thirdPartyShop->$method();
    }
}