<?php

require "functions.php";

//require "router.php";

class Person
{
    public $name;
    public $age;

    public function breathe($status)
    {
        echo $this->name . 'is breathing !' . $status;
    }
}

$person = new Person();

$person -> name = 'john doe';
$person -> age = 25;
$status = 0;

dd($person->breathe($status));