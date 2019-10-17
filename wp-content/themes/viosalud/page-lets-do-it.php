<?php get_header();?>
<div class="mt-5 container">
	<div>
		<h2 class="text-center" style="color:#612094; font-weight: bold;">Agendar Consulta</h2>
		<p class="text-center mt-4 text-calen">El Programa tiene una duración de tres (3) meses, te veo cada quince (15) días para un total de seis (6) consultas. Considero que tres (3) meses es el tiempo mínimo para ayudarte a crear hábitos permanentes en el tiempo. </p>
		<div class="container contain-num-desk">
			<div class="contain-numbers mt-5 container">
				<div class="col-md-4 modulos-numbers1">
					<div class="d-flex align-items-center contain-tres">
						<p class="tres">3</p>
					</div>
					<div class="pl-md-2 d-flex align-items-center contain-meses">
						<p class="meses-asesoria">Meses de asesoria <br> (6 consultas)</p>
					</div>
				</div>
				<div class="col-md-4 modulos-numbers">
					<p class="pesos">$1500</p>
					<p class="meses-asesoria">Pesos mensuales</p>
				</div>
				<div class="col-md-4 modulos-numbers">
					<p class="pesos">85$</p>
					<p class="meses-asesoria">Dólares mensuales</p>
				</div>
			</div>
		</div>
		<div class="contain-numbers-mobile container">
			<div class="text-center">
				<p  style="font-size: 25px; font-weight: bold; margin-bottom: 0px;">3</p>
				<p style="font-size: 12px;">Meses de asesoria <br> (6 consultas)</p>
			</div>
			<div class="text-center">
				<p style="font-size: 25px; font-weight: bold; margin-bottom: 0px;">$1500</p>
				<p style="font-size: 12px;">Pesos mensuales</p>
			</div>
			<div class="text-center">
				<p style="font-size: 25px; font-weight: bold; margin-bottom: 0px;">85$</p>
				<p style="font-size: 12px;">Dórales mensuales</p>
			</div>
		</div>
		<p class="text-center mt-5 text-calen">*Las consultas pueden ser presenciales si te encuentras en la Ciudad de México (Polanco) te contactaré para definir el lugar, de lo contrario serían vía online</p>
	</div>
	<div class="mt-5 wow animated fadeIn" data-wow-delay="0.5s">
		<?php echo wpautop( do_shortcode('[booked-calendar calendar=4]') ); ?>
	</div>
</div>
<?php get_footer();?>