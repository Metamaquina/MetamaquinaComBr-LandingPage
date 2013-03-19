<?php
/*
 * Metamaquina 2
 * Landing page
 */
//function landing_page_styles() {
	wp_enqueue_style('landing-page', get_template_directory_uri() . '/includes/landing-page/landing-page.css', array(), '1.1');
//}
//add_action('wp_enqueue_scripts', 'landing_page_styles');
?>
<section id="landing-page">
	<div class="landing-container">
		<a href="#" class="close-landing top-close">Continuar navegando no site</a> 
		<header>
			<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/header.jpg" />
		</header>
		<div class="clearfix"></div>
		<section id="landing-spec-buy">
			<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/spec.jpg" />
			<a href="http://metamaquina.com.br/impressora-3d/">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/buy.jpg" />
			</a>
		</section>
		<div class="clearfix"></div>
		<section id="quote">
			<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/quote.jpg" />
			<a href="http://metamaquina.com.br/metamaquina-na-midia/">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/quote-more.jpg" />
			</a>
		</section>
		<div class="clearfix"></div>
	  <img class="na-tv" src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/como-visto-na-tv.png" />
	</div>
	<footer>
		<div class="landing-container">
			<a href="https://www.facebook.com/metamaquina" title="Facebook" rel="external" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-facebook.jpg" />
			</a>
			<a href="http://twitter.com/metamaquina" title="Twitter" rel="external" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-twitter.jpg" />
			</a>
			<a href="http://youtube.com/user/metamaquina" title="YouTube" rel="external" target="_blank">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-youtube.jpg" />
			</a>
			<a href="#" class="close-landing">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-mm.jpg" />
			</a>
			<a href="http://metamaquina.com.br/contato/">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-contact.jpg" />
			</a>
			<a href="#" class="close-landing">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-home.jpg" />
			</a>
			<a href="http://metamaquina.com.br/contato/">
				<img src="<?php bloginfo('template_directory'); ?>/includes/landing-page/img/footer-map.jpg" />
			</a>
		</div>
	</footer>
	</div>
</section>
<script type="text/javascript">
	var activeLanding = true;
	jQuery(function($) {
		$(document).ready(function() {
			$('.close-landing').live('click', function() {
				closeLanding();
				return false;
			});
			$(document).keyup(function(e) {
				if(activeLanding && (e.keyCode == 27 || e.keyCode == 32)) { closeLanding(); return false; }
			});
		});

		function closeLanding() {
			if(!activeLanding)
				return false;
			$('body > header, body > div').css('display', 'block');
			$('#landing-page').hide();
			activeLanding = false;
		}
	});
</script>
