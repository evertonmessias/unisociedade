<?php get_header(); ?>

	<!-- ======= Hero Section ======= -->
	<section id="hero">
		<div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

			<ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

			<div class="carousel-inner" role="listbox">

				<!-- Slides -->			
				<?php
				$argsSlides = array(
					'category_name' => 'slides',
					'posts_per_page' => 3,
					'order' => 'ASC'
				  );
				$loop = new WP_Query($argsSlides);
				$nslide = 1;
				while ($loop->have_posts()) {
					$loop->the_post();					
				?>

				<div class="carousel-item <?php if($nslide == 1)echo 'active'; ?>" style="background-image: url(<?php the_post_thumbnail_url('full'); ?>)">
					<div class="container">
						<h2><?php echo get_the_title(); ?></h2>						
						<a href="<?php echo get_the_permalink(); ?>" class="btn-get-started scrollto">Leia Mais</a>
					</div>
				</div>
				
				<?php $nslide++; } ?>

				<!-- End Slides -->				

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

	<!-- ======= Featured Services Section ======= 
	<section id="featured-services" class="featured-services">
		<div class="container" data-aos="fade-up">

			<div class="row">
				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="100">
						<div class="icon"><i class="fas fa-file"></i></div>
						<h4 class="title"><a href="#">Destaque 1</a></h4>
						<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="200">
						<div class="icon"><i class="fas fa-pills"></i></div>
						<h4 class="title"><a href="#">Destaque 2</a></h4>
						<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="300">
						<div class="icon"><i class="far fa-address-card"></i></div>
						<h4 class="title"><a href="#">Destaque 3</a></h4>
						<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
					</div>
				</div>

				<div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
					<div class="icon-box" data-aos="fade-up" data-aos-delay="400">
						<div class="icon"><i class="fas fa-american-sign-language-interpreting"></i></div>
						<h4 class="title"><a href="#">Destaque 4</a></h4>
						<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
					</div>
				</div>

			</div>

		</div>
	</section> End Featured Services Section -->

	<!-- ======= About Us Section ======= -->
	<section id="sobre" class="about">
		<div class="container" data-aos="fade-up">
		<?php
              $argsSobre = array(
				'category_name' => 'sobre',
				'posts_per_page' => 1,
				'order' => 'ASC'
			  );
			$loop = new WP_Query($argsSobre);
              while ($loop->have_posts()) {
                $loop->the_post();
              ?>
                <div class="section-title">
				<h2><?php echo get_the_title(); ?></h2>
			</div>
			<div class="row">
				<div class="col-lg-6" data-aos="fade-right">
					<img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" title="<?php echo get_the_title(); ?>">
				</div>
				<div class="col-lg-6 pt-4 pt-lg-0 content text-justify" data-aos="fade-left">
					<?php echo get_the_content(); ?>
				</div>
			</div>
              <?php
              }
              ?>
		</div>
	</section><!-- End About Us Section -->

	<!-- ======= Counts Section ======= -->
	<section id="counts" class="counts">
		<div class="container" data-aos="fade-up">

			<div class="row no-gutters">

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="fas fa-user"></i>
						<span data-purecounter-start="0" data-purecounter-end="85" data-purecounter-duration="1" class="purecounter"></span>

						<p><strong>Loren</strong> consequuntur quae qui deca rode</p>
						<a href="#">Find out more &raquo;</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="far fa-file"></i>
						<span data-purecounter-start="0" data-purecounter-end="26" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Dogman</strong> adipisci atque cum quia aut numquam delectus</p>
						<a href="#">Find out more &raquo;</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="fas fa-flask"></i>
						<span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Research Lab</strong> aut commodi quaerat. Aliquam ratione</p>
						<a href="#">Find out more &raquo;</a>
					</div>
				</div>

				<div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
					<div class="count-box">
						<i class="fas fa-award"></i>
						<span data-purecounter-start="0" data-purecounter-end="150" data-purecounter-duration="1" class="purecounter"></span>
						<p><strong>Awards</strong> rerum asperiores dolor molestiae doloribu</p>
						<a href="#">Find out more &raquo;</a>
					</div>
				</div>

			</div>

		</div>
	</section><!-- End Counts Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">
			<div class="section-title">
				<h2>Contato</h2>
			</div>
		</div>
		<div>
			<iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14738.422731472343!2d-47.4311377!3d-22.5564393!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x564de56e787352df!2sUNICAMP%20-%20Faculdade%20de%20Ci%C3%AAncias%20Aplicadas!5e0!3m2!1spt-BR!2sbr!4v1643122553212!5m2!1spt-BR!2sbr" frameborder="0" allowfullscreen></iframe>
		</div>
		<div class="container">

			<div class="row mt-5">

				<div class="col-lg-6">

					<div class="row">
						<div class="col-md-12">
							<div class="info-box">
								<i class="bx bx-map"></i>
								<h3>FCA</h3>
								<p>R. Pedro Zaccaria, 1300, Limeira - SP</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-envelope"></i>
								<h3>E-mail</h3>
								<p>info@example.com<br>contact@example.com</p>
							</div>
						</div>
						<div class="col-md-6">
							<div class="info-box mt-4">
								<i class="bx bx-phone-call"></i>
								<h3>Telefones</h3>
								<p>+55 19 999999999<br>+55 19 888888888</p>
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