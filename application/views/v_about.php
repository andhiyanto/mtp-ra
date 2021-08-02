<!DOCTYPE html>
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>About Us</title>
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
									<h2>Who We Are</h2>
									<p class="fh5co-lead">Rasulam</p>
								</div>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</aside>

		<div class="fh5co-about animate-box">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>About Us</h2>
				<p>RA awal berdiri pada tahun 2014 yang merupakan singkatan dari Rahayu yaitu nama belakang dari owner. Berawal Dari rumah kami telah memperoleh kepercayaan dari ratusan customer sehingga kami terus melakukan pengembangan pelayanan .
					Kini RA telah berkembang menjadi tempat pelatihan dan treatment bagi puluhan mitra dan pelanggan kami Tidak hanya sampai disitu, Demi Kepuasan dan kepercayaan custumer kami pun membuka kemitrann yang sudah tersebar di provinsi banten. Dengan menghadirkan berbagai solusi perawatan tubuh yaitu sulam alis, venner gigi, gigi kelinci dan masih banyak lagi
				</p>
			</div>

			<div class="container">
				<img src="<?php echo base_url() . 'theme/images/face.svg' ?>" alt="Free HTML5 Template" class="img-responsive">

			</div>

		</div>

		<div class="fh5co-team animate-box">
			<div class="container">

				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
						<h2>The Team</h2>
						<p>Kami memiliki tim yang solid. one team, one spirit, and one goal.</p>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url() . 'theme/images/person3.jpg' ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Ira Aghesia rahayu</h3>
						<h4>Founder</h4>
						<p>saya siap membantu kencantikan anda</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url() . 'theme/images/person3.jpg' ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Ira Aghesia rahayu</h3>
						<h4>Founder</h4>
						<p>saya siap membantu kencantikan anda</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
					<div class="col-md-4 fh5co-staff">
						<img src="<?php echo base_url() . 'theme/images/person3.jpg' ?>" alt="Free HTML5 Bootstrap Template" class="img-responsive">
						<h3>Ira Aghesia rahayu</h3>
						<h4>Founder</h4>
						<p>saya siap membantu kencantikan anda</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-google"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-instagram"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="fh5co-team animate-box">
			<div class="container">
				<div>
					<p><?php echo $this->session->flashdata('msg'); ?></p>
				</div>

				<div class="row">
					<h1>Cek Validasi sertifikasi kursus</h1>
					<p>Masukkan kode unik sertifikat untuk
						pemeriksaan lebih lanjut pada sistem kami</p>

					<form action="<?php echo base_url() . 'CekSertifikasi/auth' ?>" method="post">
						<div class="form-group has-feedback">
							<label for="kodeUnikSertifikat" class="form-label">Kode unik</label>
							<input type="text" name="sertif" class="form-control" placeholder="Masukan nomor sertifikasi" required>
							<span class="glyphicon glyphicon-user form-control-feedback"></span>
						</div>
						<div class="row">

							<button type="submit" class="btn btn-primary btn-block btn-flat">Check Now</button>

						</div>
					</form>
				</div>


			</div>
		</div>




		<?php $this->load->view("layout/v_footer"); ?>



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

		<!-- MAIN JS -->
		<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>