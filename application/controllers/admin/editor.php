<?php
    class Editor extends Controller{

        function __construct(){
            parent::__construct();
            $this->model('get_db'); // Вызывается внутрення модель. Кот. создается админом
            $this->library('window'); // Вызывается класс созданный создателем LEAVSE.
            MOUNT::$JS = array('views/admin/editor/js/init.js');
        }
        
        function Index(){
            $this->view('admin/editor/index');
        }
    }