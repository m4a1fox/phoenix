<?php 
    class Welcome extends Model{
        
        public static function wel(){
            return self::$_db->selectMulti('content');
        }
    }