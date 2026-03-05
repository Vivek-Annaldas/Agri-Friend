<?php

class Trial{
    function display_data(){
        echo "<br>Inside parent class<br>";
    }
}
class demo extends Trial{
    public $firstname = "John";
    public $lastname = " Wick";

    function display(){
        echo "<br>Firstname: ".$this->firstname;
        echo "<br>Lastname: ".$this->lastname;
    }

    function setData($firstname, $lastname){
        $this->firstname = $firstname;
        $this->lastname = $lastname;
    }
}

// using introspection methods

$obj  = new demo;

// store class properties
$class_properties = get_class_vars("demo");

// store obj properties
$obj_properties = get_object_vars($obj);

// store class methods
$class_methods = get_class_methods("demo");

// using getClass
echo "<br>Class of obj: ".get_class($obj);
echo "<br><br>";

// class exists
echo "<br>does demo class exists?: ".class_exists("demo");
echo "<br><br>";

// method exists
echo "<br>does display method exists in demo?: ".method_exists($obj,"display");
echo "<br><br>";

//store declared classes
$declared_classes = get_declared_classes();

// issubclass method
echo "is demo subclass of Trial?: ".is_subclass_of("demo","Trial");
echo "<br><br>";

// getparent class method
echo "Parent class of demo: ". get_parent_class("demo");
echo "<br><br>";

echo "demo class properties: <br>";
print_r($class_properties);
echo "<br><br>";

echo "obj properties: <br>";
print_r($obj_properties);
echo "<br><br>";

echo "demo class methods: <br>";
print_r($class_methods);
echo "<br><br>";

echo "Declared classes: <br>";
print_r($declared_classes);
echo "<br><br>";