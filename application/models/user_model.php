<?php 
class User_model extends CI_Model{
	var $id_user='';
	var $username='';
	var $password='';
	var $level='';
	
	function all()
	{
	      $q=$this->db->get('user');
	      return $q->result();
	}
	function get_by($key, $value){
	      $q=$this->db->get_where('user', array($key->$value));
	      $data=$q->result();
	      $this->id_user=$data[0]->id_user;
	      $this->username=$data[0]->username;
	      $this->password=$data[0]->password;
	      $this->level=$data[0]->level;
	      return $this;
	}
	function save(){
	      $data=array(
		    'username' => $this->username;
		    'password' => $this->password;
		    'level' => $this->level;
	      );
	      $this->db->insert('kategori', $data);
	}
	function delete($id){
	      $this->db->delete('kategori', array('id_kat'=>$id));
	}
	function update(){
	       $data=array(
		    'username' => $this->username;
		    'level' => $this->level;
	      );
	      $this->db->where('id_user'=>$id);
	      $this->db->update('user', $data);
	}
	function update_password(){
	       $data=array(
		    'password' => $this->password;
	      );
	      $this->db->where('id_user'=>$id);
	      $this->db->update('user', $data);
	}
	function ceklogin()
	{
	      $this->db->where('username',
	      $this->input->post('username'));
	      $this->db->where('password',
	      md5($this->input->post('password')));

	      $ambil=$this->db->get('user');
	      
	      if($ambil->num_rows==1){
		    return true;
	      }
	}
}
?>
