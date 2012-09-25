<?php

class Bootstrap{

    public $fileName;
    public $dir;
    
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
        
        $file = $this->findFile($url[0]);
        
        
        
//        $file = M4A1_CONTR . $url[0] . '.php';
        
        

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
                exit;
            }
        }else{
            if(isset($url[1])){
                if(method_exists($controller, $url[1])){
                    $controller->{$url[1]}();
                }else{
                    M4A1_Exception::php_error(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
//                    exception_handler(new Exception('Method not exists'), methodIsNotExistInClass($url[1], $file));
                    exit;
                }
            }else{
                if(method_exists($controller, 'index')){
                    $controller->index();    
                }else{
                    exception_handler(new Exception('Method not exists'), methodIsNotExistInClass('Index', $file));
                    exit;
                }
            }
        }
    }
    
        /**
     * 
     * @param type $file // file name
     * @return type realpath to contr.
     * methods: $this->dir->getSubPathName()    - return path to file, together with directory, if file is in
     *          $this->dir->getFilename()       - return filename
     *          $this->dir->getSubPath()        - return folder in wich file is
     *          $this->dir->key()               - real path to file
     */
    
    public function findFile($file){
        $this->fileName = $file;
        $this->dir = new RecursiveIteratorIterator(new RecursiveDirectoryIterator(M4A1_CONTR), TRUE);
        while($this->dir->valid()) {
            if (!$this->dir->isDot() && $this->dir->getFilename() == $this->fileName.'.php'){
                $fileExist = $this->dir->key();
            }
            $this->dir->next();
        }
        
        if(!empty($fileExist)){
            return $fileExist;
        }else{
            return $file;
        }
    }
}