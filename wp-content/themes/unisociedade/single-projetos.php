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

  <!-- ======= Portfolio Details Section ======= -->
  <section class="portfolio-details">
    <div class="container">

      <!--<div class="portfolio-details-container">
        <?php /*if (has_post_thumbnail()) { ?>
          <div class="owl-carousel portfolio-details-carousel">
            <a href="<?php the_post_thumbnail_url('full'); ?>" target="_blank">
              <img src="<?php the_post_thumbnail_url('full'); ?>" class="img-fluid" title="<?php the_title() ?>">
            </a>
          </div>
          <br><br>
        <?php } */ ?>
      </div>-->

      <div class="portfolio-description text-justify">
        <ul>
          <li><strong>Descrição:</strong> <?php echo get_post_meta($post->ID, 'projetos_descricao', true); ?></li>
          <li><strong>Data:</strong> <?php echo get_post_meta($post->ID, 'projetos_date', true); ?></li>
          <li><strong>Área:</strong> <?php echo get_post_meta($post->ID, 'projetos_area', true); ?></li>
          <li><strong>Unidade:</strong> <?php echo get_post_meta($post->ID, 'projetos_unidade', true); ?></li>
          <li><strong>Comunidade:</strong> <?php echo get_post_meta($post->ID, 'projetos_comunidade', true); ?></li>
          <li><strong>Cidade:</strong> <?php echo get_post_meta($post->ID, 'projetos_cidade', true); ?></li>
          <li><strong>Beneficiados:</strong> <?php echo get_post_meta($post->ID, 'projetos_beneficiados', true); ?></li>
          <li><strong>Coordenador:</strong> <?php echo get_post_meta($post->ID, 'projetos_coordenador', true); ?></li>
          <li><strong>E-Mail:</strong> <?php echo get_post_meta($post->ID, 'projetos_email', true); ?></li>
          <li><strong>Telefone:</strong> <?php echo get_post_meta($post->ID, 'projetos_telefone', true); ?></li>
          <li><strong>Status:</strong> <?php echo get_post_meta($post->ID, 'projetos_status', true); ?></li>
          <li><strong>Texto:</strong> <?php echo get_post_meta($post->ID, 'projetos_texto', true); ?></li>
        </ul>
        <br>
      </div>
    </div>
  </section><!-- End Portfolio Details Section -->

</main><!-- End #main -->
<?php get_footer(); ?>