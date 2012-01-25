<?php 
class Post_model extends CI_Model{
	var $nama_kat='';
	var $id_post='';
	var $id_user='';
	var $id_kat='';
	var $judul_post='';
	var $konten_post='';
	var $tanggal_post='';
	var $status='';

	function all()
	{
	      $this->db->select(
		  'kategori.nama_kat,
		   post.id_post,
		   post.id_user,
		   post.id_kat,
		   post.judul_post,
		   post.konten_post,
		   post.tanggal_post,
		   post.status');
	      $this->db->from('post');
	      $this->db->join('kategori', 'kategori.id_kat = post.id_kat');
	      $q = $this->db->get();
	      return $q->result();
	}
	function get_by($key, $value){
	       $this->db->select(
		  'kategori.nama_kat,
		   post.id_post,
		   post.id_user,
		   post.id_kat,
		   post.judul_post,
		   post.konten_post,
		   post.tanggal_post,
		   post.status');
	      $this->db->from('post');
	      $this->db->join('kategori', 'kategori.id_kat = post.id_kat');
	      $this->db->where('id_post', $value);
	      $q=$this->db->get();
	      $data=$q->result();
	      $this->id_post=$data[0]->id_post;
	      $this->id_user=$data[0]->id_user;
	      $this->id_kat=$data[0]->id_kat;
	      $this->judul_post=$data[0]->judul_post;
	      $this->konten_post=$data[0]->konten_post;
	      $this->tanggal_post=$data[0]->tanggal_post;
	      $this->status=$data[0]->status;
	      return $this;
	}
	function save(){
	      $data=array(
		    'id_user' => $this->id_user,
		    'id_kat' => $this->id_kat,
		    'judul_post' => $this->judul_post,
		    'konten_post' => $this->konten_post,
		    'tanggal_post' => $this->tanggal_post,
		    'status' => $this->status
	      );
	      $this->db->insert('post', $data);
	}
	function delete($id){
	      $this->db->delete('post', array('id_post'=>$id));
	}
	function update(){
	      $data=array(
		    'id_user' => $this->id_user,
		    'id_kat' => $this->id_kat,
		    'judul_post' => $this->judul_post,
		    'konten_post' => $this->konten_post,
		    'tanggal_post' => $this->tanggal_post,
		    'status' => $this->status
	      );
	      $this->db->where('id_post',$this->id_post);
	      $this->db->update('post', $data);
	}
}
?>
