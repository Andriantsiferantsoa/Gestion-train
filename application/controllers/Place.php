<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Place extends CI_Controller {

	public function index()
	{
		$layout = array(
			'titre' => 'place',
			'active' => 'place',
		);
		$data['place'] = $this->place->liste();
		$this->load->view('layout/header', $layout);
		$this->load->view('layout/sidebar');
		$this->load->view('place/contenu', $data);
		$this->load->view('layout/footer');
	}

	public function nouveau()
	{
		$data['train'] = $this->train->liste();
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Ajouter une place',
			'active' => 'place'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('place/nouveau', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->place->add($this->input->post());
			$layout = array(
			'titre' => 'Enregistement reussi',
			'active' => 'place'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('place/success');
			$this->load->view('layout/footer');
		}
	}


	public function verif_id($str)
    {
        if ($this->place->existe($str))
        {
                $this->form_validation->set_message('verif_id', 'Numéro déjà existe');
                return FALSE;
        }
        else
        {
                return TRUE;
        }
    }

    public function delete($id)
    {
    	$this->place->delete($id);
    	redirect('place');
    }

    public function edit($id)
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Modifier place',
			'active' => 'place'
			);
			$data['train'] = $this->train->liste();
			$data['place'] = $this->place->get_by_id($id);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('place/edit', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->place->update($this->input->post('numero'),$this->input->post());
			$layout = array(
			'titre' => 'Mis à jour reussi',
			'active' => 'place'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('place/success_edit');
			$this->load->view('layout/footer');
		}
	}

}
