<?php
/**
 * Copyright (C). 2012 M4A1FOX. All Right Reserved.
 * 
 * @copyright Copyright 2012, m4a1fox
 * @author m4a1fox
 * 
 * @desc Класс для подключения шаблонов(view)
 * @return require view
 * @param public method render
 *  
 */

class View{
    /**
     * @desc Метод render подключает шаблоны которые находятся в папке ./view
     * @param $name - имя шаблона для подключения
     * @param $noInclude (default = false) - переключатель для, возможности подключить строго один файл
     * без './views/header.php'ж и без './views/footer.php';
     * 
     * if $noIclude = false (т.е. не передается в аргументе, то подключается и
     * './views/header.php' и './views/footer.php'; ), else (т.е. $noIclude = true),
     * подключается только переданный первым аргументом шаблон
     */
    
    
	public function render($name, $data=array(), $noInclude = false){
        extract($data);
		if($noInclude){
                        require M4A1_VIEWS . $name . '.php';
		}else{
		  print_r($name);
			require M4A1_VIEWS . 'header.php';
                        require M4A1_VIEWS . $name . '.php';
                        require M4A1_VIEWS . 'footer.php';
		}
	}
}