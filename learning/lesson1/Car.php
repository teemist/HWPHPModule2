<?php

class Car
{
    var $name;
    var $price;

    function __construct($name, $price)
    {
        $this->name = $name;
        $this->price = $price;
    }


    function drive(){
        echo 'Авто ' .$this->name.' стоит '.$this->price;
    }
}

