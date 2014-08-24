<?php

//Function open a file, read each line, create an associative array as it goes.
//Return the array containing all the contents.
function readParams($sourceFile) {
    $prams = array();
    if(preg_match("/\.xml$/i", $sourceFile)) {
        //Read XML parameters from $sourceFile.
    }
    else {
        //Read text parameters from $sourceFile.
    }
    return $prams;
}

function writeParams($params, $sourceFile) {
    if(preg_match("/\.xml$/i", $sourceFile)) {
        //Write XML parameters to $sourceFile
    }
    else {
        //Write text parameters to $sourceFile
    }

}

$file = "param.txt";
$array['key1'] = "val1";
$array['key2'] = "val2";
$array['key3'] = "val3";
print_r($array);
writeParams($array, $file);
$output = readParams($file);
print_r($output);

?>