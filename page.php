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
				
				<div class="row">
					
					<?php while(have_posts()) : the_post(); ?>

						<h3 class="grotesk_demi"><?php the_title(); ?></h3>

						<div class="texto">
							
							<?php the_content(); ?>

						</div>

					<?php endwhile; ?>

				</div>

			</div>

		</article>

	</div>

	<!-- Contato -->

	<?php get_template_part('sections/contato'); ?>

</div>

<?php get_footer(); ?>