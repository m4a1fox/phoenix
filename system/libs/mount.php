<?php



class MOUNT{
    
    
    
    public static $JS = array();
    
    
    static function JS(){
        foreach(self::$JS as $js){
            echo '<script type="text/javascript" src="'.M4A1_HOST.'application/'.$js.'"></script>';
        }
    }
    
    
}