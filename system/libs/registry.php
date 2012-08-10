<?php

class Registry{
        
        public static $_obj = array();
        
        private function __construct(){}
        public static function set($name, $object){
            self::$_obj[$name] = $object;
        }
        
        public static function get($name = NULL){
            if(!empty(self::$_obj)){
                return self::$_obj[$name];
            }
        }        
}