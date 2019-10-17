<?php get_header();?>
<div class="container">
	<div>
		<?php echo wpautop( do_shortcode('[booked-profile]') );?>
	</div>
</div>
<?php get_footer();?>