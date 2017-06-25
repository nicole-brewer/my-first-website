<?php
	include('../lib/module.php');
	$index = new Module("index", "index.php");
	$directories = scandir("../modules", SCANDIR_SORT_ASCENDING);
	$modules;
	$i = 0;
	foreach ($directories as $directory) {
		$modules[i] = new module($directory);
	}


  define('TITLE', 'Home | nicole-brewer.com');
  include('../includes/header.php');
?>
  <p>Main Content :)</p>
  <?php include('../includes/footer.php'); ?>
