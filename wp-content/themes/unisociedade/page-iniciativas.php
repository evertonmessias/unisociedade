<?php get_header(); ?>
<main id="main" class="post" data-aos="fade-up">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php the_title() ?></h2>
        <ol>
          <li><a href="/">home</a></li>
          <li>
            <?php
            if (url_active()[2] == "") echo url_active()[1];
            else echo "<a href='/" . url_active()[1] . "'>" . url_active()[1] . "</a>";
            ?>
          </li>
          <!--<li>
            <?php //if (url_active()[2] != "") echo url_active()[2]; 
            ?>
          </li>-->
        </ol>
      </div>
    </div>
  </section><!-- Breadcrumbs Section -->

	<!-- ======= Departments Section ======= -->
	<section id="iniciativas" class="departments">
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

</main><!-- End #main -->
<?php get_footer(); ?>