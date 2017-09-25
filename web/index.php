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
  include('../config.php');
  $content = parse_ini_file(ROOT.'config/content.ini', true);

  define('TITLE', 'Home | nicole-brewer.com');
  include('../includes/header.php');

function print_r2($val){
        echo '<pre>';
        print_r($val);
        echo  '</pre>';
}

?>

<h1>Welcome to my Website</h2>
  <p>My site is a work in progress mostly designed for my self-guided learning. I started coding this page with simple HTML/CSS. Then incorperated some JavaScript in order to make my menu dynamic and mobile friendly. I got into PHP while I was trying to create a global header and footer. I'm now in the process of cleaning up and reorgaizing my project with the new techniques I've learned from online tutorials. After I add a config and some .ini files to my project, I intend to start incorperating $_GET to pass variables across webpages. Thank you for stopping by! If you're interested, please check out the links below. They are the companion links to some of the activities I have listed on my resume.</p>

<h1>Links</h1>
  <h2>Project Rhea</h2>
  <a href="https://www.projectrhea.org/rhea/index.php/Math_squad">Math Squad</a>
  <p>I was contracted by ECE at Purdue to write a math tutorial for undergraduates</p>
  <h2>Purdue Triathlon Club</h2>
  <a href="http://purduetri.wixsite.com/triclub">Webmaster and Content Writer</a>
  <p>I occationally write content for the club, and I enlist others to contribute pieces as well. The blog helps us maintain a presence with our followers</p>
  <ul><li><a href="http://purduetri.wixsite.com/triclub/single-post/2017/06/09/The-4-Secrets-of-Summer-Training">The Four Secrets of Summer Training</a></li>
    <li><a href="http://purduetri.wixsite.com/triclub/single-post/2017/06/16/5-Tips-for-Your-First-Triathlon-A-Weekend-Update">5 Tips for Your First Triathlon: A Weekend Update</a></li></ul>
  <h3 href="https://www.facebook.com/purduetriathlon/">Social Media Manager</h3>
  <iframe src="https://www.facebook.com/plugins/post.php?href=https%3A%2F%2Fwww.facebook.com%2Fpurduetriathlon%2Fposts%2F10155040145932661%3A0&width=500" width="500" height="485" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
  <h3>Triathlon Training</h3>
  <p>As a collegiate triathlete, I train all year with Run Club and Triathlon Club!</p>
  <iframe height='454' width='300' frameborder='0' allowtransparency='true' scrolling='no' src='https://www.strava.com/athletes/13268500/latest-rides/b6b34ae34904954d2026f3e9230cb21048d4b37b'></iframe>


  <?php include('../includes/footer.php'); ?>
