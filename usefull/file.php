<?php
$root = $_SERVER['DOCUMENT_ROOT'];


if(isset($_POST['name'])){
$file = $root.$_POST['name'];
echo file_get_contents($file);
}

if(isset($_POST['text'])){
    $f = fopen($root.$_POST['file'], 'w');
    fclose($f);
    $save = file_put_contents($root.$_POST['file'], $_POST['text']);
    if($save){
        echo 'File '.$_POST['file'] .' is saved!';
    }
}

if(isset($_POST['folderParent'])){
    
    $folderParent = $_POST['folderParent'];
    $folderNew = $_POST['folderNew'];
    
    $req = mkdir($root.$folderParent.$folderNew, 0766, TRUE);
    
    if($req){
        echo 'folder '.$folderNew. ' sucssefuly created';
    }
    
    
}