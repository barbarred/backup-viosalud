	<footer>
		<div class="container container-footer">
			<div class="d-flex row justify-content-center">
				<div class="col-md-3 col-12 logo-footer">
					<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
					   	 	<img src="<?php echo get_template_directory_uri(); ?>/images/logo_footer.svg" alt="logo">
						</a>
				</div>
				<div class="col-md-3 text-center text-footer">
					<p>Soy, Mariam Violeta y seré tu Healt Coach.</p>
				</div>
				<div class="col-md-3 col-6 nav-footer">
					<h4>Menu</h4>
					<?php 
			    		$args = array(
			    			'theme_location' => 'footer-menu',
			    			'container' => 'nav',
			    			'container-class' => 'contenedor-menu-footer',
			    			'container-id' => 'contenedor-menu-footer'
	 		    		);
	 		    		wp_nav_menu( $args );
			    	?>
				</div>
				<div class="col-md-3 col-6 redes">
					<div>
					<h4>Contacto</h4>
					<a href="https://www.instagram.com/viosalud/"><p>Instagram</p> </a>
					<a href="https://www.facebook.com/Vio-salud-1289574467843985/"><p>Facebook</p> </a>
					<a href="mailto:mariam@viosalud.com"><p>Gmail</p> </a>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
</body>
</html>