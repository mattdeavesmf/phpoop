<?php
//Very basic class
class SimpleClass
{
    // property declaration
    public $var = 'a default value';

    // method declaration
    public function displayVar() {
        echo $this->var;
    }
}

//How to initialise an instance of the class and call public method
$mySimpleClass = new SimpleClass();
$mySimpleClass->displayVar(); 