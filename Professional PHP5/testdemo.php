<?php
	require_once('/Users/MSB/PHP Workspace/Professional PHP5/Demo.php');
	
	$objDemo = new Demo();
	$objDemo->setName('Steve');
	$objDemo->sayHello();
	
	$objDemo->setName(37);
?>