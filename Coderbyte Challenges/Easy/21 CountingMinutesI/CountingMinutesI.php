<?php

/*
 *
Developer: Mirza S. Baig

Date: 2-25-2014

Description:    Using the PHP language, have the function CountingMinutesI(str) take the str
                parameter being passed which will be two times (each properly formatted with a
                colon and am or pm) separated by a hyphen and return the total number of minutes
                between the two times. The time will be in a 12 hour clock format.
                For example: if str is 9:00am-10:00am then the output should be 60.
                If str is 1:00pm-11:00am the output should be 1320.

*/

//Create and store all test vectors in an array.
$vectors = array("9:00am-10:00am", "1:00pm-11:00am", "12:30pm-12:00am", "1:23am-1:08am");

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". $vector . "':" . PHP_EOL;
    echo "Output:" . " " . CountingMinutesI($vector). PHP_EOL;
}

function CountingMinutesI($str) {

    //Declare an array for totalMinutes.
    $arrTotalMins = array();

    //Split the string into two elements delimited by "-".
    $arr = explode("-", $str);

    //Create a loop...
    for ($i=0; $i < count($arr); $i++) {

        //Get the am or pm value at the end of each time.
        $timeSuffix = substr($arr[$i], -2);

        //Store the new time.
        $arr[$i] = substr($arr[$i], 0, -2);

        //Create a temporary array that would split each time delimited by ":".
        $arrTemp = explode(":", $arr[$i]);

        //Split the hour and minutes into separate variables.
        $hours = (int) $arrTemp[0];
        $minutes = (int) $arrTemp[1];

        //Setup hours to follow the 12 hour format.
        if(($timeSuffix == "am") And ($hours == 12)) {
            //Set the hours to 0 if the time is 12am
            $hours = 0;
        }
        if(($timeSuffix == "pm") And ($hours != 12)) {
            $hours += 12;
        }

        //Store the total minutes in an array
        array_push($arrTotalMins, ($hours * 60) + $minutes);
    }

    //Accounting for the next day.
    if ($arrTotalMins[0] > $arrTotalMins[1]) {
        //Add 1440 minutes which is 24 hours into the second time so that the next day occurs.
        $arrTotalMins[1] += 1440;
    }

    //Subtract the elements in the totalMins array to get the number of minutes between the two times.
    return ($arrTotalMins[1] - $arrTotalMins[0]);

}

?>