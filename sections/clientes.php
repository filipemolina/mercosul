<?php 

	// Obter todos os posts do tipo "Depoimento"

	$args = array(
		'post_type' => 'fornecedor',
		'orderby' => 'ID',
		'order' => 'ASC'
	);

	// Criar a query com os argumentos 

	$loop = new WP_Query($args);

	$offset = 'col-md-offset-1';

?>


<section class="clientes">
	
	<div class="container">
		
		<div class="row cima">
			
			<img src="<?php bloginfo('template_url'); ?>/img/distribuicao.png" class="distribuicao img-responsive" alt="">

		</div>

		<div class="row logos">

			<?php

				////////////////////////////////// Iniciar o Loop

				while($loop->have_posts()) : $loop->the_post();

					if(has_post_thumbnail($post->ID)):

						$imagem = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

			?>
			
					<div class="col-sm-4 col-xs-6 col-md-2 <?php echo $offset; ?>">
						<img class="img-responsive" src="<?php echo $imagem[0]; ?>" alt="">
					</div>

				<?php endif; ?>

				<?php $offset = ''; ?>

			<?php endwhile; ?>

		</div>

	</div>

</section>