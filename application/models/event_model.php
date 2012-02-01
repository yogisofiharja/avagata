<?php 
class Event_model extends CI_Model{
	var $id_event = '';
	var $nama_event = '';
	var $tgl_event = '';
	var $tmp_event = '';
	var $keterengan = '';

	function all()
	{
	      $q = $this->db->get('event');
	      return $q->result();
	}
	function get_by($key, $value){
	      $q=$this->db->get_where('event', array($key=>$value));
	      $data=$q->result();
	      $this->id_event=$data[0]->id_event;
	      $this->nama_event=$data[0]->nama_event;
	      $this->tgl_event=$data[0]->tgl_event;
	      $this->tmp_event=$data[0]->tmp_event;
	      $this->keterengan=$data[0]->keterangan;
	      return $this;
	}
	function save(){
	      $data=array(
		    'nama_event' => $this->nama_event,
		    'tgl_event' => $this->tgl_event,
		    'tmp_event' => $this->tmp_event,
		    'keterangan' => $this->keterengan
	      );
	      $this->db->insert('event', $data);
	}
	function delete($id){
	      $this->db->delete('event', array('id_event'=>$id));
	}
	function update(){
	       $data=array(
		    'nama_event' => $this->nama_event,
		    'tgl_event' => $this->tgl_event,
		    'tmp_event' => $this->tmp_event,
	            'keterengan' => $this->keterangan,
	      );
	      $this->db->where('id_event',$this->id_event);
	      $this->db->update('event', $data);
	}
}
?>
