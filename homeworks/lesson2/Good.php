<?php
// 1
abstract class Good
{
    private var $title;
    private var $price;

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getPrice(){
        return $this->title;
    }

    public function setPrice($price){
        $this->title = $price;
    }



    public abstract function calculateFinalPrice();

    public abstract function calculateProfit();


}