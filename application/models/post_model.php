<?php 
class Post_model extends CI_Model{
	var $id_post='';
	var $id_user='';
	var $id_kat='';
	var $judul_post='';
	var $konten_post='';
	var $tanggal_post='';
	var $status='';

	function all()
	{
	      $q=$this->db->get('post');
	      return $q->result();
	}
	function get_by($key, $value){
	      $q=$this->db->get_where('post', array($key->$value));
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
	      $this->db->where('id_post',$id);
	      $this->db->update('post', $data);
	}
}
?>