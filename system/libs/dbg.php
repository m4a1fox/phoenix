<?php
class dbg{
    public static function showDump($param) {
        echo '<pre>'.  var_dump($param).'</pre>';
    }

    public static function showPrint($param) {
        echo '<pre>'.  print_r($param, 1).'</pre>';
    }   
}