<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Controller {	
	public function index()
	{
		$this->load->view('index');
	}
	public function ceklogin()
	{
		$query=$this->user_model->ceklogin();
		if($query){
			$session=array(
			'username'=>$this->input->post('username'),
			'is_logged_in'=>true);
			$this->session->set_userdata($session);
			redirect('admin/get/index');
		}
		else
		{
			redirect("admin/login/index/error");
		}
	}
	public function tambah_user(){
		$data= new User_model();
		$data->username=$this->input->post('username');
		$data->password=md5($this->input->post('password'));
		$query=$this->user->save();
		
	}
	
}
