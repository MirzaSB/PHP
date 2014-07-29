<?php

abstract class DomainObject {
    private $group;

    public function __construct() {
        $this->group = static::getGroup();
    }

    public static function create() {
        //return new self();
        return new static();
    }

    static function getGroup() {
        return "default";
    }
}

class User extends DomainObject {
    /*public static function create() {
        return new User();
    }*/
}

class Document extends DomainObject {
    /*public static function create() {
        return new Document();
    }*/
    static function getGroup() {
        return "document";
    }
}

class Spreadsheet extends Document {
}

print_r(User::create());
print_r(SpreadSheet::create());

?>