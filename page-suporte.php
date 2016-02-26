<?php get_header(); ?>

<div class="container-fluid wrapper">
	
	<!-- Topo e Menu -->

	<?php get_template_part('sections/topo'); ?>

	<div class="container single">

		<!-- Logo Principal da Página -->
		
		<div class="row logo-redondo">
		
			<img src="<?php bloginfo('template_url'); ?>/img/logo-mercosul.png" alt="">

		</div>

		<article class="conteudo">
			
			<div class="container">

				<h3 class="grotesk_demi">Suporte Técnico</h3>
				
				<div class="row">

					<?php echo do_shortcode('[contact-form-7 id="74" title="Suporte Técnico"]', false); ?>

				</div>

			</div>

		</article>

	</div>

	<!-- Contato -->

	<?php get_template_part('sections/contato'); ?>

</div>

<?php get_footer(); ?>