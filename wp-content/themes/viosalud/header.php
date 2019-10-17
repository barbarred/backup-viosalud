<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Vio Salud Health Coach</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<?php wp_head(); ?>
</head>
	<header>
		<div class="container-header">
			<div class="container-logo">
				<div class="logo">
				 	<a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>">
				   	 	<img src="<?php echo get_template_directory_uri(); ?>/images/logov_viosalud.svg" alt="logo">
					</a>
				</div>
			</div>
			<div class="container-nav">
				<nav class="navbar navbar-expand-md navbar-light">
					<div class="collapse navbar-collapse container-menu" id="navbarSupportedContent">
				    	<div class="container-nav-dos container">
					    	<?php 
					    		$args = array(
					    			'theme_location' => 'header-menu',
					    			'container' => 'nav',
					    			'container-class' => 'contenedor-menu',
					    			'container-id' => 'contenedor-menu'
			 		    		);
			 		    		wp_nav_menu( $args );
					    	?>
				    	</div>
				  	</div>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
				</button>
				</nav>
			</div>
		</div>
		<!-- Menu Mobile -->
		<div class="container-menu-mobile">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
			  <a class="navbar-brand" href="<?php echo esc_url( home_url('/') ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/logo_mobile_viosalud.png" alt="logo"></a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNav">
			    <?php 
		    		$args = array(
	    			'theme_location' => 'header-menu',
	    			'container' => 'nav',
	    			'container-class' => 'contenedor-menu',
	    			'container-id' => 'contenedor-menu'
		    		);
		    		wp_nav_menu( $args );
		    	?>
			  </div>
			</nav>
		</div>
	</header>
<body>