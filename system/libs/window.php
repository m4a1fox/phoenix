<?php
class Window{
    private $counts = array();        // Calculation of the necessary lines in the system
    private $per;        // Calculation of the necessary lines in the system




    function __construct($param = array()){
        $this->initialize($param);
    }

    function initialize($param = array()){
        if(count($param) > 0){
            foreach ($param as $key => $value) {
                $this->counts[$key] = $value;
            }
        }
    }
    
    function &getInfo(){
        return $this->counts;
    }
}

?>