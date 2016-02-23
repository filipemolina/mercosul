<?php 

	// Obter todos os posts do tipo "Depoimento"

	$args = array(
		'post_type' => 'depoimento',
		'orderby' => 'ID',
		'order' => 'ASC'
	); 

	// Criar a query com os argumentos 

	$loop = new WP_Query($args);

?>

<section class="depoimentos" data-stellar-background-ratio="0.5">
	
	<div class="container slick-slider">

		<?php

			/////////////////////////////////////// Iniciar o Loop

			while($loop->have_posts()) : $loop->the_post();

		?>
		
		<div class="row item">
			
			<div class="col-xs-2 col-md-offset-2 aspas">
				<img class="img-responsive" src="<?php bloginfo('template_url'); ?>/img/aspas.png" alt="">
			</div>

			<div class="col-md-6">
				
				<p class="amaranth"><?php echo get_the_content(); ?></p>

				<span class="nome"><?php echo get_the_title(); ?></span>

			</div>

		</div>

		<?php endwhile; ?>

	</div>

</section>