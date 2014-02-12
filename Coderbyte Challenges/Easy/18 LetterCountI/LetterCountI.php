<?php

/*
Developer: Mirza S. Baig

Date: 2-12-2014

Description:    Using the PHP language, have the function LetterCountI(str) take the str
                parameter being passed and return the first word with the greatest number
                of repeated letters. For example: "Today, is the greatest day ever!"
                should return greatest because it has 2 e's (and 2 t's) and it comes
                before ever which also has 2 e's. If there are no words with repeating
                letters return -1. Words will be separated by spaces.

*/

function LetterCountI($str) {

    //Split the string into an array.
    $arr = explode(" ", $str);

    //Initialize a new variable to store the word with the greatest number of repeated characters.
    $maxWord = "-1";

    //Initialize a new variable to store the number of repeated characters in a word.
    $wordNum = 0;

    for ($i = 0; $i < count($arr); $i++) {

        //For each element, count the number of repeated characters.
        foreach(count_chars($arr[$i], 1) as $j => $val) {

            //echo "There were $val instances of \"", chr($j), "\" in the string.\n";

            //Check to see if the val has the max number of characters repeated.
            if (($wordNum < $val) And ($val != 1)) {
                //If the max number of repeated characters is found, store it.
                $wordNum = $val;
                //Also store the word that has the max number of repeated characters.
                $maxWord = $arr[$i];
            }

        }

    }

    //Return the first word with the great number of repeated letters or -1 if all letters are unique.
    return $maxWord;

}

//Store all test vectors in an array
$vectors = array("Today, is the greatest day ever", "Hello apple pie", "No words");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . LetterCountI($vector). PHP_EOL;
}

?>