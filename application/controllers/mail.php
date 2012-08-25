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
               $data['mail_subject'] = 'test_subj';
               $data['mail_body'] = 'test_body';
               
               
               
               
               
               
               
               
               $this->sendmail->initialize($data);
               
               
               
               
               
               
               
               
               $this->view('mail/index');
            
	   }
       

	}
	
?>