<?php

class SendMail {

    public $mail_name = "";         # Send name.
    private $mail_to = "";          # Responce name.
    public $mail_from = "";         # Send.
    private $mail_subject = "";     # msg subject.
    public $mail_body = "";         # msg content.
    private $charset = "utf-8";     # msg charset.
    private $eol = "\n";            # eol.
            
    
    
    
    
    
    public function __construct(){}
    
    function initialize($param = array()){
        foreach ($param as $key => $value) {
            $this->$key = $value;
        }
    }
    
    function header(){ # создание заголовков письма.

  	# Common Headers
  		$headers = 'MIME-Version: 1.0'.$this->eol;
  		$headers .= 'Content-type: text/html; charset='.$this->charset.$this->eol;
  		$headers .= "Content-Transfer-Encoding: 8bit".$this->eol;
  		$headers .= "From: =?".$this->charset."?B?".base64_encode($this->mail_name)."?=<".$this->mail_from.">".$this->eol;
  		$headers .= "Return-Path: ".$this->mail_name."<".$this->mail_from.">".$this->eol;    
  		$headers .= "Message-ID: <".time()."-".$this->mail_from.">".$this->eol;
  		$headers .= "X-Mailer: PHP v".phpversion().$this->eol;
  		 		
  		return $headers;
    }
    
    
    function msg(){ # Создание содержимого письма.
        $message = nl2br($this->mail_body).$this->eol;
        return $message;
    }
    
    function subject(){ # Создание и перекодирование темы сообщения.
        $subject = "=?".$this->charset."?B?".base64_encode($this->mail_subject)."?=".$this->eol;
        return $subject;
    }
    
    function send(){ # Отправка сообщения.
        
          return  mail($this->mail_to,$this->subject(),$this->msg(),$this->header());
    }
}
