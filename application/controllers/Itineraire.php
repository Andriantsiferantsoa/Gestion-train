<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Itineraire extends CI_Controller {

	public function index()
	{
		$layout = array(
			'titre' => 'itineraire',
			'active' => 'itineraire',
		);
		$data['itineraire'] = $this->itineraire->liste();
		$this->load->view('layout/header', $layout);
		$this->load->view('layout/sidebar');
		$this->load->view('itineraire/contenu', $data);
		$this->load->view('layout/footer');
	}

	public function nouveau()
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Ajouter une itineraire',
			'active' => 'itineraire'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('itineraire/nouveau');
			$this->load->view('layout/footer');
		}
		else{
			$this->itineraire->add($this->input->post());
			$layout = array(
			'titre' => 'Enregistement reussi',
			'active' => 'itineraire'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('itineraire/success');
			$this->load->view('layout/footer');
		}
	}


	public function verif_id($str)
    {
        if ($this->itineraire->existe($str))
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
    	$this->itineraire->delete($id);
    	redirect('itineraire');
    }

    public function edit($id)
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Modifier itineraire',
			'active' => 'itineraire'
			);
			$data['train'] = $this->train->liste();
			$data['itineraire'] = $this->itineraire->get_by_id($id);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('itineraire/edit', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->itineraire->update($this->input->post('numero'),$this->input->post());
			$layout = array(
			'titre' => 'Mis à jour reussi',
			'active' => 'itineraire'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('itineraire/success_edit');
			$this->load->view('layout/footer');
		}
	}

}
