<?php
//4
class Shoes extends Product
{
    var $size;
    var $season;

    function addToCart(){
        echo 'Обувь в корзине';
    }
}

// 5, 6, 7
// Вывод: 1, 1, 1, 1
// После изменения:
// $x - static, вывод аналогичный