<?php get_header();?>
<div class="seccion-header">
	<div class="img-header">
		<div class="container contain-header">
			<h1>¡Hola! Soy Mariam</h1>
			<p class="pt-3 text-center">Te ayudaré a construir una mejor versión de ti. <br> Dándole a tu cuerpo, alma y espíritu todo lo que necesita.</p>
			<div class="pt-5"><a href="<?php echo get_page_link( get_page_by_path( 'lets-do-it' )); ?>" class="btn btn-primary">QUIERO HACERLO</a></div>
		</div>
	</div>
	<div class="container text-header pt-5 wow animated fadeIn" data-wow-delay="0.5s">
		<p>Soy una Venezolana radicada en la Ciudad de Mexico. <b>Health Coach</b> certificada en el Institute of Integrative Nutrition de New York <b>(IIN)</b>; con una especializacion en hormonas del mismo Instituto.<br>Apasionada por la vida saludable ya que para mi es sinónimo de felicidad. No creo en dietas estrictas. Estoy convencida que cuando aprendes a escuchar tú cuerpo y logras identificar los alimentos que funcionan para ti, empezarás a vivir sin preocupaciones por el peso, tendrás más energia, mejorarás tú digestión, no te enfermarás y como consecuencia tendrás una vida plena. <br>Mi deseo es poder ayudarte a que aprendas a nutrir no sólo tú cuerpo, sino tú mente y tú alma tambien <b>(Body+Mind+Soul). </b>Creyendo que vivir en armonia con estos pilares es la clave de todo.</p>
		<h4>Mi Historia</h4>
		<p>A principios del 2014 despertó mi verdadero interés por la nutrición. Comencé a leer libros e investigar en internet y fue entonces que aprendí cosas tan básicas como "qué es un carbohidrato". La curiosidad fue mi motor y desde entonces no he parado de investigar sobre la materia. Me certifiqué como <b>Health Coach</b> para mejorar mi calidad de vida pero en el proceso me di cuenta que realmente mi vocación es compartir este conocimiento y ayudar a todas esas personas que tienen el deseo de mejorar su vida.</p>
		<p><i>"Fue tan increíble mi evolución que quiero que tú también tengas la oportunidad de transformar tu vida"</i></p>
	</div>
</div>
<div class="banner wow animated fadeIn mt-4" data-wow-delay="0.6s">
	<div class="container contain-banner">
		<h3>¡Si quieres comenzar a vivir una vida mas plena, dejame tu mail!</h3>
		<div class="form-header">
			<?php echo wpautop( do_shortcode('[contact-form-7 id="19" title="Formulario de contacto 1"]') ); ?>
		</div>
	</div>
</div>
<div class="porque wow animated fadeIn mt-4" data-wow-delay="0.6s">
	<div class="contain-porque container">
		<p class="pb-3 porque-mobile">¿Porque una Health Coach?</p>
		<p>Un coach te brinda el soporte que necesitas para mejorar tu salud, creando un plan dinámico, sin juicios ni expectativas. Hoy en día con tanta información nos confundimos y no sabemos por donde empezar por eso es tan importante tener a alguien a tu lado brindándote ese apoyo para que te mantengas motivado y logres todas las metas que te propongas.</p>
	</div>
</div>
<div class="testimonios wow animated fadeIn" data-wow-delay="0.6s">
	<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="10000">
  <div class="carousel-inner">
    <div class="carousel-item active">
    	<div class="msj-testimonios container">
      		<p><b>Patricia Martinez.</b> Ciudad de Mexico</p>
      		<p class="mt-md-5">Desde que comence el programa empece a comer saludable y correctamente, incluso me motivó a cocinar y hornear algo que tenia años de no hacer. Ella entiende mis necesidades, cuenta con el conocimiento y las herramientas para apoyarme.</p>
      		<div class="foto-test mt-3 wow animated flip"><img src="<?php echo get_template_directory_uri(); ?>/images/patricia.jpeg" alt="patricia"></div>
    	</div>
    </div>
    <div class="carousel-item">
      <div class=" msj-testimonios container">
      		<p><b>Alejandra Restrepo.</b> Ciudad de Mexico</p>
      		<p class="mt-md-5">Mi coach Mariam me ayudo a crear rutinas saludables, me enseño menús, tips de alimentación y a mejorar emocionalmente para asi lograr un desarrollo integral. Ya no tengo estrés y soy mucho más consciente en mis hábitos alimenticios.</p>
      		<div class="foto-test mt-3 animated flip"><img src="<?php echo get_template_directory_uri(); ?>/images/alejandra.jpeg" alt="alejandra"></div>
    	</div>
    </div>
    <div class="carousel-item">
      <div class=" msj-testimonios container">
      		<p><b>Gerardo Rodríguez.</b> Ciudad de Mexico</p>
      		<p class="mt-md-5">He logrado hábitos sanos de alimentación, ejercicio y conectarme conmigo mismo para disfrutar de las actividades tanto personales como profesionales.</p>
      		<div class="foto-test mt-3 animated flip"><img src="<?php echo get_template_directory_uri(); ?>/images/gerardo.png" alt="gerardo"></div>
    	</div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>
<?php get_footer();?>