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
			'id_user'=>$query->id_user,
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
		redirect('admin/get/user');		
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
	public function update_password(){
		$id = $this->input->post("id_user");
		$pass_lama = $this->input->post("password_lama");
		$pass_baru1 = $this->input->post("password_baru1");
		$pass_baru2 = $this->input->post("password_baru2");
		
		$u = new User_model();
		$user = $u->get_by('id_user',$id);
		$pass_lama_enc = md5($pass_lama);
		if ($pass_baru1 == $pass_baru2 ){
			if ($pass_lama_enc == $user->password){
				$user->password = md5($pass_baru1);
				$user->update_password();
				redirect("admin/get/update_password/$id/succes_update");
			}else{
				redirect("admin/get/update_password/$id/old_pass_error");	
			}
		}else{
			redirect("/");
		}
		
	}	
	
	
}
