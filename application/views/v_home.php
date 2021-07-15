<!DOCTYPE html>
<html class="no-js">

<?php $this->load->view("layout/v_header"); ?>


<div class="fh5co-section-with-image">

	<img src="<?php echo base_url() . 'theme/images/image_1.jpg' ?>" alt="" class="img-responsive">
	<div class="fh5co-box animate-box">
		<h2>Kenapa harus pilih
			ra sulam alis</h2>
		<p>Kami selalu membangun aplikasi dengan teknologi terbaru.</p>
		<p><a href="<?php echo base_url() . 'portfolio' ?>" class="btn btn-primary btn-outline with-arrow">Get started <i class="icon-arrow-right"></i></a></p>
	</div>

</div>

<div id="fh5co-why-us" class="animate-box">
	<div class="container">
		<div class="row">
			<div class="col-sm-8">

				<div class="col-sm-6 text-center item-block">
					<a href=""><span class="icon"><img src="<?php echo base_url() . 'theme/images/sulam.svg' ?>" class="img-responsiv"></span></a>

				</div>
				<div class="col-md-6 text-center item-block">
					<a href=""><span class="icon"><img src="<?php echo base_url() . 'theme/images/venner.svg' ?>" class="img-responsive"></span></a>

				</div>
				<div class="col-md-6 text-center item-block">
					<a href=""><span class="icon"><img src="<?php echo base_url() . 'theme/images/facial.svg' ?>" class="img-responsive"></span></a>

				</div>
				<div class="col-md-6 text-center item-block">
					<a href=""><span class="icon"><img src="<?php echo base_url() . 'theme/images/more.svg' ?>" class="img-responsive"></span></a>

				</div>
			</div>
			<div class="col-sm-4">
				<span class="icon"><img src="<?php echo base_url() . 'theme/images/face.svg' ?>" class="img-responsive"></span>
			</div>
		</div>
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





<div id="fh5co-blog" class="animate-box">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
				<h2>PRICEING</h2>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<?php
			foreach ($post->result_array() as $j) :
				$post_id = $j['tulisan_id'];
				$post_judul = $j['tulisan_judul'];
				$post_isi = $j['tulisan_isi'];
				$post_author = $j['tulisan_author'];
				$post_image = $j['tulisan_gambar'];
				$post_tglpost = $j['tanggal'];
				$post_slug = $j['tulisan_slug'];
			?>
				<div class="col-md-4">
					<a class="fh5co-entry" href="<?php echo base_url() . 'artikel/' . $post_slug; ?>">
						<figure>
							<img src="<?php echo base_url() . 'assets/images/' . $post_image; ?>" alt="" class="img-responsive">
						</figure>
						<div class="fh5co-copy">
							<h3><?php echo $post_judul; ?></h3>
							<span class="fh5co-date"><?php echo $post_tglpost . ' | ' . $post_author; ?></span>
							<?php echo limit_words($post_isi, 20) . '...'; ?>
						</div>
					</a>
				</div>
			<?php endforeach; ?>

			<div class="col-md-12 text-center">
				<p><a href="<?php echo base_url() . 'artikel' ?>" class="btn btn-primary btn-outline with-arrow">View More <i class="icon-arrow-right"></i></a></p>
			</div>
		</div>
	</div>
</div>


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

<!-- MAIN JS -->
<script src="<?php echo base_url() . 'theme/js/main.js' ?>"></script>

</body>

</html>