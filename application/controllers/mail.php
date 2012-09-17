<?php
	class Mail extends Controller{

            
            
            function __construct() {
                parent::__construct();
                $this->library('sendmail');
               
            }
            
            
	   
	   function Index(){
               
               $data['mail_name'] = 'test_name';
               $data['mail_to'] = 'm4a1fox@mail.ru';
               $data['mail_from'] = 'test_from';
               $data['mail_subject'] = 'test_subj_12';
               $data['mail_body'] = 'test_body_113213213';
               
               
               
               
               
               
               
               
               $this->sendmail->initialize($data);
               
               
               $this->sendmail->send();
               
               
               
               
               
               $this->view('mail/index');
            
	   }
       

	}
	
?>