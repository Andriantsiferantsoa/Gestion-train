<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class train_m extends CI_Model {
	public function liste()
	{
		return $this->db->get('train')->result();
	}


	public function add($data)
	{
		$this->db->insert('train', $data);
	}

	public function existe($pseudo)
	{
		if(sizeof($this->db->get_where('train', array('numero' => $pseudo))->result()) > 0)
			return true;
		else return false;
	}

	public function delete($id)
	{
		$this->db->where(array('numero' => $id))->delete('train');
	}
	
	public function get_by_id($id)
	{
		return $this->db->get_where('train', array('numero' => $id))->row();
	}

	public function get_recette($id, $annee, $mois)
	{
		$query = "SELECT * FROM reservation left join train on reservation.numTrain = train.numero left join itineraire on numIti = itineraire.numero having numTrain = '".$id."' and dateRes like '%".$annee."-".$mois."%'";
		return $this->db->query($query)->result();
	}

	public function update($id, $data)
	{
		$this->db->where(array('numero' => $id))->update('train', $data);
	}
}
