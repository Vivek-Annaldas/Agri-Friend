<?php

class demo{
    function add($a,$b)
    {
        echo "add is".$a+$b;
    }
}
class demo1 extends date_modify{
    function add($a,$b)
    {
        parent::add(5,6);
        echo "mul is".$a*$b;
    }
}
$obj=new demo1();
$obj->add(4,5);
?>