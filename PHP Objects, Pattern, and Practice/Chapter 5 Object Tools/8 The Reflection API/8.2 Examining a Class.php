<?php
require_once "fullshop.php";

$prod_class = new ReflectionClass('CdProduct');
print classData($prod_class);

function classData(ReflectionClass $class) {
    $details = "";
    $name = $class->getName();
    if($class->isUserDefined()) {
        $details .= "$name is user defined \n";
    }
    if($class->isInternal()) {
        $details .= "$name is built in \n";
    }
    if($class->isInterface()) {
        $details .= "$name is interface \n";
    }
    if ($class->isAbstract()) {
        $details .= "$name is abstract class \n";
    }
    if ($class->isFinal()) {
        $details .= "$name is a final class\n";
    }
    if($class->isInstantiable()) {
        $details .= "$name can be instantiated\n";
    }
    else {
        $details .= "$name cannot be instantiated \n";
    }
    if($class->isCloneable()) {
        $details .= "$name can be cloned \n";
    }
    else {
        $details .= "$name cannot be cloned \n";
    }

    return $details;
}




?>