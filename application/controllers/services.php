<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends CI_controller{
      public function index(){
	  $this->load->view('download');
      }  
}