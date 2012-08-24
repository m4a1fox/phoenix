<?php 
//class Load{
//        
//        function __construct(){}
//    
//
//        function model($name){
//            $file = M4A1_MODELS . $name . '.php';
//            if(file_exists($file)){
//                return $this->$name = new $name();
//            }else{
//                exception_handler('Такой модели не существует: <strong>'.$name.'</strong>');
//                exit();
//            }
//        }
//    
//
//    
//    
//        
//	public function view($name, $data=array(), $noInclude = false){
//            if(file_exists(M4A1_VIEWS . $name . '.php')){
//                extract($data);
//                if($noInclude){
//                        require M4A1_VIEWS . $name . '.php';
//                }else{
//                        require M4A1_VIEWS . 'header.php';
//                        require M4A1_VIEWS . $name . '.php';
//                        require M4A1_VIEWS . 'footer.php';
//                }
//            }else{
//                exception_handler('Исключение в виде. Файл <strong>'.$name.'.php</strong> не существует!');
//                exit();
//            }
//	}
//        
//    function controller(){
//        echo 'This is '.__METHOD__.' function from '.__CLASS__.' class' ;
//    }
//    
//
//    
//        /**
//     * 
//     * Эксперементальный метод для загрузки сразу нескольких классов
//     * при этом не определяя их через оператор new...
//     * @todo
//     * 
//     */
//    
//    
//    function library($name){
//
//
//            $file = M4A1_LIBS . $name . '.php';
//        
//        if(file_exists($file)){
//            return $this->$name = new $name();
//        }else{
//            exception_handler('Такой модели не существует: <strong>'.$name.'</strong>');
//            exit();
//        }    
//        
//        
//
//    }
//    
//    
//}