<?php get_header(); ?>

<main id="main" class="post" data-aos="fade-up">
  <!-- ======= Breadcrumbs ======= -->
  <section class="breadcrumbs">
    <div class="container">
      <div class="d-flex justify-content-between align-items-center">
        <h2><?php echo url_active()[1]; ?></h2>        
      </div>
    </div>
  </section><!-- Breadcrumbs Section -->

  <!-- ======= Category ======= -->
  <section>
		<div class="container" data-aos="fade-up">

			<div class="row">
				<?php				
				$argsV = array(
					'category_name' => url_active()[1],
					'order' => 'DESC'
				);
				$loop = new WP_Query($argsV);
				while ($loop->have_posts()) {
					$loop->the_post();
				?>
					<p>
						<a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>						
					</p>
				<?php } ?>
			</div>

		</div>
	</section><!-- End Category -->

</main><!-- End #main -->
<?php get_footer(); ?>