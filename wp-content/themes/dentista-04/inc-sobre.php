<?php $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID; ?>	

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