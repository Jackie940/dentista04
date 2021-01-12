<?php 
	get_header();

	$id_page = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;
?>

	<section class="wsg-breadcrumbs">
		<div class="wsg-container">
			<div class="wsg-flex">
				<h1>Empresa</h1>
				<p>Empresa - <a href="index.html">Home</a></p>
			</div>
		</div>
	</section>

	<section class="wsg-empresa-01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-7">
					<div class="wsg-tabs">
						<ul class="wsg-tabs_btns wsg-lista-inline">
							<?php
								$sobre_02_items = get_post_meta( $id_page, 'sobre_02_items', true);
								$indice = 0;
								foreach ($sobre_02_items as $item_key => $item_value) {
									$indice++;
							?>
								<li>
									<a href="javascript:void(0)" class="wsg-tabs_btn" data-tab="<?php echo $indice; ?>">
										<?php echo $item_value['wsg_sobre_02_items_titulo']; ?>
									</a>
								</li>
							<?php } ?>
						</ul>
						<div class="wsg-tabs_contents">
							<?php
								$sobre_02_items = get_post_meta( $id_page, 'sobre_02_items', true);
								$indice = 0;
								foreach ($sobre_02_items as $item_key => $item_value) {
									$indice++;
							?>
								<div data-tab="<?php echo $indice; ?>">
									<?php echo wpautop($item_value['wsg_sobre_02_items_texto']); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
				<div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-5">
					<figure>
						<?php $wsg_sobre_02_img_id = get_post_meta( get_the_ID(), 'wsg_sobre_02_img_id', true );
						getImageThumb($wsg_sobre_02_img_id,'950x730'); ?>
					</figure>
				</div>
			</div>
		</div>
	</section>

	<?php include "inc-sobre.php"; ?>

	<?php include "inc-doutores.php"; ?>

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


</body>
</html>


<?php get_footer(); ?>
