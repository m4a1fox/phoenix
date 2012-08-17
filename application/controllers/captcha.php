<?php
class Captcha extends Controller{
	function Index(){
		$data['img'] = '<img src="./usefull/captcha/" />';
		$this->view('captcha/index', $data);
	}
}