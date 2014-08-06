<?php

$className = "Task";

require_once("Task.php");
require_once("Test.php");

$obj = "tasks\\$className";

echo "1\n";

$myObj = new $obj();

$myObj->doSpeak();

echo "2\n";

$obj = "Test\\$className";

$myObj = new $obj();

$myObj->doSpeak();

echo "3\n";

?>