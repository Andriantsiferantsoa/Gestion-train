<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class reservation_m extends CI_Model {
	public function liste()
	{
		return $this->db->get('reservation')->result();
	}


	public function add($data)
	{
		$this->db->insert('reservation', $data);
	}

	public function existe($pseudo)
	{
		if(sizeof($this->db->get_where('reservation', array('numero' => $pseudo))->result()) > 0)
			return true;
		else return false;
	}

	public function delete($id)
	{
		$this->db->where(array('numero' => $id))->delete('reservation');
	}
	
	public function get_by_id($id)
	{
		return $this->db->get_where('reservation', array('numero' => $id))->row();
	}

	public function get_by_train($id)
	{
		return $this->db->get_where('reservation', array('numTrain' => $id))->result();
	}

	public function update($id, $data)
	{
		$this->db->where(array('numero' => $id))->update('reservation', $data);
	}
}
