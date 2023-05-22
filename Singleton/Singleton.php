<?php
class Singleton{
    public static $instance;
    private static $counter = 0;

    function __construct(){
        if(self::$instance==null)
            self::$instance = new Singleton();
        return self::$instance;
    }

    public function getInstance(){

    }
    public static function setCounter(){
        self::$counter++;
    }
    public static function getCounter(){
        return self::$counter;
    }
}
?>