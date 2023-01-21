<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?=$title;?></title>
	<link rel="shortcut icon" type="image/x-icon" href="<?=base_url('assets/img/favicon.png');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/jquery.alertable.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/metro.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/metro-colors.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/metro-icons.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/metro-responsive.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/metro-rtl.min.css');?>">
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/metro-schemes.min.css');?>">
	

	<?php
		foreach ($css as $ligne) {
	?>
	<link rel="stylesheet" type="text/css" href="<?=base_url('assets/css/' . $ligne . '.css') ;?>">
	<?php
			}	
	?>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.js');?>"></script>
	<?php
		foreach ($js as $ligne) {
	?>
	<script type="text/javascript" src="<?=base_url('assets/js/' . $ligne . '.js');?>"></script>
	<?php
			}	
	?>
	<script type="text/javascript" src="<?=base_url('assets/js/metro.min.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.alertable.js');?>"></script>
	<script type="text/javascript" src="<?=base_url('assets/js/jquery.dataTables.min.js');?>"></script>
	<style type="text/css">
	body{
		background: rgba(217,220,82,0.3);
	}
	</style>
</head>
<body>
