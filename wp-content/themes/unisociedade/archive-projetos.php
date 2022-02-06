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
	<section id="Portfolio" class="portfolio section-bg">
		<div class="container" data-aos="fade-up">
			<?php
			$categories = get_terms('category', array('order' => 'DESC'));
			foreach ($categories as $category) {
				
				$cat_portfolio[] = $category->name;
				
			}
			?>

			<div class="section-title">
				<h2>Portfolio</h2>				
			</div>
			<div class="row" data-aos="fade-up" data-aos-delay="100">
				<div class="col-lg-12 d-flex justify-content-center">

					<ul id="portfolio-flters">
						<?php
						foreach ($categories as $category) {
							?>
								<li data-filter=".filter-<?php echo $category->name; ?>" <?php if ($cat_portfolio[0] == $category->name) echo "class='filter-active'";
																							else echo "onclick='mostrar(" . $category->name . ")'"; ?>><?php echo $category->name; ?></li>
						<?php 
						} ?>
					</ul>
				</div>
			</div>

			<div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

				<?php foreach ($categories as $category) {
					
						$args = array(
							'category_name' => $category->name,
							'posts_per_page' => 6
						);
						$loop = new WP_Query($args);
						while ($loop->have_posts()) {
							$loop->the_post();
				?>
							<div <?php if ($cat_portfolio[0] != $category->name) echo "style='display: none;'"; ?> class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $category->name; ?>">
								<img src="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
											else echo SITEPATH . "assets/img/semimagem.png"; ?>" class="img-fluid" title="<?php the_title() ?>">
								<div class="portfolio-info">
									<h4><?php the_title() ?></h4>
									<a href="<?php if (has_post_thumbnail()) the_post_thumbnail_url('full');
												else echo SITEPATH . "assets/img/semimagem.png"; ?>" data-gall="portfolioGallery" class="venobox preview-link" title="<?php the_title() ?>"><i class="bx bx-plus"></i></a>
									<a href="<?php the_permalink() ?>" class="details-link" title="Link"><i class="bx bx-link"></i></a>
								</div>
							</div>
				<?php }
					
				} ?>
			</div>
			<br><br>
			<h4 class="plus"><a title="All Portfolio" href="/portfolio"><i class="bx bxs-folder-plus"></i></a></h4>
		</div>
	</section><!-- End Portfolio Section -->

</main><!-- End #main -->
<?php get_footer(); ?>