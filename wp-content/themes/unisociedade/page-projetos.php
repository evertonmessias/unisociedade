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

	<!-- ======= Features Section ======= -->
	<section id="projetos" class="features">
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

</main><!-- End #main -->
<?php get_footer(); ?>