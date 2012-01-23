<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Post extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('index');
	}
	public function ceklogin()
	{
		$this->load->model('user');
		$query=$this->user->ceklogin();
		if($query){
			$session=array(
			'username'=>$this->input->post('username'),
			'is_logged_in'=>true);
			$this->session->set_userdata($session);
			redirect('admin/get/beranda');
		}
		else
		{
			$this->index();
		}
	}
}
