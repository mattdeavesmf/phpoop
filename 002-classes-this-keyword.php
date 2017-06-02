<?php

class A
{
    public function foo()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }

    static function bar()
    {
        if (isset($this)) {
            echo '$this is defined (';
            echo get_class($this);
            echo ")\n";
        } else {
            echo "\$this is not defined.\n";
        }
    }
}

class B
{
    static function bar()
    {
        A::bar();
    }
}

$a = new A();
$a->foo();

A::bar();
$b = new B();
$b->bar();
B::bar();