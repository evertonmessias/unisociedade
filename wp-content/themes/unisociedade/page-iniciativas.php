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
	<section id="iniciativas" class="departments iniciativas">
		<div class="container" data-aos="fade-up">
			<?php
			$categories = get_terms('category', array('order' => 'DESC'));
			?>
			<div class="section-title">
				<h2>Iniciativas Unicamp</h2>
			</div>
			<br>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-4 mb-5 mb-lg-0">
					<ul class="nav nav-tabs flex-column">
						<?php
						$x = 1;
						foreach ($categories as $category) {
							if ($category->slug != "sem-categoria") { ?>
								<li class="nav-item">
									<a class="nav-link <?php if ($x == 1) echo "active show"; ?>" data-bs-toggle="tab" data-bs-target="#<?php echo $category->slug; ?>">
										<h4><?php echo $category->name; ?></h4>
									</a>
								</li>
						<?php $x++;
							}
						} ?>
					</ul>
				</div>
				<div class="col-lg-8">
					<div class="tab-content">
						<?php
						$x = 1;
						foreach ($categories as $category) {
							if ($category->slug != "sem-categoria") {
								$args = array(
									'category_name' => $category->slug,
									'posts_per_page' => 100
								);
								$loop = new WP_Query($args);
								while ($loop->have_posts()) {
									$loop->the_post();
						?>
									<div class="tab-pane <?php if ($x == 1) echo "active show"; ?>" id="<?php echo $category->slug; ?>">
										<h3><?php echo $category->name; ?></h3>
										<hr>
										<h4><?php echo get_the_title() ?></h4>
										<br><br>
										<img src="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
													else echo SITEPATH . "assets/img/logo.png"; ?>" class="img-fluid" title="<?php echo get_the_title() ?>">
										<br><br>
										<p><?php echo get_post_meta($post->ID, 'post_descricao', true); ?></p>
										<br>
										<div class="btns">
										<a class="btn-iniciativas" href="<?php echo get_the_permalink() ?>"><strong>Leia mais</strong></a>
										<a class="btn-iniciativas" href="/<?php echo $category->slug; ?>"><strong>Ver Todas</strong></a>
										</div>
									</div>
						<?php }
								$x++;
							}
						} ?>

					</div>
				</div>
			</div>

		</div>
	</section><!-- End Departments Section -->

</main><!-- End #main -->
<h1>&nbsp;</h1>
<?php get_footer(); ?>