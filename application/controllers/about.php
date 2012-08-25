<?php

class About extends Controller{
    function __construct(){
        parent::__construct();
        $this->library('paginator');
        $this->model('get_db');
    }
    
    function Index($id=1){
            $this->library('paginator');
            $this->model('get_db');

            $config['id'] = $id;
            $config['link'] = M4A1_HOST.strtolower(__CLASS__).'/page/';
            $config['table'] = 'user';
            $config['per_page'] = 5;

            $this->paginator->initialize($config);
            $data['result'] = $this->paginator->getPage('', 'ORDER BY `id` DESC');
            $data['number'] = $this->paginator->paginate();

            $this->view('about/index', $data);
            
	   }

	
    
    function add(){
        if (isset($_POST['send'])) {
            if (!empty($_POST['name'])) {
                $this->get_db->insert1(array('name' => $_POST['name']), 'user');
                header("Location: /about");
            } else {
                echo 'Error';
            }
        }
    }
    
    function edit($id){
       if(isset($_POST['update'])){
            $this->get_db->updateTable($_POST['id'], array('name'=>$_POST['name']));
            header("Location: /about");
        }
        $data['user'] = $this->get_db->select(array('id'=>$id));
        if($data['user'])
        	$this->view('./about/edit', $data);
        else
        	header("Location: /about");
    } 
    
    function page($id = 1){
        $this->index(!empty($id)?$id:1);
    }

}