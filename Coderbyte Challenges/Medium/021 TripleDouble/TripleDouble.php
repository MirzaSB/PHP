<?php

/*

Developer: Mirza S. Baig

Date: 6-07-2014

Description:    Using the PHP language, have the function TripleDouble(num1,num2) take
                both parameters being passed, and return 1 if there is a straight
                triple of a number at any place in num1 and also a straight double of
                the same number in num2. For example: if num1 equals 451999277 and
                num2 equals 41177722899, then return 1 because in the first parameter
                you have the straight triple 999 and you have a straight double, 99,
                of the same number in the second parameter. If this isn't the case,
                return 0.
 */

//Store all test vectors in an array
$vectors = array(array("451999277", "41177722899"), array("465555", "5579"), array("67844", "66237"));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode($vector, ",") . "':" . PHP_EOL;
    echo "Output:" . " " . TripleDouble($vector[0], $vector[1]). PHP_EOL;
}

function TripleDouble($num1, $num2) {

    //Declare array variable.
    $matches = array();

    //Declare boolean flag variables.
        $bFlag1 = false;
        $bFlag2 = false;

    //Search for a straight triple matching of a number in $num1.
        for($i = 0; $i < strlen($num1); $i++) {

            preg_match("/$num1[$i]{3}/", $num1, $matches);

            //If a match is found, mark the flag1 as true, and exit the loop.
            if(count($matches) > 0) {
                $bFlag1 = true;
                //Clear out the array.
                $matches = array();
                break;
            }

        }

    //Search for a straight double matching of a number in $num2.
        for($i = 0; $i < strlen($num2); $i++) {

            preg_match("/$num2[$i]{2}/", $num2, $matches);

            //If a match is found, mark the flag2 as true, and exit the loop.
            if(count($matches) > 0) {
                $bFlag2 = true;
                //Clear out the array.
                $matches = array();
                break;
            }

        }

        //Return the 1 if both flags are true, and 0 otherwise.
        if(($bFlag1 == true) && ($bFlag2 == true)) {
            return "1";
        }
        else {
            return "0";
        }
}

?>