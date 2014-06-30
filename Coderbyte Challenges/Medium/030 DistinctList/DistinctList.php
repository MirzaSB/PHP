<?php
/*

Developer: Mirza S. Baig

Date: 6-30-2014

Description:    Using the PHP language, have the function DistinctList(arr) take the array of
                numbers stored in arr and determine the total number of duplicate entries.
                For example if the input is [1, 2, 2, 2, 3] then your program should output
                2 because there are two duplicates of one of the elements.
*/

//Create and store all test vectors in an array.
$vectors = array(array(1, 2, 2, 2, 3), array(0,-2,-2,5,5,5), array(100,2,101,4));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode(",", $vector) . "':" . PHP_EOL;
    echo "Output:" . " " . DistinctList($vector). PHP_EOL;
}

function DistinctList($arr) {

    //Initialize a variable to store the number of dupes.
    $dupNum = 0;

    //Declare an array variable to store the array_count_values.
    $arr2 = array();

    //Create an array that would store all the unique values of the parameter array.
    $str = implode("," , $arr);
    $str = implode(',',array_unique(explode(',', $str)));
    $uniqueArr = explode(",", $str);

    //Store all the counted values of the parameter array.
    $arr2 = array_count_values($arr);

    //Create a for loop that will go through all the elements in the unique array...
    for ($i = 0; $i < count($uniqueArr); $i++) {
        //If an element of a particular key has a value of more than 1...
        if($arr2[$uniqueArr[$i]] > 1) {
            //Store this value but substract 1 (as to not count the initial value).
            $dupNum = $dupNum + $arr2[$uniqueArr[$i]] - 1;
        }
    }

    //Return the number of dupes counted.
    return $dupNum;

}

?>