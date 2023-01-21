<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$config = array(

'train/nouveau' => array(
	array(
		'field' => 'numero',
		'label' => 'Numéro',
		'rules' => 'trim|required|callback_verif_id'
	),
	array(
		'field' => 'nbPlace',
		'label' => 'Nombre de place',
		'rules' => 'trim|required|integer'
	)
),

'reservation/nouveau' => array(
	array(
		'field' => 'nomVoyageur',
		'label' => 'Voyageur',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'dateRes',
		'label' => 'date de reservation',
		'rules' => 'trim|required'
	)
),

'reservation/edit' => array(
	array(
		'field' => 'nomVoyageur',
		'label' => 'Voyageur',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'dateRes',
		'label' => 'date de reservation',
		'rules' => 'trim|required'
	)
),

'itineraire/nouveau' => array(
	array(
		'field' => 'numero',
		'label' => 'Numéro',
		'rules' => 'trim|required|callback_verif_id'
	),
	array(
		'field' => 'frais',
		'label' => 'Nombre de place',
		'rules' => 'trim|required|integer'
	),
	array(
		'field' => 'villeDep',
		'label' => 'Ville',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'villeArr',
		'label' => 'Ville',
		'rules' => 'trim|required'
	)
),

'itineraire/edit' => array(
	array(
		'field' => 'numero',
		'label' => 'Numéro',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'frais',
		'label' => 'Nombre de place',
		'rules' => 'trim|required|integer'
	),
	array(
		'field' => 'villeDep',
		'label' => 'Ville',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'villeArr',
		'label' => 'Ville',
		'rules' => 'trim|required'
	)
),

'place/nouveau' => array(
	array(
		'field' => 'numero',
		'label' => 'Numéro',
		'rules' => 'trim|required|callback_verif_id'
	)
),

'place/edit' => array(
	array(
		'field' => 'numero',
		'label' => 'Numéro',
		'rules' => 'trim|required'
	)
),

'train/edit' => array(
	array(
		'field' => 'numero',
		'label' => 'Numéro',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'nbPlace',
		'label' => 'Nombre de place',
		'rules' => 'trim|required|integer'
	)
),


'user/nouveau' => array(
	array(
		'field' => 'pseudo',
		'label' => 'Login',
		'rules' => 'trim|required|callback_verif_id'
	),
	array(
		'field' => 'pw',
		'label' => 'Mot de passe',
		'rules' => 'required'
	),
	array(
		'field' => 'nom',
		'label' => 'Nom',
		'rules' => 'trim|required'
	)
),

'user/edit' => array(
	array(
		'field' => 'pseudo',
		'label' => 'Login',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'pw',
		'label' => 'Mot de passe',
		'rules' => 'required'
	),
	array(
		'field' => 'nom',
		'label' => 'Nom',
		'rules' => 'trim|required'
	)
),


'sortant/nouveau' => array(
	array(
		'field' => 'id',
		'label' => 'Numéro',
		'rules' => 'trim|required|callback_verif_id'
	),
	array(
		'field' => 'expeditaire',
		'label' => 'Expeditaire',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'destinataire',
		'label' => 'Destinataire',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'sujet',
		'label' => 'Sujet',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'date_envoi',
		'label' => 'Date d envoi',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'objet',
		'label' => 'Objet',
		'rules' => 'required'
	)

),



'entrant/edit' => array(
	array(
		'field' => 'id',
		'label' => 'Numéro',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'expeditaire',
		'label' => 'Expeditaire',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'destinataire',
		'label' => 'Destinataire',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'sujet',
		'label' => 'Sujet',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'date_envoi',
		'label' => 'Date d envoi',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'date_reception',
		'label' => 'Date de réception',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'objet',
		'label' => 'Objet',
		'rules' => 'required'
	)

),


'sortant/edit' => array(
	array(
		'field' => 'id',
		'label' => 'Numéro',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'expeditaire',
		'label' => 'Expeditaire',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'destinataire',
		'label' => 'Destinataire',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'sujet',
		'label' => 'Sujet',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'date_envoi',
		'label' => 'Date d envoi',
		'rules' => 'trim|required'
	),
	array(
		'field' => 'objet',
		'label' => 'Objet',
		'rules' => 'required'
	)

)

);