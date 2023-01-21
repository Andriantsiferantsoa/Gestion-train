<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reservation extends CI_Controller {

	public function index()
	{
		$layout = array(
			'titre' => 'reservation',
			'active' => 'reservation',
		);
		$data['reservation'] = $this->reservation->liste();
		$this->load->view('layout/header', $layout);
		$this->load->view('layout/sidebar');
		$this->load->view('reservation/contenu', $data);
		$this->load->view('layout/footer');
	}

	public function nouveau()
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Ajouter une reservation',
			'active' => 'reservation'
			);
			$data['train'] = $this->train->liste();
			$data['place'] = $this->place->liste();
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('reservation/nouveau', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->reservation->add($this->input->post());
			$this->place->update($this->input->post('numPlace'), ['occupation' => 'Occupé']);
			$layout = array(
			'titre' => 'Enregistement reussi',
			'active' => 'reservation'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('reservation/success');
			$this->load->view('layout/footer');
		}
	}


	public function verif_id($str)
    {
        if ($this->reservation->existe($str))
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
    	$res = $this->reservation->get_by_id($id);
    	$this->reservation->delete($id);
    	$this->place->update($res->numPlace, ['occupation' => 'Disponible']);
    	redirect('reservation');
    }

    public function edit($id)
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Modifier reservation',
			'active' => 'reservation'
			);
			$data['reservation'] = $this->reservation->get_by_id($id);
			$data['place'] = $this->place->liste();
			$data['train'] = $this->train->liste();
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('reservation/edit', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->reservation->update($this->input->post('numero'),$this->input->post());
			$layout = array(
			'titre' => 'Mis à jour reussi',
			'active' => 'reservation'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('reservation/success_edit');
			$this->load->view('layout/footer');
		}
	}

}
