<?php
/*

Developer: Mirza S. Baig

Date: 6-07-2014

Description:    Using the PHP language, have the function NumberSearch(str) take the
                str parameter, search for all the numbers in the string, add them
                together, then return that final number divided by the total amount of
                letters in the string. For example: if str is
                "Hello6 9World 2, Nic8e D7ay!" the output should be 2. First if you
                add up all the numbers, 6 + 9 + 2 + 8 + 7 you get 32. Then there are
                17 letters in the string. 32 / 17 = 1.882, and the final answer should
                be rounded to the nearest whole number, so the answer is 2. Only
                single digit numbers separated by spaces will be used throughout the
                whole string (So this won't ever be the case: hello44444 world). Each
                string will also have at least one letter.

*/

//Create and store all test vectors in an array.
$vectors = array("Hello6 9World 2, Nic8e D7ay!", "H3ello9-9", "One Number*1*");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . NumberSearch($vector). PHP_EOL;
}

function NumberSearch($str) {

    //Declare array variables to store matches.
    $matches_alphabet = array();
    $matches_number = array();
    $matches = array();

    //Search for numbers in the string, and store them in an array.
    preg_match_all('/\d/', $str, $matches_number);

    //Search for alphabets in the string, and store them in an array.
    preg_match_all('/[a-zA-Z]/', $str, $matches_alphabet);

    if(count($matches_number[0]) > 1) {

        //Calculate the final value using the formula, [Sum of numbers]/[Number of alphabets found].
        return round(array_sum($matches_number[0])/count($matches_alphabet[0]));
    }
    else {
        return "0";
    }

}

?>