<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Train extends CI_Controller {

	public function index()
	{
		$layout = array(
			'titre' => 'TRAIN',
			'active' => 'train',
		);
		$data['train'] = $this->train->liste();
		$this->load->view('layout/header', $layout);
		$this->load->view('layout/sidebar');
		$this->load->view('train/contenu', $data);
		$this->load->view('layout/footer');
	}

	public function histo()
	{
		$layout = array(
			'titre' => 'histogramme',
			'active' => 'histogramme',
		);
		$data['train'] = $this->train->liste();
		$this->load->view('layout/header', $layout);
		$this->load->view('layout/sidebar');
		$this->load->view('train/chart', $data);
		$this->load->view('layout/footer');
	}

	public function voir($id)
	{
		$layout = array(
			'titre' => 'TRAIN',
			'active' => 'train',
		);
		$annee = '2019'; $mois = '08';
		if(isset($_POST['annee'])) $annee = $_POST['annee'];
		if(isset($_POST['mois'])) $mois = $_POST['mois'];
		$data['recette'] = $this->train->get_recette($id,$annee, $mois);
		$data['train'] = $this->train->get_by_id($id);
		$data['voyageur'] = $this->reservation->get_by_train($id);
		$this->load->view('layout/header', $layout);
		$this->load->view('layout/sidebar');
		$this->load->view('train/voir', $data);
		$this->load->view('layout/footer');
	}

	public function nouveau()
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Ajouter une train',
			'active' => 'train'
			);
			$data['itineraire'] = $this->itineraire->liste();
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('train/nouveau', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->train->add($this->input->post());
			$layout = array(
			'titre' => 'Enregistement reussi',
			'active' => 'train'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('train/success');
			$this->load->view('layout/footer');
		}
	}


	public function verif_id($str)
    {
        if ($this->train->existe($str))
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
    	$this->train->delete($id);
    	redirect('train');
    }

    public function edit($id)
	{
		if($this->form_validation->run() == FALSE)
		{
			$layout = array(
			'titre' => 'Modifier train',
			'active' => 'train'
			);
			$data['train'] = $this->train->get_by_id($id);
			$data['itineraire'] = $this->itineraire->liste();
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('train/edit', $data);
			$this->load->view('layout/footer');
		}
		else{
			$this->train->update($this->input->post('numero'),$this->input->post());
			$layout = array(
			'titre' => 'Mis à jour reussi',
			'active' => 'train'
			);
			$this->load->view('layout/header', $layout);
			$this->load->view('layout/sidebar');
			$this->load->view('train/success_edit');
			$this->load->view('layout/footer');
		}
	}

}
