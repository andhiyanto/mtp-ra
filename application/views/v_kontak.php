<!DOCTYPE html>
<html class="no-js">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Hubungi Kami</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="Rasulam" />
	<link rel="shorcut icon" type="text/css" href="<?php echo base_url() . 'assets/images/favicon.png' ?>">
	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">
	<!-- Animate.css -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/animate.css' ?>">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/icomoon.css' ?>">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/bootstrap.css' ?>">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/flexslider.css' ?>">
	<!-- Theme style  -->
	<link rel="stylesheet" href="<?php echo base_url() . 'theme/css/style.css' ?>">

	<!-- Modernizr JS -->
	<script src="<?php echo base_url() . 'theme/js/modernizr-2.6.2.min.js' ?>"></script>

</head>

<body>


	<div id="fh5co-page">
		<?php $this->load->view("layout/v_navbar"); ?>


		<aside id="fh5co-hero" clsas="js-fullheight">
			<div class="flexslider js-fullheight">
				<ul class="slides">
					<li style="background-image: url(<?php echo base_url() . 'theme/images/slide_3.jpg' ?>);">
						<div class="overlay-gradient"></div>
						<div class="container">
							<div class="col-md-10 col-md-offset-1 text-center js-fullheight slider-text">
								<div class="slider-text-inner">
									<h2>Get in touch. Don't be shy.</h2>
									<p class="fh5co-lead">Kami siap melayani Anda 24/7</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div class="fh5co-contact animate-box">
			<div class="container">
				<div class="row">
					<div class="col-md-3">
						<h3>Contact Info.</h3>
						<ul class="contact-info">
							<li><i class="icon-map"></i>198 West 21th Street, Suite 721 New York NY 10016</li>
							<li><i class="icon-phone"></i>+ 1235 2355 98</li>
							<li><i class="icon-envelope"></i><a href="#">info@yoursite.com</a></li>
							<li><i class="icon-globe"></i><a href="#">www.yoursite.com</a></li>
						</ul>
					</div>

					<div class="col-md-8 col-md-push-1 col-sm-12 col-sm-push-0 col-xs-12 col-xs-push-0">
						<?php echo $this->session->flashdata('msg'); ?>
						<div class="row">
							<form method="post" action="<?php echo base_url() . 'kontak/kirim_pesan' ?>">
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="nama" placeholder="Nama" type="text" required>
									</div>
								</div>
								<div class="col-md-6">
									<div class="form-group">
										<input class="form-control" name="email" placeholder="Email" type="email" required>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<textarea name="pesan" class="form-control" id="" cols="30" rows="7" placeholder="Message" required></textarea>
									</div>
								</div>
								<div class="col-md-12">
									<div class="form-group">
										<input value="Kirim Pesan" class="btn btn-primary" type="submit">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="mapouter">
				<div class="gmap_canvas"><iframe width="1050" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=perumahan%20serang%20city&t=&z=17&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies2.org"></a><br>
					<style>
						.mapouter {
							position: relative;
							text-align: right;
							height: 500px;
							width: 1080px;
						}
					</style><a href="https://www.embedgooglemap.net">adding google maps to website</a>
					<style>
						.gmap_canvas {
							overflow: hidden;
							background: none !important;
							height: 500px;
							width: 1080px;
						}
					</style>
				</div>
			</div>
		</div>
		<br>
		<br>

		<?php $this->load->view("layout/v_footer"); ?>
	</div>


	<!-- jQuery -->
	<script src="<?php echo base_url() . 'theme/js/jquery.min.js' ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url() . 'theme/js/jquery.easing.1.3.js' ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url() . 'theme/js/bootstrap.min.js' ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url() . 'theme/js/jquery.waypoints.min.js' ?>"></script>
	<!-- Flexslider -->
	<script src="<?php echo base_url() . 'theme/js/jquery.flexslider-min.js' ?>"></script>
	<!-- Google Map -->

	<script src="<?php echo base_url() . 'theme/js/google_map.js' ?>"></script>

	<!-- MAIN JS -->
	<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>