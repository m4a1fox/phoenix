<?php



function autoload($className) {
    if(file_exists(M4A1_CONTR . strtolower($className) . '.php')){
        include M4A1_CONTR . strtolower($className) . '.php';
    }elseif(file_exists(M4A1_LIBS . strtolower($className) . '.php')){
        include M4A1_LIBS . strtolower($className) . '.php';
    }elseif(file_exists(M4A1_MODELS . strtolower($className) . '.php')){
        include M4A1_MODELS . strtolower($className) . '.php';
    }else{
        M4A1_Exception::php_error(new Exception('Class is not exists'), classIsNotExist($className));
        exit();
    }
    
}

//function autoload($className){
//    $t = array();
//    $path_to_find = array(M4A1_CONTR, M4A1_LIBS, M4A1_MODELS);
//    foreach ($path_to_find as $value) {
//        if(file_exists($value . strtolower($className) . '.php')){
//            $t[] = $value . strtolower($className) . '.php';
//            include $value . strtolower($className) . '.php';
//        }else{
//
//            $t[] = 'Not found'.$value . strtolower($className) . '.php in '.$value;
//        }
//    }
////    echo '<pre>'.print_r($t, 1).'</pre>';
//}




function __simple_php_error($code, $message, $file, $line){   
     M4A1_Exception::php_error_variable($code, $message, $file, $line);
}

function exception_handler($expClass, $heading='Error') {
    M4A1_Exception::php_error($expClass, $heading);
    
    
//    $er = new M4A1_Exception();
//    $er->php_error($expClass, $heading);   
}

function __exception_php_error($expClass, $heading='PDO Error'){
    M4A1_Exception::exception_error($expClass, $heading);
}

