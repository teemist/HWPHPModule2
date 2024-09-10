<?php

class DigitalGood extends Good
{

    function calculateFinalPrice()
    {
       return $this->price;
    }

    public function calculateProfit()
    {
        return $this->calculateFinalPrice() * 0.2;
    }
}