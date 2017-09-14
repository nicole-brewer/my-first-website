</main>
<footer>
		<div id="site-designer"><i class="fa fa-code" aria-hidden="true"></i> Developed by <a href="nicole-brewer">Nicole Brewer</a></div>
		<div id="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> <?php echo date('Y'); ?> All rights reserved.</div>
		<div id="pro-icons">
			<a href="mailto:brewer36@purdue.edu" class="menu-item social"><i class="fa fa-envelope"></i></a>
			<a href="https://github.com/nicole-brewer" class="menu-item social"><i class="fa fa-github"></i></a>
			<a href="https://www.linkedin.com/in/nicole-brewer" class="menu-item social"><i class="fa fa-linkedin"></i></a></div>
</footer>
<script>
	var topBarHeight = document.getElementById('top-bar').offsetHeight;
	var topBarSpacer = document.getElementById('top-bar-spacer');
	//var mainHeight = document.getElementsByTagName("BODY")[0];
	var footerHeight = document.getElementsByTagName("footer")[0].offsetHeight;
	topBarSpacer.style.height = topBarHeight + 'px';

	document.getElementsByTagName("main")[0].style.height = window.innerHeight - topBarHeight - footerHeight + 'px';

	function dropDownMenu() {
    var x = document.getElementById("top-bar");
    if (x.className === "top-bar") {
        x.className += " dropDown";
    } else {
        x.className = "top-bar";
    }
}
	</script>
</body>
</html>
