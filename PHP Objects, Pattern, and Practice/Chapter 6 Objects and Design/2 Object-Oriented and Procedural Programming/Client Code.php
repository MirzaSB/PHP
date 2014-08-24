<?php

$test = ParamHandler::getInstance("params.xml");
$test->addParam("key1", "val1");
$test->addParam("key2", "val2");
$test->addParam("key3", "val3");
$test->write(); //Writing in XML format

$test = ParamHandler::getInstance("params.txt");
$test->read();

?>