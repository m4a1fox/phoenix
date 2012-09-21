<?php
/**
 * Copyright (C). 2012 M4A1FOX. All Right Reserved.
 * 
 * @copyright Copyright 2012, m4a1fox
 * @author m4a1fox
 * 
 * @desc Контроллер. Класс для соединения view и model
 * @return require model
 * 
 * @param public method __construct
 * @return $this->view кот. содержит new View для загрузки view страницы
 * 
 * @param public method loadModel($name)
 * @return загружает модуль из папки './models'
 * 
 * @param RefreshUser - проверка пользователя
 * @return Проверку cookie и session пришедшего на сайт пользователя
 */
class Controller{
    /**
     * 
     * 
     * 
     */
    
    

    
    public function __construct(){
//        $this->load = new Load();
    }
    






    function model($name){
            return $this->loadClass($name);
        }
        

    

    
    
        
	public function view($file, $data=array(), $noInclude = false){
            if(file_exists(M4A1_VIEWS . $file . '.php')){
                extract($data);
                if($noInclude){
                        require M4A1_VIEWS . $file . '.php';
                }else{
                        require M4A1_VIEWS . 'header.php';
                        require M4A1_VIEWS . $file . '.php';
                        require M4A1_VIEWS . 'footer.php';
                }
            }else{
                M4A1_Exception::php_error(new Exception('View is not exists'), viewIsNotExistInClass($file));
                exit();
            }
	}
  
   /**
     * 
     * Эксперементальный метод для загрузки сразу нескольких классов
     * при этом не определяя их через оператор new...
     * @todo
     * 
     */
    
    
    function library($name){
        if(is_array($name)){
            foreach($name as $value) {
                $this->loadClass($value, M4A1_LIBS);
            }
        }else{
            $this->loadClass($name, M4A1_LIBS);
        }
    }
    
    function loadClass($name, $const = M4A1_MODELS){
        
         $file = $const . $name . '.php';
            if(file_exists($file)){
                $this->$name = new $name();
            }else{
                exception_handler(new Exception('Такой модели не существует: <strong>'.$name.'</strong>'), viewIsNotExistInClass($file));
                exit();
            }    
    }
}