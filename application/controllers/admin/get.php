<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Get extends CI_Controller {

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
		$kategori = new Kategori_model();
		$postingan = new Post_model();
		$data['list_post']=$postingan->all();
		/*$data=array(
			'id_post'=>$data_post->id_post,
			'nama_kat'=>$kategori->get_by('id_kat', $data_post->id_kat),
			'judul_post'=>$data_post->judul_post,
			'tanggal_post'=>$data_post->tanggal_post,
			'status'=>$data_post->status
		);*/
		load_template_admin('admin/post', $data);
	}
	public function tambah_post(){
		$kategori = new Kategori_model();
		$data['list_kategori']= $kategori->all();
		load_template_admin('admin/tambah_post', $data);		
	}
	
}
