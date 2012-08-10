<?php
class Cookie{    
    
    public static function set($key, $value, $time=600){
        setcookie($key, $value, time()+$time, '/');
    }
        
    public static function get($key){
        if(isset($_COOKIE[$key]))
    		return $_COOKIE[$key];
    }
       
    public static function del($key){
        setcookie($key, '', time()-10, '/');
    }

}
