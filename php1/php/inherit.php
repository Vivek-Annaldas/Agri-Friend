<?php

class A
{
    protected $name;
    public function __construct($name) 
	{
        $this->name = $name;
    }

    public function display() 
	{
        echo "Name: " . $this->name . "<br>";
    }
}

class B extends A
{
    protected $roll;
    public function __construct($name,$roll) 
	{
        parent::__construct($name); 
        $this->roll = $roll;
    }

    public function display1() {
        $this->display(); 
        echo "Roll NO: " . $this->roll . "\n";
    }
}

$obj = new B("Shruti",2);
$obj->display1();

?>
