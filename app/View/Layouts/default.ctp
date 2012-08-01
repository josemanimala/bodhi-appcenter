<?php include_once("/home/jose/aeonius/header.php"); ?>
	
		<img src="http://homes.bodhilinux.com/~aeonius/guts/img/weblogo.png" class="mainlogo" alt="Bodhi Linux" style="margin-left:-200px;"/>	
				<div id="appButtons" style="float: right; 	width:auto; 	margin-top: +90px; margin-right:-200px; margin-left:-100px">
				<a class="btn" id="desktopView" context="loaded"><center>Apps for Desktop</center></a>
				<a class="btn" id="workstationView" context="loaded"><center>Apps for Workstation</center></a>
				<a class="btn" id="mobileView" context="loaded"><center>Apps for Mobile</center></a>
		</div>
		<section id="main">
		<div id="data">
		 <h1>Bodhi Linux AppCenter</h1>
		<h2></h2>
		<p>Welcome to the Bodhi Linux software page.</p> 
		<p>Here you will find easy to install software for any task on your Bodhi desktop!</p>
		<h2>Please note, that Midori or Firefox are <i>required</i> for the "Install Now" method. The "Download" method will work in any browser. Please see the Installation Instructions.</h2>
		</div>
		</section>
		<div id="bundleBtn">
			<a class="btn" id="bundleView" context="loaded" style="float: left; width:auto; margin-left:+50px;"><center>Software Bundles</center></a>
		</div>
	<footer class="gradient" style="margin-top:+100px">
		<p><small>&copy; Copyright Bodhi Linux 2012. All Rights Reserved.</small></p>
	</footer>
	<script type='text/javascript' src='/js/jquery-1.7.2.min.js'></script> 
	<script type='text/javascript'>
	var software;
	$(document).ready(function(){
		
		$.getJSON('/software/index/i386', function(data) {
			  software = data;
		  });
		var softbundle;
		$.getJSON('/softbundle', function(data) {
			  softbundle = data;
		  });
		var metas;
		$.getJSON('/metas', function(data) {
			  metas = data;
		  });
		var catorders;
		$.getJSON('/catorders', function(data) {
			  catorders = data;
		  });
	});
	</script>
	<script>
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26643766-1']);
		_gaq.push(['_trackPageview']);
		(function() {
		var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
		ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
		var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
	<script type='text/javascript' src='/js/json.js'></script> 
	<script type='text/javascript' src='/js/desktop.js'></script> 
	<script type='text/javascript' src='/js/workstation.js'></script> 
	<script type='text/javascript' src='/js/mobile.js'></script> 

</body>
</html>
