<?php
/*

Developer: Mirza S. Baig

Date: 6-18-2014

Description:    Using the PHP language, have the function CoinDeterminer(num) take the input,
                which will be an integer ranging from 1 to 250, and return an integer output
                that will specify the least number of coins, that when added, equal the
                input integer. Coins are based on a system as follows: there are coins
                representing the integers 1, 5, 7, 9, and 11. So for example: if num is 16,
                then the output should be 2 because you can achieve the number 16 with the
                coins 9 and 7. If num is 25, then the output should be 3 because you can
                achieve 25 with either 11, 9, and 5 coins or with 9, 9, and 7 coins.
*/

//Create and store all test vectors in an array.
$vectors = array(25, 16, 6);

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . CoinDeterminer($vector). PHP_EOL;
}

function CoinDeterminer($num) {

    //Store all the allowed coins in an array.
    $coins = array(1,5,7,9,11);

    //Declare an array variable to put the coins in.
    $arr = array();

    //Declare a variable to store the number of coins that were added to get the appropriate number.
    $numCoins = 0;

    //Declare a variable to store the sum of coins.
    $sum = 0;

    //Create a maximum index, by giving it the total number of coins.
    $i = count($coins)-1;

    //Create a while loop...
    while ($sum != $num) {

        //If the current sum plus the potential coin to be added is less than the expected value...
        if(array_sum($arr) + $coins[$i] <= $num) {
            //Add the coin.
            array_push($arr, $coins[$i]);
            //Increment the counter that tracks the number of coins so far.
            $numCoins++;
            //Add all the coins together.
            $sum = array_sum($arr);
            $i--;
        }
        //Else if the potential coin will result in the sum becoming larger than the expected value...
        else {
            //Decrement the index so that a smaller coin can be used.
            $i--;
        }

        //For debugging purposes.
        //echo "numCoins: " . $numCoins . PHP_EOL;
        //echo "i: " . $i . PHP_EOL;
        //echo "arr: " . implode(",",$arr) . PHP_EOL;
        //echo PHP_EOL;
        //echo PHP_EOL;

    }

    //Return the value for the number of coins used thus far.
    return $numCoins;
}

?>
