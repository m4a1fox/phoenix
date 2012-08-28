<?php

class M4A1_Exception{

    public static $levels = array(
                        E_ERROR			=>	'Error',
                        E_WARNING		=>	'Warning',
                        E_PARSE			=>	'Parsing Error',
                        E_NOTICE		=>	'Notice',
                        E_CORE_ERROR		=>	'Core Error',
                        E_CORE_WARNING		=>	'Core Warning',
                        E_COMPILE_ERROR		=>	'Compile Error',
                        E_COMPILE_WARNING	=>	'Compile Warning',
                        E_USER_ERROR		=>	'User Error',
                        E_USER_WARNING		=>	'User Warning',
                        E_USER_NOTICE		=>	'User Notice',
                        E_STRICT		=>	'Runtime Notice'
                        );

//    public function __construct(){}
   
   
    public static function php_error_variable($code = 0, $message, $file = '', $line = 0){
        $info = ( ! isset(self::$levels[$code])) ? $code : self::$levels[$code];    
        include M4A1_ROOT . './system/errors/var_error.php';
    }
   
    public static function php_error($expClass, $myMessage){
        include M4A1_ROOT . './system/errors/exc_error.php';
    }
   
    public static function exception_error($expClass, $myMessage){
        include M4A1_ROOT . './system/errors/pdo_error.php';
    }
}