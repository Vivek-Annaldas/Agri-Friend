<?php

class Stud 
{
    public $name="Shruti";
    public $age=19;

    public function display() 
	{
        echo "Name: {$this->name}, Age: {$this->age}\n";
    }
}

$obj = new Stud();

$serialized_data = serialize($obj);
echo "Serialized data: <br> $serialized_data <br><br>";

$unserialized_data = unserialize($serialized_data);
echo "Unserialized data : <br>";
$unserialized_data->display();


echo "<br><br> Introspection - get class name <br>";
echo "Class name : " .get_class($obj) . "<br><br>";

echo "Introspection - get object properties <br>";
$properties = get_object_vars($obj);
echo "Object properties : ";
print_r($properties);

// Serialization


?>
