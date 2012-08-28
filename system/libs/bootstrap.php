<?php

class Bootstrap{

    function __construct(){
        
        $url = isset($_GET['url']) ? $_GET['url'] : null;
        $url = rtrim($url, '/');
        $url = explode("/", $url);
    
        if(empty($url[0])){
            //include './controllers/index.php';
            $controller = new Index();
            $controller->index();
            return false;
        }
    
        $file = M4A1_CONTR . $url[0] . '.php';
        


        if(file_exists($file)){
            require $file;
        }else{
           M4A1_Exception::php_error(new Exception('View is not exists'), viewIsNotExistInClass($file));
           exit();
        }
       
        $controller = new $url[0];

        if(isset($url[2])){
            if(method_exists($controller, $url[1])){
                $controller->{$url[1]}($url[2]);
            }else{
                M4A1_Exception::php_error(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
                exit();
            }
        }else{
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                }else{
                    M4A1_Exception::php_error(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
//                    exception_handler(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
//                    exit();
                }
            }else{
                if(method_exists($controller, 'index')){
                    $controller->index();    
                }else{
                    exception_handler(new Exception('Method not exists'), methodIsNotExistInClass('Index', $file));
                    exit();
                }
            }
        }
    }
    
}