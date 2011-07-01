<html>
<head>
	<title>jQuery Flexible Fading Images Plugin</title>
	<!-- Set some basic styling including images set to max-width 100% so the flex with a window resize -->
	<style>
	
	body {
		background-color:#eee;
		padding: 1% 10%;
		font-family:Helvetica, Verdana, Arial;
		font-size:100%;
	}
	
	#wrapper {
		background-color:#fff;
	}
	
	img {
		max-width:100%;
		height:auto;
	}
	
	h1 {
		padding:5%;
	}
	
	p {
		padding:1% 5% 5% 5%;
	}
	
	</style>
	<script type="text/javascript" src="http://www.google.com/jsapi"></script>
	<script type="text/javascript">
		// Load the jquery library
		google.load("jquery", "1.4");
	</script>
	<script src="js/flexibleFading.jQuery.js"></script>
	<script>
	$(document).ready(function() {

		// Create the first gallery with default settings
		$('#surfing-gallery').flexibleFading();
		
		// Create the second gallery by setting our own time between slides
		$('#skateboarding-gallery').flexibleFading({timeBetweenSlide:4000});
		
		// Create a third gallery and set our own transition time
		$('#cycling-gallery').flexibleFading({transitionTime:10000});
		
	});
	</script>
</head>
<body>

<div id="wrapper">
	
	<h1>Flexible fading images</h1>

	<div id="surfing-gallery" class="gallery" style="width:90%;margin:auto;">
		
		<ul>
			<li><img src="images/surfing-1.jpg" alt="Surfing" width="1600" height="1200" /></li>
			<li><img src="images/surfing-2.jpg" alt="Surfing" width="1600" height="1200" /></li>
			<li><img src="images/surfing-3.jpg" alt="Surfing" width="1600" height="1200" /></li>
		</ul>
	
	</div>

	<p>This gallery uses the default settings</p>
	
	<div id="skateboarding-gallery" class="gallery" style="width:70%;margin:auto;">
		
		<ul>
			<li><img src="images/skateboarding-1.jpg" alt="Skateboarding" width="1600" height="1200" /></li>
			<li><img src="images/skateboarding-2.jpg" alt="Skateboarding" width="1600" height="1200" /></li>
			<li><img src="images/skateboarding-3.jpg" alt="Skateboarding" width="1600" height="1200" /></li>
		</ul>
	
	</div>
	
	<p>This gallery has the time between the slides set in the options</p>
	
	<div id="cycling-gallery" class="gallery" style="width:50%;margin:auto;">
		
		<ul>
			<li><img src="images/cycling-1.jpg" alt="Cycling" width="1600" height="1200" /></li>
			<li><img src="images/cycling-2.jpg" alt="Cycling" width="1600" height="1200" /></li>
			<li><img src="images/cycling-3.jpg" alt="Cycling" width="1600" height="1200" /></li>
		</ul>
	
	</div>
	
	<p>This gallery has the transition time set in the options</p>
	
</div>

</body>
</html>