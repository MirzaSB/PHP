<?php

class Conf {
    private $file;
    private $xml;
    private $lastmatch;

    function __construct($file) {
        $this->file = $file;
        if(! file_exists($file)) {
            throw new Exception("The file, '" . $file . "' does not exist.");
        }
        $this->xml = simplexml_load_file($file);
    }

    function write() {
        if(! is_writable($this->file)) {
            throw new Exception("file '{$this->file}' is not writable'");
        }
        file_put_contents($this->file, $this->xml->asXML());
    }

    function get($str) {
        $matches = $this->xml->xpath("/conf/item[@name=\"$str\"]");
        if(count($matches)) {
           $this->lastmatch = $matches[0];
            return (string) $matches[0];
        }
        return null;
    }

    function set($key,$value) {
        if(! is_null($this->get($key))) {
            $this->lastmatch[0] = $value;
            return;
        }
        $conf = $this->xml->conf;
        $this->xml->addChild('item', $value)->addAttribute('name', $key);
    }
}

try {
    $conf = new Conf("/Users/mirzabaig/Workspace/PHP Workspace/PHP Objects, Pattern, and Practice/Chapter 4 Advanced Features/testConf.xml");
    print "user: " . $conf->get('user') . "\n";
    print "host: " . $conf->get('host') . "\n";
    $conf->set("pass", "newpass");
    $conf->write();
} catch (Exception $e) {
    die($e->__toString());
}

?>