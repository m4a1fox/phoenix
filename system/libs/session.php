<?php
class Session {
	public static function init(){
            ini_set('session.gc_maxlifetime', 10);
            ini_set('session.cookie_lifetime', 10);
            ini_set('session.save_path', $_SERVER['DOCUMENT_ROOT'] .'/sessions');
            session_start();
	}
	
	public static function set($key, $value){
		$_SESSION[$key] = $value;
	}

    public static function get($key, $secondKey = false){
        if($secondKey == true){
            if(isset($_SESSION[$key][$secondKey]))
                return $_SESSION[$key][$secondKey];  
        }else{
            if(isset($_SESSION[$key]))
                return $_SESSION[$key];
        }
		return false;
	}
    
	public static function destroy(){
		session_destroy();
	}
}