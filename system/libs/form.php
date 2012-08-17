<?php
class Form{
    
    /** @var array $_currentItem the Immediately posted item  */
    private $_currentItem = null;
    
    
    /** @var array $_postData Stores the Post Data */
    private $_postData = array();
    
    /** @var object $_val The validator object */
    private $_val = array();

    /** @var array $_error Holds the current forms errors */
    private $_error = array();
    
    /**
     * __construct - Instantiates the validator class
     */
    public function __construct(){
        $this->_val = new Val();
    }
    
    /**
     * post - this is to rum $_POST
     * @param type $field string - The HTML fieldname to post
     * @return \Form 
     */
    
    public function post($field){
        $this->_postData[$field] = $_POST[$field];
        $this->_currentItem = $field;
        return $this;
    }
    
    /**
     * fetch - Return pst data
     * @param type $fieldName
     * @return mixed String ar array
     */
    
    public function fetch($fieldName = false){
        if($fieldName){
            if(isset($this->_postData[$fieldName]))
                return $this->_postData[$fieldName];
            else
                return false;
        }else{
            return $this->_postData;
        }
    }

    /**
     * val - This is to validate
     * @return \Form 
     */
    public function val($typeOfValidate, $arg = null){
        if($arg == null)
            $error = $this->_val->{$typeOfValidate}($this->_postData[$this->_currentItem]);
        else
            $error = $this->_val->{$typeOfValidate}($this->_postData[$this->_currentItem], $arg);
        
    if($error)
            $this->_error[$this->_currentItem] = $error;
        return $this;
    }
    
    
    
    public function submit(){
        if(empty($this->_error)){
            return true;
        }else{
            return $this->_error;
        }
    }
}