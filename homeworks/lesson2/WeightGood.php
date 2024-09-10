<?php

class WeightGood extends Good
{
   private var $weight;

    public function getWeight(){
        return $this->weight;
    }

    public function setWeight($weight){
        $this->title = $weight;
    }

   public function __construct($title, $price, $weight){
       $this->title = $title;
       $this->price = $price;
       $this->weight = $weight;
   }



    function calculateFinalPrice()
    {

    }


    public function calculateProfit()
    {
        return $this->calculateFinalPrice() * 0.3;
    }
}