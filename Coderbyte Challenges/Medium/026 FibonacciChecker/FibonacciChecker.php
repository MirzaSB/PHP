<?php
/*

Developer: Mirza S. Baig

Date: 6-19-2014

Description:    Using the PHP language, have the function FibonacciChecker(num) return the
                string yes if the number given is part of the Fibonacci sequence. This
                sequence is defined by: Fn = Fn-1 + Fn-2, which means to find Fn you add the
                previous two numbers up. The first two numbers are 0 and 1, then
                comes 1, 2, 3, 5 etc. If num is not in the Fibonacci sequence, return the
                string no.
*/

//Create and store all test vectors in an array.
$vectors = array(34, 54);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . FibonacciChecker($vector). PHP_EOL;
}

function FibonacciChecker($num) {
    //Calculate the first expression, (5*(N^2)+4)
    $f1 = (5*pow($num, 2)+4);

    //Calculate the second expression, (5*(N^2)-4)
    $f2 = (5*pow($num, 2)-4);

    //Check to see if the first and second calculated expressions are perfect squares.
    //If either one of them are true, then return "yes". "no" otherwise.
    if((PerfectSquare($f1) == true)||(PerfectSquare($f2) == true)) {
        return "yes";
    }
    else {
        return "no";
    }
}

function PerfectSquare($num) {
    //Calculate the square root of the number.
    $numSqrt = sqrt($num);
    //Check to see if the square root value is a numeral.
    if (strpos($numSqrt, ".") == false) {
        //Check to see if multiplying the above calculated value equals to the original number, and return it.
        return (($numSqrt*$numSqrt) == $num);
    }
}

?>