<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Login extends CI_Controller {
	public function index($stat=NULL){
		$data['stat'] = $stat;
		$this->load->view('admin/login', $data);
	}
      
	
}
