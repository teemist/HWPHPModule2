<?php
// 1, 2, 3
class Product
{
    var $title;
    var $manufacturer;
    var $price;

    function risePrice(){
        ++$this->price;
    }


}