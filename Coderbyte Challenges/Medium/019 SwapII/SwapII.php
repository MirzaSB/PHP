<?php
/*

Developer: Mirza S. Baig

Date: 5-27-2014

Description:    Using the PHP language, have the function SwapII(str) take the str
                parameter and swap the case of each character. Then, if a letter is
                between two numbers (without separation), switch the places of the two
                numbers. For example: if str is "6Hello4 -8World, 7 yes3" the output
                should be 4hELLO6 -8wORLD, 7 YES3.

Notes:          The "swap" function is deprecated. However, this is kept as comments
                for future reference.

*/

    //Create and store all test vectors in an array.
    $vectors = array("6Hello4 -8World, 7 yes3", "Hello -5LOL6", "2S 6 du5d4e");

    //Execute the test vectors using the function
    foreach ($vectors as $vector) {
        echo "Test Vector: '". $vector . "':" . PHP_EOL;
        echo "Output:" . " " . SwapII($vector). PHP_EOL;
    }

    function SwapII($str) {

        //Split the given string into an array delimited by a space.
        $arr = explode(" ", $str);

        //Initialize two temp variables.
        $temp = "";
        $temp2 = "";

        //Create a for loop that will go through all the elements in the array.
        for ($i = 0; $i < count($arr); $i++) {

            //Initialize an array variable to store digit matches, and positions.
            $matches = array();

            //Look for digits inside the current string.
            preg_match_all('/\d/', $arr[$i], $matches, PREG_OFFSET_CAPTURE);

            //If more than 1 digit is found in the string...
            if(count($matches[0]) > 1) {

                //Verify that their positions are different.
                if($matches[0][0][1] < $matches[0][1][1]) {

                    //Store the digits in the temp variables.
                    $temp = $matches[0][0][0];
                    $temp2 = $matches[0][1][0];

                    //Swap the digits in the temp variables.
                    //swap($temp, $temp2);
                    $temp = $temp ^ $temp2;
                    $temp2 = $temp ^ $temp2;
                    $temp = $temp ^ $temp2;

                    //Put the above changes in the current array element.
                    $arr[$i] = substr_replace($arr[$i], $temp, $matches[0][0][1], 1);
                    $arr[$i] = substr_replace($arr[$i], $temp2, $matches[0][1][1], 1);

                }
            }

            for($j = 0; $j < strlen($arr[$i]); $j++) {

                //Change all lowercase letters to uppercase, and vice versa.
                if(ctype_alpha($arr[$i][$j])) {

                    if (ctype_upper($arr[$i][$j])) {
                        $arr[$i][$j] = strtolower($arr[$i][$j]);
                    }
                    else {
                        $arr[$i][$j] = strtoupper($arr[$i][$j]);
                    }

                }
            }

        }

        //Return the final computed value.
        return implode($arr, " ");
    }

    /*
    function swap(&$a, &$b) {
        $a = $a ^ $b;
        $b = $a ^ $b;
        $a = $a ^ $b;
    }
    */

?>