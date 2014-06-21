<?php
/*

Developer: Mirza S. Baig

Date: 6-20-2014

Description:    Using the PHP language, have the function MultipleBrackets(str) take the str
                parameter being passed and return 1 #ofBrackets if the brackets are correctly
                matched and each one is accounted for. Otherwise return 0. For example: if
                str is "(hello [world])(!)", then the output should be 1 3 because all the
                brackets are matched and there are 3 pairs of brackets, but if str is
                "((hello [world])" the the output should be 0 because the brackets do not
                correctly match up. Only "(", ")", "[", and "]" will be used as brackets.
                If str contains no brackets return 1.
*/

//Create and store all test vectors in an array.
$vectors = array("(hello [world])(!)", "((hello [world])", "(coder)[byte)]", "(c([od]er)) b(yt[e])");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . MultipleBrackets($vector). PHP_EOL;
}

function MultipleBrackets($str) {

    //Declare array variables to store the matches, and their index positions.
    $leftRoundBracketMatches = array();
    $rightRoundBracketMatches = array();
    $leftSquareBracketMatches = array();
    $rightSquareBracketMatches = array();

    //Look for all brackets in the string.
    preg_match_all("/\(/", $str, $leftRoundBracketMatches);
    preg_match_all("/\)/", $str, $rightRoundBracketMatches);
    preg_match_all("/\[/", $str, $leftSquareBracketMatches);
    preg_match_all("/\]/", $str, $rightSquareBracketMatches);

    //Check whether the number of "(" matches is equal to the number of ")" matches or if the number of "[" matches is equal to the number of "]" matches.
    if ((count($leftRoundBracketMatches[0]) != count($rightRoundBracketMatches[0])) || (count($leftSquareBracketMatches[0]) != count($rightSquareBracketMatches[0]))) {
        return "0";
    }
    else {
        //Count the total number of brackets, and return them in the format, "1 : <number of brackets>".
        return "1 " . (count($rightRoundBracketMatches[0]) + count($rightSquareBracketMatches[0]));
    }
}

?>