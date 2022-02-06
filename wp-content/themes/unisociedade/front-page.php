<?php get_header(); ?>

<!-- ======= Hero Section ======= -->
<section id="hero">
	<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

		<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

		<div class="carousel-inner" role="listbox">

			<!-- Slide 1 -->
			<div class="carousel-item active" style="background-image: url(<?php echo get_option('home_input_31'); ?>)">
				<div class="container">
					<h2><?php echo get_option('home_input_32'); ?></h2>
					<a href="<?php echo get_option('home_input_33'); ?>" class="btn-get-started scrollto">Leia Mais</a>
				</div>
			</div>
			<!-- End Slide1 -->

			<!-- Slide 2 -->
			<div class="carousel-item" style="background-image: url(<?php echo get_option('home_input_41'); ?>)">
				<div class="container">
					<h2><?php echo get_option('home_input_42'); ?></h2>
					<a href="<?php echo get_option('home_input_43'); ?>" class="btn-get-started scrollto">Leia Mais</a>
				</div>
			</div>
			<!-- End Slide2 -->

			<!-- Slide 3 -->
			<div class="carousel-item" style="background-image: url(<?php echo get_option('home_input_51'); ?>)">
				<div class="container">
					<h2><?php echo get_option('home_input_52'); ?></h2>
					<a href="<?php echo get_option('home_input_53'); ?>" class="btn-get-started scrollto">Leia Mais</a>
				</div>
			</div>
			<!-- End Slide3 -->

		</div>

		<a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
			<span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
		</a>

		<a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
			<span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
		</a>

	</div>
</section><!-- End Hero -->

<main id="main">

	<!-- ======= About Us Section ======= -->
	<section id="sobre" class="about">
		<div class="container" data-aos="fade-up">
			<div class="section-title">
				<h2>Sobre nós</h2>
			</div>
			<div class="row">
				<div class="col-lg-6" data-aos="fade-right">
					<img src="<?php echo get_option('home_input_6'); ?>" class="img-fluid" title="Sobre nós">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
					<?php echo get_option('home_input_7'); ?>
				</div>
			</div>
		</div>
	</section><!-- End About Us Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container" data-aos="fade-up">

			<div class="row no-gutters">
				<?php
				$bloco_count1 = explode(',', get_option('home_input_8'));
				$bloco_count2 = explode(',', get_option('home_input_9'));
				$bloco_count3 = explode(',', get_option('home_input_10'));
				$bloco_count4 = explode(',', get_option('home_input_11'));
				$bloco_counts = array($bloco_count1, $bloco_count2, $bloco_count3, $bloco_count4);
				foreach ($bloco_counts as $bloco) {
					if ($bloco[0] != "" && $bloco[1] != "" && $bloco[2] != "") {
				?>
						<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
							<div class="count-box">
								<i class="bx <?php echo $bloco[0]; ?>"></i>
								<span data-purecounter-start="0" data-purecounter-end="<?php echo $bloco[1]; ?>" data-purecounter-duration="1" class="purecounter"></span>
								<p><?php echo $bloco[2]; ?></p>
							</div>
						</div>
				<?php
					}
				} ?>

			</div>

		</div>

	</section><!-- End Counts Section -->
	<br><br>
	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="section-title">
				<h2>Contato</h2>
			</div>
		</div>
		<div>
			<iframe style="border:0; width: 100%; height: 350px;" src="<?php echo get_option('home_input_15'); ?>" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container">

			<div class="row mt-5">

				<div class="col-lg-6">

					<div class="row">
						<div class="col-md-12">
							<div class="info-box">
								<i class="bx bx-map"></i>
								<h3>Endereço</h3>
								<p><?php echo get_option('home_input_14'); ?></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-envelope"></i>
								<h3>E-mail</h3>
								<p><?php echo get_option('home_input_13'); ?></p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-phone-call"></i>
								<h3>Telefone</h3>
								<p><?php echo get_option('home_input_12'); ?></p>
							</div>
						</div>
					</div>

				</div>

				<div class="col-lg-6">
					<form action="forms/contact.php" method="post" role="form" class="php-email-form">
						<div class="row">
							<div class="col form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Nome" required>
							</div>
						</div>
						<div class="form-group mt-3">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>
						<div class="form-group mt-3">
							<textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
						</div>
						<div class="my-3">
							<div class="loading">Loading</div>
							<div class="error-message"></div>
							<div class="sent-message">Your message has been sent. Thank you!</div>
						</div>
						<br>
						<div class="text-center"><button type="submit">Enviar</button></div>
					</form>
				</div>

			</div>

		</div>
	</section><!-- End Contact Section -->

</main><!-- End #main -->
<?php get_footer(); ?>