<?php session_start();
/** 
 * -----M4A1_FOX-----
 * PHENIX Std. Project 0.0.2
 * @version 0.0.3
 * We establish the charset and level of errors 
 */ 
header("Content-Type: text/html; charset=utf-8"); 
error_reporting(E_ALL);




require './system/config/database.php';
require './system/config/defaultFunction.php';
require './system/config/defaultVar.php';

define('M4A1_HOST',     'http://'. $_SERVER['HTTP_HOST'] .'/');
define('M4A1_ROOT',     dirname(__FILE__).DIRECTORY_SEPARATOR);
define('M4A1_LIBS',     M4A1_ROOT.'system'.DIRECTORY_SEPARATOR.'libs'.DIRECTORY_SEPARATOR);
define('M4A1_CONTR',    M4A1_ROOT.'application'.DIRECTORY_SEPARATOR.'controllers'.DIRECTORY_SEPARATOR);
define('M4A1_MODELS',   M4A1_ROOT.'application'.DIRECTORY_SEPARATOR.'models'.DIRECTORY_SEPARATOR);
define('M4A1_VIEWS',   	M4A1_ROOT.'application'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR);
spl_autoload_register('autoload');


set_exception_handler('__exception_php_error');
set_error_handler('__simple_php_error');

Registry::set('DB', new Database($db['default']['dbdriver'], $db['default']['hostname'], $db['default']['dbname'], $db['default']['username'], $db['default']['password'], $db['default']['char_set']));


new Bootstrap();