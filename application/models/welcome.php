<?php 
    class Welcome extends Model{
        
        function welcome(){
            return 'This is <b>'.__METHOD__.'</b> function from <b>'.__CLASS__.'</b> class' ;
        }
    }