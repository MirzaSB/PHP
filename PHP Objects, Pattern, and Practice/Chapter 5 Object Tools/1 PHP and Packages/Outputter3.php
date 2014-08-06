<?php

class Outputter {
    private $out;
    function __construct($out) {
        $this->out = $out;
    }

    function getOutput() {
        return ("Processed output --> " . $this->out);
    }
}

$test = new Outputter("This is a test");
echo $test->getOutput();

?>