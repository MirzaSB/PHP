<?php
/**
 *
Developer: Mirza S. Baig

Date: 4-22-2014

Description:    Using the PHP language, have the function CaesarCipher(str,num) take
 *              the str parameter and perform a Caesar Cipher shift on it using the
 *              num parameter as the shifting number. A Caesar Cipher works by
 *              shifting each letter in the string N places down in the alphabet
 *              (in this case N will be num). Punctuation, spaces, and capitalization
 *              should remain intact. For example if the string is "Caesar Cipher" and
 *              num is 2 the output should be "Ecguct Ekrjgt".
 */

//Store all test vectors in an array
$vectors = array(array("Hello", 4), array("abc", 0), array("Caesar Cipher", 2));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode($vector, ",") . "':" . PHP_EOL;
    echo "Output:" . " " . CaesarCipher($vector[0], $vector[1]). PHP_EOL;
}

function CaesarCipher($str, $num) {

    $arr = str_split($str);

    for($x = 0; $x <= count($arr)-1; $x++) {
        $arr[$x] = letterIncrement($arr[$x], $num);
    }

    return implode($arr);

}

function letterIncrement($str, $num) {
    for ($i = $num-1; $i >= 0; $i--) {
        if($str == "Z") {
            $str = "A";
        }
        elseif ($str == "z") {
            $str = "a";
        }
        else {
            ++$str;
        }
    }
    return $str;
}

?>