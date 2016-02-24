<?php 

	// Obter todos os posts do tipo "Características"

	$args = array(
		'post_type' => 'caracteristica',
		'orderby' => 'ID',
		'order' => 'ASC'
	);

	// Criar a query com os argumentos 

	$loop = new WP_Query($args);
	$loop2 = new WP_Query($args);

	// Classes a serem adicionadas aos elementos

	$classes = "";

?>

<section class="mercosul">

	<div class="container">

		<!-- Logo Principal da Página -->
		
		<div class="row logo-redondo">
		
			<img src="<?php bloginfo('template_url'); ?>/img/logo-mercosul.png" alt="">

		</div>

		<!-------------------------- Qualidade, ferramentas e suporte -------------------------->

		<div class="row features grotesk_demi">
			
			<div class="col-md-2"></div>
			<div class="col-md-8">

				<?php 

					///////////////////////////////////////// Rodar o Loop para mostrar o conteúdo

					while($loop->have_posts()) : $loop->the_post();

				?>

				<div class="col-xs-4">
					<div class="box row">

						<?php

							// Mostrar a imagem

							if(has_post_thumbnail($post->ID)):

								$imagem = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

						?>
						
						<img class="img-responsive" data-section="<?php echo $post->ID; ?>" src="<?php echo $imagem[0]; ?>" alt="">

					<?php endif; ?>

						<h3><?php the_title(); ?></h3>

					</div>
				</div>

				<?php endwhile; // Fim Do Loop ?> 

			</div>

			<div class="col-md-2"></div>

		</div>

		<!-------------------------- Conteúdo da Seção -------------------------->

		<!-- Qualidade -->

		<?php  

			// Rodar o Loop pela segunda vez para mostrar o conteúdo de cada post

			while($loop2->have_posts()): $loop2->the_post();

		?>

		<div class="row conteudo <?php echo $post->ID.' '.$classes; ?> ">
			
			<div class="col-md-2 col-md-offset-2">
				
				<div class="cabecalho">
					<h3 class="amaranth"><?php echo types_render_field('subtitulo'); ?></h3>
					<span class="traco"></span>
				</div>

			</div>

			<div class="col-md-6 montserrat div-texto">
				
				<?php echo types_render_field('resumo-caracteristica'); ?>

				<a href="<?php the_permalink(); ?>" class="link-verde mais grotesk_light"> Mais </a>

			</div>

		</div>

		<?php // Tornar as próximas iterações transparentes ?>

		<?php $classes = 'hidden transparente'; ?>

		<?php endwhile; ?>

	</div>

</section>