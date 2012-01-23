<?php 
class Kategori_model extends CI_Model{
	var $id_kat='';
	var $nama_kat='';
	
	function all()
	{
	      $q=$this->db->get('kategori');
	      return $q->result();
	}
	function get_by($key, $value){
	      $q=$this->db->get_where('kategori', array($key=>$value));
	      $data=$q->result();
	      $this->id_kat=$data[0]->id_kat;
	      $this->nama_kat=$data[0]->nama_kat;
	      return $this;
	}
	function save(){
	      $data=array(
		    'nama_kat' => $this->nama_kat
	      );
	      $this->db->insert('kategori', $data);
	}
	function delete($id){
	      $this->db->delete('kategori', array('id_kat'=>$id));
	}
	function update(){
	       $data=array(
		    'nama_kat' => $this->nama_kat
	      );
	      $this->db->where('id_kat',$this->id_kat);
	      $this->db->update('kategori', $data);
	}
}
?>
