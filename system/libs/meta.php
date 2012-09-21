<?php

class META{
    
    public static $TITLE = 'Default';
    public static $KEYWORD = 'Default';
    public static $DESCRIPTION = 'Default';
    
    
    
    public static function TITLE(){
        return strtoupper(self::$TITLE);
    }

    public static function KEYWORD(){
        return self::$KEYWORD;
    }

    public static function DESCRIPTION(){
        return self::$DESCRIPTION;
    }
    
    
    
    
    
}