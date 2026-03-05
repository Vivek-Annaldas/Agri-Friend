<?php

class Metal{
    protected $conductivity,$hardness;
    
    public function __construct($conductivity,$hardness){
        $this->conductivity = $conductivity;
        $this->hardness = $hardness;
    }

    public function display(){
        echo "<br>Conductivity of metal: ".$this->conductivity;
        echo "<br>hardness of metal: ".$this->hardness;
    }
}

class Copper extends Metal{
    private $resilliance;
    public function __construct($conductivity, $hardness,$resilliance){
        $this->conductivity = $conductivity;
        $this->hardness = $hardness;
        $this->resilliance = $resilliance;
    }

    public function display(){
        parent:: display();
        echo "<br>Resilliance of metal: ".$this->resilliance;
    }
}

$c = new Copper("high","low","low");

$c->display();