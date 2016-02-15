<?php 

	// Obter todos os posts do tipo "Características"

	$args = array(
		'post_type' => 'categoria',
		'orderby' => 'ID',
		'order' => 'ASC'
	);

	// Criar a query com os argumentos 

	$loop = new WP_Query($args);
	$loop2 = new WP_Query($args);
	$loop3 = new WP_Query($args);

	// Classes a serem adicionadas aos elementos

	$classes = "";

?>

<section class="setores">
	
	<div class="container">
		
		<div class="row">

			<!-- Imagem da esquerda -->
			
			<div class="col-sm-3 col-sm-offset-1 col-md-offset-2">

				<div class="img-container">

					<?php

						////////////////////////////////////////////////////////////// Primeiro Loop

						while($loop->have_posts()) : $loop->the_post();

						// 

						if(has_post_thumbnail($post->ID)):

								$imagem = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' );

					?>
					
						<img class="img-responsive <?php echo $post->ID.' '.$classes; ?>" src="<?php echo $imagem[0]; ?>" alt="">

						<?php endif; ?>

					<?php $classes = 'hidden transparente'; ?>
	
					<?php endwhile; ?>

					<?php $classes = ''; ?>

				</div>

			</div>

			<div class="col-sm-7 col-md-5">
				
				<!-- Menu dos setores -->

				<div class="row">
					
					<ul class="menu-setores">

						<?php

							////////////////////////////////////////////// Segundo Loop

							$classes = 'ativo';

							while($loop2->have_posts()) : $loop2->the_post();

						?>

							<li>
								<a href="javascript:void(0)" data-section="<?php echo $post->ID; ?>" class="<?php echo $classes; ?>"><img src="<?php echo types_render_field('icone', array('output' => 'raw')); ?>" alt=""></a>
							</li>

						<?php $classes = ''; ?>

						<?php endwhile; ?>

					</ul>

				</div>

				<!-------------------- Texto do setor -------------------->

				<!-- Padarias -->

				<div class="textos">

					<?php

						////////////////////////////////////////////// Terceiro Loop

						while($loop3->have_posts()) : $loop3->the_post();

					?>
					
					<div class="row <?php echo $post->ID.' '.$classes; ?>">
						
						<h3 class="grotesk_demi"><?php the_title(); ?></h3>

						<?php the_content(); ?>

						<a href="<?php the_permalink(); ?>" class="link-verde">Mais</a>

					</div>

					<?php $classes = 'hidden transparente'; ?>

					<?php endwhile; ?>

				</div>				

			</div>

		</div>

	</div>

</section>