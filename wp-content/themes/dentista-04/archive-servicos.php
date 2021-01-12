<?php
	get_header();
	$id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
	$id_depoimentos = get_page_by_path( 'depoimentos', OBJECT, 'depoimentos' )->ID;
	$id_servicos = get_page_by_path( 'servicos', OBJECT, 'servicos' )->ID;
	$id_sobre = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;

	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

	<section class="wsg-breadcrumbs">
		<div class="wsg-container">
			<div class="wsg-flex">
				<h1>Serviços</h1>
				<p>Serviços - <a href="index.html">Home</a></p>
			</div>
		</div>
	</section>

	<section class="wsg-01">
		<div class="wsg-container">
			<div class="wsg-cto">
				<div class="wsg-titulo_1">
					<h4>Conheça nossos serviços</h4>
					<h3>Explore os serviços de atendimento odontológico</h3>
				</div>
			</div>
			<div class="wsg-flex">

				<?php
					$wsg_servicos_na_home = get_post_meta( $id_page, 'wsg_servicos_na_home', true );

					$arrayQueryServicos = array(
						'post_type'				=> array( 'servicos' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
						'post__in'				=> $wsg_servicos_na_home,
					);

					$queryServicos = new WP_Query($arrayQueryServicos);
					while ( $queryServicos->have_posts()) {
						$queryServicos->the_post();
				?>

				<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-4 wsg-box_tl-4">

					<figure>
							<?php $wsg_servico_item_img_id = get_post_meta( get_the_ID(), 'wsg_servico_item_img_id', true );
							getImageThumb($wsg_servico_item_img_id,'275x175'); ?>
							<img src="<?php echo get_post_meta( get_the_ID(), 'wsg_servico_item_icone', true ); ?>" alt="" title="" class="wsg-icone">
					</figure>
					<div>
						<h4><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></h4>
						<p><?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_servico_item_resumo', true )); ?></p>
						<a href="<?php the_permalink(  ); ?>" class="wsg-link_simples">Saiba mais</a>
					</div>

				</div>
				<?php }wp_reset_query();  ?>

			</div>
		</div>
	</section>

	<section class="wsg-cta-paginas">
		<div class="wsg-container">
			<div class="wsg-cto">
				<h2>Consulte nosso especialista e obtenha agendamento rápido</h2>
				<ul class="wsg-lista-inline">
					<li class="flaticon-mail-2">Entre em contato: <a href=""><?php echo get_post_meta($id_home, 'wsg_telefone', true); ?></a></li>
					<li class="flaticon-phone-2">Email: <a href=""><?php echo get_post_meta($id_home, 'wsg_email', true); ?></a></li>
				</ul>
				<a href="<?php echo site_url('/contato'); ?>" class="wsg-btn wsg-btn-1"><span>Entre em contato</span></a>
			</div>
		</div>
	</section>

	<section class="wsg-02">
		<div class="wsg-flex">
			<div class="wsg-box_6f wsg-box_cp-12f wsg-box_cl-12f wsg-box_tp-12f wsg-box_tl-6f">
				<figure>
					<?php $wsg_sobre_01_img_id = get_post_meta( $id_home, 'wsg_sobre_01_img_id', true );
					getImageThumb($wsg_sobre_01_img_id,'full'); ?>
				</figure>
			</div>
			<div class="wsg-box_6f wsg-box_cp-12f wsg-box_cl-12f wsg-box_tp-12f wsg-box_tl-6f">
				<div class="wsg-02_item">
					<div class="wsg-titulo_1">
						<h4>Sobre Nós</h4>
						<h3>Conheça nossa história</h3>
					</div>
					<?php echo wpautop(get_post_meta( $id_home, 'wsg_sobre_01_conteudo', true )); ?>
					<p><?php $wsg_sobre_01_conteudo_id = get_post_meta( $id_home, 'wsg_sobre_01_conteudo', true );?></p>

					
					
						<?php 

						$items = get_post_meta( $id_page, 'sobre_01_items', true );
            			foreach ($items as $item => $topicos) {
						 ?>

						<div class="wsg-empresa_item">

							<figure>
								<?php getImageThumb( $topicos['wsg_sobre_01_items_img_id'], '32x32') ?>
							</figure>

							<div>
								<h3><?php echo $topicos['wsg_sobre_01_items_titulo']; ?></h3>
								<p><?php echo $topicos['wsg_sobre_01_items_texto']; ?></p>
							</div>

						</div>
						<?php } ?>
						
				</div>
			</div>
		</div>
	</section>

<?php get_footer(); ?>