<?php
  //define('PROJECT_ROOT', dirname($_SERVER['DOCUMENT_ROOT'])."/");
  //echo PROJECT_ROOT;
  //echo "\n";
  //print_r(glob(PROJECT_ROOT."*", GLOB_ONLYDIR));


  define('PROJECT_ROOT', dirname($_SERVER['DOCUMENT_ROOT'])."/");
  include(PROJECT_ROOT.'includes/arrays.php');
  include(PROJECT_ROOT.'includes/header.php');
  include(PROJECT_ROOT.'content/main.php');
  include(PROJECT_ROOT.'includes/footer.php');


?>
