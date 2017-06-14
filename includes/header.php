<!DOCTYPE html>
<html lang="en">
<head>
	<title><?php echo "TITLE";</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="styles/blog/index.css">
	<link rel="stylesheet" href="styles/font-awesome/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300|Source+Sans+Pro:300" rel="stylesheet">
	<script type="text/javascript" src="scripts/skrollr.min.js"></script>
  </head>
	<body>
	<div class="spacer" id="top-bar-spacer"></div>
	<div id="nav-container">
	<nav id="top-bar" class="top-bar">
			<a class="menu-item" id="menu-icon" onclick="dropDownMenu()"><i class="fa fa-bars"></i></a>
			<a href="index.php" class="menu-item page">Home</a>
			<a href="www.nicole-brewer.com/blog/about" class="menu-item page">About</a>
			<a href="www.nicole-brewer.com/blog/archive" class="menu-item page">Archive</a>
			<!--
			<a href="www.youtube.com/" class="menu-item social"><i class="fa fa-youtube"></i></a>
			<a href="https://www.linkedin.com/in/nicole-brewer" class="menu-item social"><i class="fa fa-google-plus-official"></i></a>
			bloglovin
			<a href="www.facebook.com/nicole.brewer.798" class="menu-item social"><i class="fa fa-facebook"></i></a>
		  -->
			<a href="www.instagram.com/brewer.nicole" class="menu-item social"><i class="fa fa-instagram"></i></a>
			<a href="www.pinterest.com/brewer8722" class="menu-item social"><i class="fa fa-pinterest"></i></a>
		  <a href="www.strava.com/nicole-brewer" class="menu-item social" style="height: 22px;"><img style="padding-top:3px;padding-bottom:3px;" src="../images/16.png"></a>
		</nav></div>
<script>
	var topBarHeight = document.getElementById('top-bar').offsetHeight;
	var topBarSpacer = document.getElementById('top-bar-spacer');
	topBarSpacer.style.height = topBarHeight + 'px';

	function dropDownMenu() {
    var x = document.getElementById("top-bar");
    if (x.className === "top-bar") {
        x.className += " dropDown";
    } else {
        x.className = "top-bar";
    }
}
/*
	var s = skrollr.init({
		constants: {
			topBarHeight: function() {
				console.log(topBarHeight + 'px');
				return topBarHeight + 'px';
			}
		}
	});
  */
	</script>
