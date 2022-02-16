<?php get_header(); ?>
<main id="main" class="post" data-aos="fade-up">
	<!-- ======= Breadcrumbs ======= -->
	<section class="breadcrumbs">
		<div class="container">
			<div class="d-flex justify-content-between align-items-center">
				<h2>Projetos</h2>
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

	<!-- ======= Portfolio Section ======= -->
	<section id="projetos" class="portfolio">
		<div id="grid-projetos" class="container" data-aos="fade-up">
			<?php
			$categories = get_terms('projetos_categories', array('order' => 'DESC'));
			?>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-12">
					<input type="text" class="quicksearch" placeholder="Pesquisar Todos os Projetos" />
				</div>
				<h4>&nbsp;</h4>
				<div class="col-lg-12 d-flex justify-content-center">
					<ul id="portfolio-flters" class="portfolio-ul">
						<a href="/projetos"><li class="filter-active">Todos</li></a>
						<?php
						foreach ($categories as $category) {
							if ($category->slug != "sem-categoria") { ?>
								<li data-filter=".filter-<?php echo $category->slug; ?>"><?php echo $category->name; ?></li>
						<?php }
						} ?>
					</ul>
				</div>
			</div>
			<br>
			<div class="row grid-projetos portfolio-container" data-aos="fade-up" data-aos-delay="200">

				<?php foreach ($categories as $category) {
					if ($category->slug != "sem-categoria") {
						$args = array(
							'post_type' => 'projetos',
							'projetos_categories' => $category->slug,
							'posts_per_page' => 100
						);
						$loop = new WP_Query($args);
						while ($loop->have_posts()) {
							$loop->the_post();
				?>
							<div class="projetos-item col-lg-12 portfolio-item filter-<?php echo $category->slug; ?>">
								<div class="col-lg-2 col-projetos col-projetos1">
									<img src="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
												else echo SITEPATH . "assets/img/logo.png"; ?>" class="img-fluid" title="<?php the_title() ?>">
								</div>
								<div class="col-lg-10 col-projetos col-projetos2">
									<a href="<?php the_permalink() ?>" class="details-link" title="Link">
										<h4><?php the_title() ?></h4>
									</a>
									<p><?php echo get_post_meta($post->ID, 'projetos_descricao', true); ?></p>
									<p><strong>Status:</strong> <?php echo get_post_meta($post->ID, 'projetos_status', true); ?></p>
								</div>
							</div>
				<?php }
					}
				} ?>
			</div>
		</div>
	</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php get_footer(); ?>