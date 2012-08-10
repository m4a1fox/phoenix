<?php
	class Mail extends Controller{
	   
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

            $this->view('mail/index', $data);
            
	   }
       
        public function page($id=1){
            $this->Index(!empty($id)?$id:1);
        }
	}
	
?>