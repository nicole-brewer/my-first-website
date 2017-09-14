<?php
	/*include('../lib/module.php');
	$index = new Module("index", "index.php");
	$directories = scandir("../modules", SCANDIR_SORT_ASCENDING);
	$modules;
	$i = 0;
	foreach ($directories as $directory) {
		$modules[i] = new module($directory);
	}
	*/


  define('TITLE', 'Home | nicole-brewer.com');
  include('../includes/header.php');
?>

<h1>Projects</h1>
  <h2>Project Rhea</h2>
  <h3 href="https://www.projectrhea.org/rhea/index.php/Math_squad">Math Squad</h3>
  <p>I was contracted by ECE at Purdue to write a math tutorial for undergraduates</p>
  <h2>Purdue Triathlon Club</h2>
  <h3 href="http://purduetri.wixsite.com/triclub">Webmaster and Content Writer</h3>
  <p>I occationally write content for the club, and I enlist others to contribute pieces as well. The blog helps us maintain a presence with our followers</p>
  <ul><li href="http://purduetri.wixsite.com/triclub/single-post/2017/06/09/The-4-Secrets-of-Summer-Training">The Four Secrets of Summer Training</li>
    <li href="http://purduetri.wixsite.com/triclub/single-post/2017/06/16/5-Tips-for-Your-First-Triathlon-A-Weekend-Update">5 Tips for Your First Triathlon: A Weekend Update</li></ul>
  <h3 href="https://www.facebook.com/purduetriathlon/">Social Media Manager</h3>
  <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpurduetriathlon%2Fposts%2F10155040145932661%3A0&width=500" width="500" height="485" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  <h3>Strava</h3>
  <p>As a collegiate triathlete, I train all year with Run Club and Triathlon Club!</p>
  <iframe height='454' width='300' frameborder='0' allowtransparency='true' scrolling='no' src='https://www.strava.com/athletes/13268500/latest-rides/b6b34ae34904954d2026f3e9230cb21048d4b37b'></iframe>


  <?php include('../includes/footer.php'); ?>
