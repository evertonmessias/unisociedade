<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="utf-8">
	<meta content="width=device-width, initial-scale=1.0" name="viewport">

	<title><?php bloginfo() ?></title>
	<meta content="" name="description">
	<meta content="" name="keywords">

	<!-- Favicons -->
	<link href="<?php echo SITEPATH; ?>assets/img/favicon.png" rel="icon">

	<!-- Vendor CSS Files -->
	<link href="<?php echo SITEPATH; ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/animate.css/animate.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/aos/aos.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

	<!-- Template Main CSS File -->
	<link href="<?php echo SITEPATH; ?>assets/css/style.css" rel="stylesheet">
	<link href="<?php echo SITEPATH; ?>assets/css/unisociedade.css" rel="stylesheet">

	<!-- Google Translate 
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
					pageLanguage: 'pt'
				},
				'google_translate_element');
		}
	</script>-->

	<?php wp_head(); ?>

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top <?php if (is_user_logged_in()) echo 'header-margin-top'; ?>">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo me-auto"><img src="<?php echo get_option('home_input_2'); ?>" alt="">
				&nbsp;<span><?php echo get_option('home_input_1'); ?></span>
			</a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li class="dropdown"><a class="nav-link scrollto" href="/"><span>Início</span> <i class="bi bi-chevron-down"></i></a>
						<ul>							
							<li><a class="nav-link scrollto" href="<?php if (!is_home()) echo '/'; ?>#sobre">Sobre nós</a></li>
							<li><a class="nav-link scrollto" href="<?php if (!is_home()) echo '/'; ?>#contact">Contato</a></li>
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="/<?php if (is_page('projetos')) echo '#'; ?>projetos">Projetos</a></li>
					<li><a class="nav-link scrollto" href="/<?php if (is_page('iniciativas')) echo '#'; ?>iniciativas">Iniciativas</a></li>
					<li><a class="nav-link scrollto" href="/<?php if (is_page('participe')) echo '#'; ?>participe">Participe</a></li>					
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
				<div id="topforms">
					<div class="search-form"><?php echo get_search_form() ?></div>
					<!--<div id="google_translate_element" class="google-translate"></div>-->
				</div>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->