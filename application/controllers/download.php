<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Download extends CI_controller{
      public function index(){
	  $this->load->view('download');
      }  
}