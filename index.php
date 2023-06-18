<?php 
$title = "Home";
include("header.php");
require_once("connectDB.php");


?>
<section id="main-container">

	<div class="menu-sliding cover"></div>
	<div class="se-lo-background">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url('assets/img/login-background.png');"></li>
					<li style="background-image: url('assets/img/login-background-2.png');"></li>
				</ul>
			</div>
		</div>
	
	<section id="main-wrapper" class="animate" anim-control="parent">
		<div style="opacity: 90%;" class="section home-banner bg-blue co-white container-fluid">
			<div class="auto">
				<div class="ho-ba-main row d-flex align-items-lg-center pt4 pb4">
					<div class="col-custom-6">
						<h1 style = "font-family: comic sans ms;" class="fz-36">A site dedicated to educate about Autism Spectrum Disorder through learning courses and interactive play</h1>
					</div>
				</div>
			</div>
			<div class="parallax top bp-ab d-none d-md-block" style="background-image: url('assets/img/login-background.png'); background-size: auto !important; background-position: center right !important;"></div>
		</div>
		
	</section>
﻿</section>
<footer></footer>
<script src="assets/js/lib/jquery.min.js"></script>
<script src="assets/js/lib/jquery-ui.min.js"></script>
<script src="assets/js/custom.js"></script>
</body>
</html>