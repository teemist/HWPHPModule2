<?php

trait SingletonRealization{
    public static function getInstance(){
        if (self::$instance){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function doAction(){
        echo "singleton action";
    }
}

class Singleton
{
    private static var $instance;

    use SingletonRealization;
}