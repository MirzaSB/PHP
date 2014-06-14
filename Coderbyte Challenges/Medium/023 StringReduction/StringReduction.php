<?php
/*

Developer: Mirza S. Baig

Date: 6-13-2014

Description:    Using the PHP language, have the function StringReduction(str) take
                the str parameter being passed and return the smallest number you can
                get through the following reduction method. The method is: Only the
                letters a, b, and c will be given in str and you must take two
                different adjacent characters and replace it with the third.
                For example "ac" can be replaced with "b" but "aa" cannot be replaced
                with anything. This method is done repeatedly until the string cannot
                be further reduced, and the length of the resulting string is to be
                outputted. For example: if str is "cab", "ca" can be reduced to "b"
                and you get "bb" (you can also reduce it to "cc"). The reduction is
                done so the output should be 2. If str is "bcab", "bc" reduces to "a",
                so you have "aab", then "ab" reduces to "c", and the final string "ac"
                is reduced to "b" so the output should be 1.
*/

//Create and store all test vectors in an array.
$vectors = array("cab", "bcab", "abcabc", "cccc");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . StringReduction($vector). PHP_EOL;
}

function StringReduction($str) {

    //Declare a variable to store the substituted value.
    $substitute = "";

    //Declare a variable to store matched results.
    $matches = array();

    //Create a while loop that will keep running until the string value gets reduced to
    //one character or all the characters in the string are the same.
    while ((strlen($str) != 1) || (!preg_match('/^(.)\1*$/', $str))) {

        //Look for the values; "ab", "ba", "bc", "cb", "ac", and "ca".
        preg_match('/ab|ba|bc|cb|ac|ca/', $str, $matches, PREG_OFFSET_CAPTURE);

        //If matches are found...
        if(count($matches) > 0) {

            //Create a switch statement, and specify cases for substitution. For example, "ab" or "ba" gives "c", and so on....
            switch ($matches[0][0]) {

                case "ab":
                case "ba":
                    $substitute = "c";
                    break;
                case "bc":
                case "cb":
                    $substitute = "a";
                    break;
                case "ca":
                case "ac":
                    $substitute = "b";
                    break;
            }

            //Substitute the matched value with the value calculated from the switch statement.
            $str = implode($substitute, explode($matches[0][0], $str, 2));

            //Reset the array.
            $matches = array();
        }
        else {
            //Break the loop if all the values are the same.
            break;
        }
    }

    //Return the final value.
    return strlen($str);

}

?>