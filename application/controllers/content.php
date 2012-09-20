<?php

class Content extends Controller{
    function __construct() {
        parent::__construct();
        $this->model('get_db');
        $this->js = array('views/content/js/init.js');
    }
    
    function Index(){
        header("Location: /");
    }
    
    function show($link='captcha'){
        $data['content'] = $this->get_db->select(array('link'=>$link), 'content');
        if(!empty($data['content'])){
            self::$TITLE = $data['content']->title;
            $this->view('content/index', $data);
        }else{
            /**
             * @todo view default page if $data['content'] return empty. Maybe it must be 404 page
             * 
             */
        }
    }
}