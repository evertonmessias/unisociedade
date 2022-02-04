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

	<!-- Google Translate -->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	<script type="text/javascript">
		function googleTranslateElementInit() {
			new google.translate.TranslateElement({
					pageLanguage: 'pt'
				},
				'google_translate_element');
		}
	</script>

	<?php wp_head(); ?>

</head>

<body>

	<!-- ======= Header ======= -->
	<header id="header" class="fixed-top">
		<div class="container d-flex align-items-center">

			<a href="/" class="logo me-auto"><img src="<?php echo SITEPATH; ?>assets/img/logo.png" alt="">
				&nbsp;<span>UNI.SOCIEDADE</span>
			</a>

			<nav id="navbar" class="navbar order-last order-lg-0">
				<ul>
					<li><a class="nav-link scrollto " href="#hero">Início</a></li>
					<li class="dropdown"><a class="nav-link scrollto" href="#about"><span>Sobre nós</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li class="dropdown"><a href="#"><span>Link 1.1</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Link 1.1.1</a></li>
									<li><a href="#">Link 1.1.2</a></li>
									<li><a href="#">Link 1.1.3</a></li>
									<li><a href="#">Link 1.1.4</a></li>
								</ul>
							</li>
							<li><a href="#">Link 1.2</a></li>

						</ul>
					</li>
					<li class="dropdown"><a class="nav-link scrollto" href="#departments"><span>Iniciativas</span> <i class="bi bi-chevron-down"></i></a>
						<ul>
							<li class="dropdown"><a href="#"><span>Link 2.1</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Link 2.1.1</a></li>
									<li><a href="#">Link 2.1.2</a></li>
									<li><a href="#">Link 2.1.3</a></li>
									<li><a href="#">Link 2.1.4</a></li>
									<li><a href="#">Link 2.1.5</a></li>
									<li><a href="#">Link 2.1.6</a></li>
								</ul>
							</li>
							<li><a href="#">Link 2.2</a></li>
							<li class="dropdown"><a href="#"><span>Link 2.3</span> <i class="bi bi-chevron-right"></i></a>
								<ul>
									<li><a href="#">Link 2.3.1</a></li>
									<li><a href="#">Link 2.3.2</a></li>
									<li><a href="#">Link 2.3.3</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><a class="nav-link scrollto" href="#news">Notícias</a></li>
					<li><a class="nav-link scrollto" href="#gallery">Galeria</a></li>
				</ul>
				<i class="bi bi-list mobile-nav-toggle"></i>
				<div id="topforms">
					<div class="search-form"><?php echo get_search_form() ?></div>
					<div id="google_translate_element" class="google-translate"></div>
				</div>
			</nav><!-- .navbar -->

		</div>
	</header><!-- End Header -->