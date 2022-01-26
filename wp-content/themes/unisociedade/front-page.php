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

	<!-- ======= Featured Services Section ======= -->
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
	</section><!-- End Featured Services Section -->

	<!-- ======= About Us Section ======= -->
	<section id="about" class="about">
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

	<!-- ======= Features Section ======= -->
	<section id="features" class="features">
		<div class="container" data-aos="fade-up">

			<div class="row">
				<div class="col-lg-6 order-2 order-lg-1" data-aos="fade-right">
					<div class="icon-box mt-5 mt-lg-0">
						<i class="bx bx-receipt"></i>
						<h4>Est labore ad</h4>
						<p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
					</div>
					<div class="icon-box mt-5">
						<i class="bx bx-cube-alt"></i>
						<h4>Harum esse qui</h4>
						<p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
					</div>
					<div class="icon-box mt-5">
						<i class="bx bx-images"></i>
						<h4>Aut occaecati</h4>
						<p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
					</div>
					<div class="icon-box mt-5">
						<i class="bx bx-shield"></i>
						<h4>Beatae veritatis</h4>
						<p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
					</div>
				</div>
				<div class="image col-lg-6 order-1 order-lg-2" style='background-image: url("<?php echo SITEPATH; ?>assets/img/features.jpg");' data-aos="zoom-in"></div>
			</div>

		</div>
	</section><!-- End Features Section -->

	<!-- ======= Departments Section ======= -->
	<section id="departments" class="departments">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Iniciativas Unicamp</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<ul class="nav nav-tabs flex-column">
						<li class="nav-item">
							<a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
								<h4>Cultura</h4>
								<p>Quis excepturi porro totam sint earum quo nulla perspiciatis eius.</p>
							</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
								<h4>Esportes</h4>
								<p>Voluptas vel esse repudiandae quo excepturi.</p>
							</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
								<h4>Ciência</h4>
								<p>Velit veniam ipsa sit nihil blanditiis mollitia natus.</p>
							</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
								<h4>Projetos</h4>
								<p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
							</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-5">
								<h4>Eventos</h4>
								<p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
							</a>
						</li>
						<li class="nav-item mt-2">
							<a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-6">
								<h4>Cursos</h4>
								<p>Ratione hic sapiente nostrum doloremque illum nulla praesentium id</p>
							</a>
						</li>
					</ul>
				</div>
				<div class="col-lg-8">
					<div class="tab-content">
						<div class="tab-pane active show" id="tab-1">
							<h3>Cultura</h3>
							<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
							<img src="<?php echo SITEPATH; ?>assets/img/departments/cultura.jpg" alt="" class="img-fluid">
							<br><p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
						</div>
						<div class="tab-pane" id="tab-2">
							<h3>Esportes</h3>
							<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
							<img src="<?php echo SITEPATH; ?>assets/img/departments/esportes.jpg" alt="" class="img-fluid">
							<br><p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
						</div>
						<div class="tab-pane" id="tab-3">
							<h3>Ciência</h3>
							<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
							<img src="<?php echo SITEPATH; ?>assets/img/departments/ciencia.png" alt="" class="img-fluid">
							<br><p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
						</div>
						<div class="tab-pane" id="tab-4">
							<h3>Projetos</h3>
							<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
							<img src="<?php echo SITEPATH; ?>assets/img/departments/projetos.jpg" alt="" class="img-fluid">
							<br><p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
						</div>
						<div class="tab-pane" id="tab-5">
							<h3>Eventos</h3>
							<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
							<img src="<?php echo SITEPATH; ?>assets/img/departments/eventos.png" alt="" class="img-fluid">
							<br><p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
						</div>
						<div class="tab-pane" id="tab-6">
							<h3>Cursos</h3>
							<p class="fst-italic">Qui laudantium consequatur laborum sit qui ad sapiente dila parde sonata raqer a videna mareta paulona marka</p>
							<img src="<?php echo SITEPATH; ?>assets/img/departments/cursos.jpg" alt="" class="img-fluid">
							<br><p>Et nobis maiores eius. Voluptatibus ut enim blanditiis atque harum sint. Laborum eos ipsum ipsa odit magni. Incidunt hic ut molestiae aut qui. Est repellat minima eveniet eius et quis magni nihil. Consequatur dolorem quaerat quos qui similique accusamus nostrum rem vero</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</section><!-- End Departments Section -->

		<!-- ======= Services Section ======= -->
		<section id="news" class="services services">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Notícias</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<div class="row">
				<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
					<div class="icon"><i class="fas fa-heartbeat"></i></div>
					<h4 class="title"><a href="">Lorem Ipsum</a></h4>
					<p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
				</div>
				<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
					<div class="icon"><i class="fas fa-pills"></i></div>
					<h4 class="title"><a href="">Dolor Sitema</a></h4>
					<p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
				</div>
				<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
					<div class="icon"><i class="fas fa-hospital-user"></i></div>
					<h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
					<p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
				</div>
				<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
					<div class="icon"><i class="fas fa-dna"></i></div>
					<h4 class="title"><a href="">Magni Dolores</a></h4>
					<p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
				</div>
				<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
					<div class="icon"><i class="fas fa-wheelchair"></i></div>
					<h4 class="title"><a href="">Nemo Enim</a></h4>
					<p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
				</div>
				<div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
					<div class="icon"><i class="fas fa-notes-medical"></i></div>
					<h4 class="title"><a href="">Eiusmod Tempor</a></h4>
					<p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
				</div>
			</div>

		</div>
	</section><!-- End Services Section -->

	<!-- ======= Testimonials Section ======= -->
	<section id="testimonials" class="testimonials">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Comentários</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
				<div class="swiper-wrapper">

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="<?php echo SITEPATH; ?>assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
							<h3>Saul Goodman</h3>
							<h4>Ceo &amp; Founder</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="<?php echo SITEPATH; ?>assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
							<h3>Sara Wilsson</h3>
							<h4>Designer</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="<?php echo SITEPATH; ?>assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
							<h3>Jena Karlis</h3>
							<h4>Store Owner</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="<?php echo SITEPATH; ?>assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
							<h3>Matt Brandon</h3>
							<h4>Freelancer</h4>
						</div>
					</div><!-- End testimonial item -->

					<div class="swiper-slide">
						<div class="testimonial-item">
							<p>
								<i class="bx bxs-quote-alt-left quote-icon-left"></i>
								Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
								<i class="bx bxs-quote-alt-right quote-icon-right"></i>
							</p>
							<img src="<?php echo SITEPATH; ?>assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
							<h3>John Larson</h3>
							<h4>Entrepreneur</h4>
						</div>
					</div><!-- End testimonial item -->

				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section><!-- End Testimonials Section -->

	<!-- ======= Gallery Section ======= -->
	<section id="gallery" class="gallery">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Galeria</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<div class="gallery-slider swiper">
				<div class="swiper-wrapper align-items-center">
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-1.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-1.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-2.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-2.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-3.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-3.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-4.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-4.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-5.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-5.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-6.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-6.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-7.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-7.jpg" class="img-fluid" alt=""></a></div>
					<div class="swiper-slide"><a class="gallery-lightbox" href="<?php echo SITEPATH; ?>assets/img/gallery/gallery-8.jpg"><img src="<?php echo SITEPATH; ?>assets/img/gallery/gallery-8.jpg" class="img-fluid" alt=""></a></div>
				</div>
				<div class="swiper-pagination"></div>
			</div>

		</div>
	</section><!-- End Gallery Section -->

	<!-- ======= Frequently Asked Questioins Section ======= -->
	<section id="faq" class="faq section-bg">
		<div class="container" data-aos="fade-up">

			<div class="section-title">
				<h2>Perguntas Frequentes</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
			</div>

			<ul class="faq-list">

				<li>
					<div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
					<div id="faq1" class="collapse" data-bs-parent=".faq-list">
						<p>
							Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
						</p>
					</div>
				</li>

				<li>
					<div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
					<div id="faq2" class="collapse" data-bs-parent=".faq-list">
						<p>
							Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
						</p>
					</div>
				</li>

				<li>
					<div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
					<div id="faq3" class="collapse" data-bs-parent=".faq-list">
						<p>
							Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
						</p>
					</div>
				</li>

				<li>
					<div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
					<div id="faq4" class="collapse" data-bs-parent=".faq-list">
						<p>
							Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
						</p>
					</div>
				</li>

				<li>
					<div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
					<div id="faq5" class="collapse" data-bs-parent=".faq-list">
						<p>
							Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
						</p>
					</div>
				</li>

				<li>
					<div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
					<div id="faq6" class="collapse" data-bs-parent=".faq-list">
						<p>
							Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
						</p>
					</div>
				</li>

			</ul>

		</div>
	</section><!-- End Frequently Asked Questioins Section -->

	<!-- ======= Contact Section ======= -->
	<section id="contact" class="contact">
		<div class="container">

			<div class="section-title">
				<h2>Contato</h2>
				<p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
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