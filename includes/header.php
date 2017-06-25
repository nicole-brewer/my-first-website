<?php
	include('../includes/arrays.php');
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo TITLE; ?>
	</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" href="js/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Source+Sans+Pro:300" rel="stylesheet">
		<script type="text/javascript" src="js/skrollr.min.js"></script>
</head>
<body>
	<div class="spacer" id="top-bar-spacer"></div>
	<div id="nav-container">
	<nav id="top-bar" class="top-bar">
			<a class="menu-item" id="menu-icon" onclick="dropDownMenu()"><i class="fa fa-bars"></i></a>
			<?php include('../includes/nav.php)'); ?>
			<a href="https://www.linkedin.com/in/nicole-brewer" class="menu-item social"><i class="fa fa-google-plus-official"></i></a>
			<a href="http://www.instagram.com/brewer.nicole" class="menu-item social"><i class="fa fa-instagram"></i></a>
			<a href="http://www.pinterest.com/brewer8722" class="menu-item social"><i class="fa fa-pinterest"></i></a>
		  <a href="http://www.strava.com/nicole-brewer" class="menu-item social" style="height: 22px;"><img style="padding-top:3px;padding-bottom:3px;" src="images/16.png"></a>
		</nav></div>
	<main>
