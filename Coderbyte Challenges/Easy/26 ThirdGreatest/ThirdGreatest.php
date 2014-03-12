<?php
/**
 *
Developer: Mirza S. Baig

Date: 3-12-2014

Description:    Using the PHP language, have the function ThirdGreatest(strArr) take
 *              the array of strings stored in strArr and return the third largest
 *              word within in. So for example: if strArr is ["hello", "world",
 *              "before", "all"] your output should be world because "before" is 6
 *              letters long, and "hello" and "world" are both 5, but the output
 *              should be world because it appeared as the last 5 letter word in the
 *              array. If strArr was ["hello", "world", "after", "all"] the output
 *              should be after because the first three words are all 5 letters long,
 *              so return the last one. The array will have at least three strings and
 *              each string will only contain letters.

 */

//Create test vectors.
$arr1 = array("hello", "world", "before", "all");
$arr2 = array("hello", "world", "after", "all");
$arr3 = array("coder","byte","code");
$arr4 = array("abc","defg","z","hijk");

//Store all test vectors in an array
$vectors = array($arr1, $arr2, $arr3, $arr4);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode(" , ",$vector)  . "':" . PHP_EOL;
    echo "Output:" . " " . ThirdGreatest($vector). PHP_EOL;
}

function ThirdGreatest($strArr) {

    //Initialize blank variables to split apart all the values in the upcoming loop..
    $longest = "";
    $secondLongest = "";
    $thirdLongest = "";

    //Create a for loop....
    foreach($strArr as $x) {
        if(strlen($x) > strlen($longest)) {
            //Keep track of the third longest value found thus far.
            $thirdLongest = $secondLongest;
            //Keep track of the second longest value found thus far.
            $secondLongest = $longest;
            //Keep track of the longest value found thus far.
            $longest = $x;
        }
        else if(strlen($x) > strlen($secondLongest)) {
            $thirdLongest = $secondLongest;
            $secondLongest = $x;
        }
        else if(strlen($x) > strlen($thirdLongest)) {
            $thirdLongest = $x;
        }
    }

    return $thirdLongest;
}

?>