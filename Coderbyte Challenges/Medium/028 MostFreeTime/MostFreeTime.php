<?php
/*

Developer: Mirza S. Baig

Date: 6-25-2014

Description:    Using the PHP language, have the function MostFreeTime(strArr) read the
                strArr parameter being passed which will represent a full day and will be
                filled with events that span from time X to time Y in the day. The format of
                each event will be hh:mmAM/PM-hh:mmAM/PM. For example, strArr may be
                ["10:00AM-12:30PM","02:00PM-02:45PM","09:10AM-09:50AM"]. Your program will
                have to output the longest amount of free time available between the start
                of your first event and the end of your last event in the format: hh:mm. The
                start event should be the earliest event in the day and the latest event
                should be the latest event in the day. The output for the previous input
                would therefore be 01:30 (with the earliest event in the day starting at
                09:10AM and the latest event ending at 02:45PM). The input will contain at
                least 3 events and the events may be out of order.
*/

//Create and store all test vectors in an array.
$vectors = array(array("10:00AM-12:30PM","02:00PM-02:45PM","09:10AM-09:50AM"), array("12:15PM-02:00PM","09:00AM-10:00AM","10:30AM-12:00PM"), array("12:15PM-02:00PM","09:00AM-12:11PM","02:02PM-04:00PM"));

//Execute the test vectors using the function
foreach ($vectors as $vector) {
    echo "Test Vector: '". implode(",", $vector) . "':" . PHP_EOL;
    echo "Output:" . " " . MostFreeTime($vector). PHP_EOL;
}

function MostFreeTime($strArr) {

    //Declare array variable.
    $arr = array();

    //Declare variables for hour and minute.
    $h = 0;
    $m = 0;

    //Sort the times array with the earliest time appearing first.
    usort($strArr, 'sortByTime');

    //Get the number of free minutes between the times, and store them in an array.
    for($i = 0; $i < count($strArr)-1; $i++) {
        array_push($arr, CountingMinutes(substr($strArr[$i], 8), substr($strArr[$i+1], 0, 7)));
    }

    //Convert the maximum value found in the array (which will be in minutes) to the format, "hh:mm".
    $h = floor(max($arr) / 60) < 10 ? 0 . floor(max($arr) / 60) : floor(max($arr) / 60);
    $m = (max($arr) % 60) < 10 ? 0 . (max($arr) % 60) : (max($arr) % 60);

    //Return the final value.
    return $h . ":" . $m;
}

//A small function to be used in "uasort" that will sort the times in an array.
function sortByTime($a, $b){
    $a = strtotime(substr($a, 0, 7));
    $b = strtotime(substr($b, 0, 7));
    return $a - $b;
}

//Create a small function to get the total number of minutes between two times.
function CountingMinutes($startTime, $endTime) {
    return (strtotime($endTime) - strtotime($startTime)) / 60;
}

?>