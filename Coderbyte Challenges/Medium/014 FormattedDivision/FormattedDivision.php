<?php

//Store all test vectors in an array
$vectors = array(array(123456789, 10000), array(2, 3), array(10, 10));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode($vector, ",") . "':" . PHP_EOL;
    echo "Output:" . " " . FormattedDivision($vector[0], $vector[1]). PHP_EOL;
}

function FormattedDivision($num1, $num2) {
    return number_format(($num1/$num2), 4);
}

?>