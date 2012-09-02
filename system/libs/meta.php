<?php
class Meta{
    
    public static function title($title = NULL){
        if(isset($title)){
            echo $title;
        }else{
            echo "Var title is empty";
        }
    }
    
}