<?php 

	// Obter todos os posts do tipo "Depoimento"

	$args = array(
		'post_type' => 'download',
		'orderby' => 'ID',
		'order' => 'ASC'
	); 

	// Criar a query com os argumentos 

	$loop = new WP_Query($args);

?>

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

				<h3 class="grotesk_demi">Downloads</h3>
				
				<div class="row">

				<?php // Mostrar o conteúdo dessa página apenas caso o usuário esteja logado ?>

				<?php if(is_user_logged_in()): ?>

					<table class="table table-striped">
						
						<tr>
							<th>Nome</th>
							<th>Descrição</th>
							<th class="centralizado">Arquivo</th>
						</tr>

						<?php while($loop->have_posts()) : $loop->the_post(); ?>

						<tr>
							<td class="titulo"><?php the_title(); ?></td>
							<td><?php the_content(); ?></td>
							<td class="texto">
								<a target="_blank" href="<?php echo types_render_field('arquivo-para-download', array('output' => 'raw')); ?>" class="link-verde grotesk_light">Download</a>
							</td>
						</tr>

						<?php endwhile; ?>

					</table>					

				<?php else: ?>

					<?php // Caso contrário mostrar o formulário de login ?>

					<div class="texto">
						
						<?php wp_login_form(); ?>

					</div>

				<?php endif; ?>

				</div>

			</div>

		</article>

	</div>

	<!-- Contato -->

	<?php get_template_part('sections/contato'); ?>

</div>

<?php get_footer(); ?>