<?php

class Request{
    
    public static $error = array();
    
    public static function set($name, $value){
            self::$error[$name] = $value;
    }
    
    public static function get($name){
        if(!empty(self::$error) && isset(self::$error[$name])){
            return self::$error[$name];
        }
    }
}