<?php 
class Komen extends CI_Model{
	var $id_komen='';
	var $id_user='';
	var $id_post='';	
	var $isi_komen='';	
	var $tanggal_komen='';
	
	function all()
	{
	      $q=$this->db->get('komen');
	      return $q->result();
	}
	function get_by($key, $value){
	      $q=$this->db->get_where('komen', array($key->$value));
	      $data=$q->result();
	      $this->id_komen=$data[0]->id_komen;
	      $this->id_user=$data[0]->id_user;
	      $this->id_post=$data[0]->id_post;
	      $this->isi_komen=$data[0]->isi_komen;
	      $this->tanggal_komen=$data[0]->tanggal_komen;
	      return $this;
	}
	function save(){
	      $data=array(
		    'id_user' => $this->id_user;
		    'id_post' => $this->id_post;
		    'isi_komen' => $this->isi_komen;
		    'tanggal_komen' => $this->tanggal_komen;
	      );
	      $this->db->insert('komen', $data);
	}
	function delete($id){
	      $this->db->delete('komen', array('id_post'=>$id));
	}
	function update(){
	       $data=array(
		    'id_user' => $this->id_user;
		    'id_post' => $this->id_post;
		    'isi_komen' => $this->isi_komen;
		    'tanggal_komen' => $this->tanggal_komen;
	      );
	      $this->db->where('id_komen'=>$id);
	      $this->db->update('komen', $data);
	}
}
?>
