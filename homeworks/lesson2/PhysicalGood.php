<?php

class PhysicalGood extends DigitalGood
{

    public function __construct($title, $price){
        $this->title = $title;
        $this->price = $price;
    }

    function calculateFinalPrice()
    {
        return $this->price * 2;
    }
}