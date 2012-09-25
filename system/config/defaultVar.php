<?php
// ERRORS ARRAY()
$error = array();

function methodIsNotExistInClass($method, $file){
    return 'Метода <strong>'.$method.'</strong> в файле <span id="error">'.$file.'</span> не существует.';
}

function viewIsNotExistInClass($file){
    return 'Исключение в виде. Файл <span id="error">'.$file.'</span> не существует!';
}

function classIsNotExist($file){
    return 'Файл и класс <span id="error">'.$file.'</span> не существует!';
}


 /**
  * Константа
  * @var HASH_KEY
  * @desc Используется для кодирования пароля, путем добавления к основе значения define
  */
define('HASH_KEY', '@#$%');
