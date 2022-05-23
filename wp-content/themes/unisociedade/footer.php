  <!-- ======= Footer ======= -->
  <footer id="footer">
  	<div class="footer-top">
  		<div class="container">
  			<div class="row">

  				<div class="col-lg-4 col-md-6">
  					<div class="footer-info">
  						<h3>FCA</h3>
  						<p>
  							Unicamp <br>
  							<?php echo get_option('home_input_14'); ?><br><br>
  							<strong>Phone:</strong> <?php echo get_option('home_input_12'); ?><br>
  							<strong>Email:</strong> <?php echo get_option('home_input_13'); ?><br>
  						</p>
  						<div class="social-links mt-3">
  							<a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
  							<a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
  							<a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
  							<a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
  							<a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
  						</div>
  					</div>
  				</div>

  				<div class="col-lg-4 col-md-6 footer-links">
  					<h4>Links</h4>
  					<ul>
					  	<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="/">Início</a></li>  						
  						<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="<?php if (!is_home()) echo '/'; ?>#sobre">Sobre nós</a></li>
  						<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="<?php if (!is_home()) echo '/'; ?>#contact">Contato</a></li>  							
  						<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="/<?php if (is_archive('projetos')) echo '#'; ?>projetos">Projetos</a></li>
  						<li><i class="bx bx-chevron-right"></i> <a class="nav-link scrollto" href="/<?php if (is_page('participe')) echo '#'; ?>participe">Participe</a></li>
  					</ul>
  				</div>

  				<div id="participe" class="col-lg-4 col-md-6 footer-newsletter">
  					<h4>Fique por dentro.</h4>  					
  					<div class="php-email-form2">
						<?php echo do_shortcode('[wpforms id="100"]'); ?>						
					</div>
  				</div>

  			</div>
  		</div>
  	</div>

  	<div class="container">
  		<div class="copyright">
  			<strong><span><a href="/wp-admin/">Unisociedade</a></span></strong>
  		</div>
  		<div class="credits">
  			Designed by <a target="_blank" href="https://portfolio.evertonm.com/">EvM</a>
  		</div>
  	</div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?php echo SITEPATH; ?>assets/vendor/aos/aos.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/purecounter/purecounter.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="<?php echo SITEPATH; ?>assets/js/main.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/js/quicksearch.js"></script>
  <script src="<?php echo SITEPATH; ?>assets/js/unisociedade.js"></script>

  <?php wp_footer(); ?>
  </body>

  </html>