<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get extends CI_Controller {

	public function __construct(){
		
		parent::__construct();
		$is_logged_in=$this->session->userdata('is_logged_in');
		if($is_logged_in==true){
		}else
		{
		      redirect('admin/login');
		}
	}
	public function index(){
		load_template_admin('admin/konten');		
	}
	public function tambah_kategori(){
		load_template_admin('admin/tambah_kategori');
	}
	public function kategori(){
		$kategori = new Kategori_model();
		$data['list_kategori']= $kategori->all();
		load_template_admin('admin/kategori', $data);
	}
	public function hapus_kategori($id){
		$kategori = new Kategori_model();
		$kategori->delete($id);
		redirect('admin/get/kategori');
	}
	public function update_kategori($id){
		$kategori = new Kategori_model();
		$kategori->get_by('id_kat', $id);	
		load_template_admin('admin/update_kategori', $kategori);
	}
	public function post(){
		$postingan = new Post_model();
		$data['list_post'] = $postingan->all();	
		load_template_admin('admin/post', $data);
	}
	public function tambah_post(){
		$kategori = new Kategori_model();
		$data['list_kategori']= $kategori->all();
		load_template_admin('admin/tambah_post', $data);		
	}
	public function update_post($id){
		$kategori = new Kategori_model();
		$postingan['list_kategori']= $kategori->all();
		$postingan['post'] = new Post_model();
		$postingan['post']->get_by('id_post', $id);
		load_template_admin('admin/update_post', $postingan);
		
	}
	public function hapus_post($id){
		$postingan = new Post_model();
		$postingan->delete($id);
		redirect('admin/get/post');
	}
	
}
