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
		$user= new User_model();
		$user->username=$this->input->post('username');
		$user->password=md5($this->input->post('password'));
		$user->level=2;
		$user->picture=$this->input->post('picture');
		$user->save();
		redirect('admin/get/index');		
	}
	
	public function tambah_kategori(){
		$kategori=new Kategori_model();
		$kategori->nama_kat=$this->input->post('nama_kat');
		$kategori->save();
		redirect('admin/get/kategori');
	}
	public function tambah_post(){
		$postingan = new Post_model();
		$postingan->id_user=$this->session->userdata('id_user');
		$postingan->id_kat=$this->input->post('id_kat');
		$postingan->judul_post=$this->input->post('judul_post');
		$postingan->konten_post=$this->input->post('konten_post');
		$postingan->tanggal_post=date('Y-m-d', time());
		$postingan->status=$this->input->post('status');
		$postingan->save();
		redirect('admin/get/post');
	}
	public function update_kategori($id){
		$kategori = new Kategori_model();
		$kategori->id_kat=$this->input->post('id_kat');
		$kategori->nama_kat=$this->input->post('nama_kat');
		$kategori->update();
		redirect('admin/get/kategori');
	}
	public function update_post($id){
		$postingan = new Post_model();
		$postingan->id_post=$this->input->post('id_post');
		$postingan->id_user=$this->session->userdata('id_user');
		$postingan->id_kat=$this->input->post('id_kat');
		$postingan->judul_post=$this->input->post('judul_post');
		$postingan->konten_post=$this->input->post('konten_post');
		$postingan->tanggal_post=date('Y-m-d', time());
		$postingan->status=$this->input->post('status');
		$postingan->update();
		redirect('admin/get/post');
	}
	
}
