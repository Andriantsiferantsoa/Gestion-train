<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class place_m extends CI_Model {
	public function liste()
	{
		return $this->db->get('place')->result();
	}


	public function add($data)
	{
		$this->db->insert('place', $data);
	}

	public function existe($pseudo)
	{
		if(sizeof($this->db->get_where('place', array('numero' => $pseudo))->result()) > 0)
			return true;
		else return false;
	}

	public function delete($id)
	{
		$this->db->where(array('numero' => $id))->delete('place');
	}
	
	public function get_by_id($id)
	{
		return $this->db->get_where('place', array('numero' => $id))->row();
	}

	public function update($id, $data)
	{
		$this->db->where(array('numero' => $id))->update('place', $data);
	}
}
