<?php 

	// Obter todos os posts do tipo "Depoimento"

	$args = array(
		'post_type' => 'download'
	);

	$args2 = array(
		'post_type' => 'mobile',
		'category_name' => 'principal',
		'orderby' => 'ID',
		'order' => 'ASC'
	);

	$args3 = array(
		'post_type' => 'mobile',
		'category_name' => 'direita',
		'orderby' => 'ID',
		'order' => 'ASC'
	);

	// Criar a query com os argumentos 

	$loop_arquivo = new WP_Query($args);
	$loop_principal = new WP_Query($args2);
	$loop_direita = new WP_Query($args3);

?>

<section class="mobile">
	
	<div class="container">
		
		<div class="row">

			<!-- Esquerda -->
			
			<div class="col-xs-2 col-xs-offset-2 esquerda">

				<?php $loop_principal->the_post(); ?>
					
				<div class="cabecalho">
					<h3 class="amaranth"><?php the_title(); ?></h3>
					<span class="traco"></span>
				</div>

				<?php the_content(); ?>

			</div>

			<!-- Centro -->

			<div class="col-xs-4 img-telefone">
				
				<img src="<?php bloginfo('template_url'); ?>/img/celular.png" class="img-responsive" alt="">

			</div>

			<!-- Direita -->

			<div class="col-xs-4 direita">


			<?php

				///////////////////////////////////////////////// Iniciar o Loop da Direita

				while($loop_direita->have_posts()) : $loop_direita->the_post();

					if(has_post_thumbnail($post->ID)):

						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				
						<div class="row">
							<!-- <img src="<?php echo $imagem[0]; ?>" alt=""> -->
						</div>

						<div class="row">
							<h3 class="amaranth"><?php the_title(); ?></h3>
							<?php the_content(); ?>
						</div>

					<?php endif; ?>

				<?php endwhile; ?>

				<?php ////////////////////////////////////// Arquivo para Download ?>

				<div class="row">
					
					<?php $loop_arquivo->the_post(); ?>

					<a target="_blank" href="<?php echo types_render_field('arquivo-para-download', array('output' => 'raw')); ?>" class="link-verde grotesk_light">Download</a>

				</div>

			</div>

		</div>

	</div>

</section>