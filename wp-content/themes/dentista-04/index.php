<?php
	get_header();
	$id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
	$id_depoimentos = get_page_by_path( 'depoimentos', OBJECT, 'depoimentos' )->ID;
	$id_servicos = get_page_by_path( 'servicos', OBJECT, 'servicos' )->ID;
	$id_sobre = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;
?>

	<section class="wsg-banner">
		<?php
			$entries = get_post_meta( $id_page, 'banner_items', true );
			foreach ( (array) $entries as $key => $entry ) {

				$wsg_banner_items_titulo = null;
				$wsg_banner_items_texto = null;
				$wsg_banner_items_btn_texto = null;

				if ( isset( $entry['wsg_banner_items_img_id'] ) ) {
					$wsg_banner_items_img_id = $entry['wsg_banner_items_img_id'];
				}
				if ( isset( $entry['wsg_banner_items_titulo'] ) ) {
					$wsg_banner_items_titulo = $entry['wsg_banner_items_titulo'];
				}
				if ( isset( $entry['wsg_banner_items_texto'] ) ) {
					$wsg_banner_items_texto = $entry['wsg_banner_items_texto'];
				}
				if ( isset( $entry['wsg_banner_items_btn_link'] ) ) {
					$wsg_banner_items_btn_link = $entry['wsg_banner_items_btn_link'];
				}
				if ( isset( $entry['wsg_banner_items_btn_texto'] ) ) {
					$wsg_banner_items_btn_texto = $entry['wsg_banner_items_btn_texto'];
				}
		?>
		<div class="wsg-banner_item">
			<figure>
				<?php getImageThumb($wsg_banner_items_img_id,'1920x720') ?>
			</figure>
			<div class="wsg-banner_conteudo">
				<div class="wsg-container">
					<?php if ($wsg_banner_items_titulo != null && strlen($wsg_banner_items_titulo) > 0) { ?>
						<h2><?php echo $wsg_banner_items_titulo; ?></h2>
					<?php } ?>
					<?php if ($wsg_banner_items_texto != null && strlen($wsg_banner_items_texto) > 0) { ?>
						<?php echo wpautop($wsg_banner_items_texto); ?>
					<?php } ?>
					<?php if ($wsg_banner_items_btn_texto != null && strlen($wsg_banner_items_btn_texto) > 0) { ?>
						<a href="<?php echo $wsg_banner_items_btn_link; ?>" class="wsg-btn wsg-btn_estilo-1">
							<span><?php echo $wsg_banner_items_btn_texto; ?></span>
						</a>
					<?php } ?>
				</div>
			</div>
		</div>
	<?php } ?>
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

	<section class="wsg-02">
		<div class="wsg-flex">
			<div class="wsg-box_6f wsg-box_cp-12f wsg-box_cl-12f wsg-box_tp-12f wsg-box_tl-6f">
				<figure>
					<?php $wsg_sobre_01_img_id = get_post_meta( get_the_ID(), 'wsg_sobre_01_img_id', true );
						getImageThumb($wsg_sobre_01_img_id,'950x730'); ?>
				</figure>
			</div>
			<div class="wsg-box_6f wsg-box_cp-12f wsg-box_cl-12f wsg-box_tp-12f wsg-box_tl-6f">
				<div class="wsg-02_item">
					<div class="wsg-titulo_1">
						<h4>Sobre Nós</h4>
						<h3>Conheça nossa história</h3>
					</div>
					<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_sobre_01_conteudo', true )); ?>
					<p><?php $wsg_sobre_01_conteudo_id = get_post_meta( get_the_ID(), 'wsg_sobre_01_conteudo', true );?></p>

					
					
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

	<?php include "inc-doutores.php"; ?>

	<section class="wsg-04">
		<div class="wsg-flex">
			<div class="wsg-box_1_5 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-4 wsg-box_tl-1_5">
				<h4><?php echo get_post_meta($id_page, 'wsg_novos_sorrisos', true); ?></h4>
				<h5>Novos sorrisos</h5>
			</div>
			<div class="wsg-box_1_5 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-4 wsg-box_tl-1_5">
				<h4><?php echo get_post_meta($id_page, 'wsg_profissionais', true); ?></h4>
				<h5>Profissionais</h5>
			</div>
			<div class="wsg-box_1_5 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-4 wsg-box_tl-1_5">
				<h4><?php echo get_post_meta($id_page, 'wsg_clientes', true); ?></h4>
				<h5>Clientes</h5>
			</div>
			<div class="wsg-box_1_5 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-4 wsg-box_tl-1_5">
				<h4><?php echo get_post_meta($id_page, 'wsg_procedimentos', true); ?></h4>
				<h5>Procedimentos bem sucedidos</h5>
			</div>
			<div class="wsg-box_1_5 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-4 wsg-box_tl-1_5">
				<h4><?php echo get_post_meta($id_page, 'wsg_cirurgias', true); ?></h4>
				<h5>Cirurgias estéticas</h5>
			</div>
		</div>
	</section>

	<?php include "inc-depoimentos.php"; ?>

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


	<section class="wsg-06">
		<div class="wsg-container">
			<div class="wsg-cto">
				<div class="wsg-titulo_1">
					<h4>Confira as ultimas notícias sobre odontologia.</h4>
					<h3>Últimas Notícias</h3>
				</div>
			</div>

			<div class="wsg-flex">
				<?php
					$arrayQuery = array('post_type' => array( 'post' ), 'posts_per_page' => '-1');
					$query = new WP_Query($arrayQuery);
					while ($query->have_posts()) {
						$query->the_post();?>
						<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-6 wsg-box_tp-6 wsg-box_tl-6">
							<div class="wsg-06_item">
								<a href="<?php the_permalink(); ?>">
									<figure>
										<?php echo getImageThumb(get_post_thumbnail_id(), '1000x540'); ?>
									</figure>
								</a>
								<div>
									<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
									<p><?php the_excerpt(); ?></p>
								</div>
							</div>
						</div>
				<?php } ?>
			</div>
	</section>

	<section class="wsg-07">
		<div class="wsg-container">
			<div class="wsg-07_carousel">

			 	<?php
					$entries = get_post_meta( $id_page, 'parceiras_items', true );
					foreach ($entries as $key => $entry) {
				?>	
					<div class="wsg-07_carousel-item">
						<figure>
							<?php getImageThumb( $entry['wsg_parceiras_img_id'], "full") ?>
						</figure>
					</div>
				<?php } ?>

			</div>
		</div>
	</section>

<?php get_footer(); ?>
