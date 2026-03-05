<?php
// Base class
class BaseClass {
    // Base class method
    public function show() {
        echo "This is the BaseClass method.<br>";
    }
}

// Derived class
class DerivedClass extends BaseClass {
    // Overriding the show method of BaseClass
    public function show() {
        echo "This is the DerivedClass method.<br>";
        // Call the base class method
        parent::show();
    }
}
$derivedObj = new DerivedClass();
$derivedObj->show(); // Output: This is the DerivedClass method. This is the BaseClass method.
?>