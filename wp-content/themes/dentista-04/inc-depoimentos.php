<?php $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID; ?>	

	<section class="wsg-05">
		<div class="wsg-container">
			<div class="wsg-cto">
				<div class="wsg-titulo_1">
					<h4>Depoimentos</h4>
					<h3>Veja o que nossos clientes dizem</h3>
				</div>
			</div>

			<div class="wsg-05_carousel">

				<?php	
					$arrayQueryDepoimentos = array(
						'post_type'				=> array( 'depoimentos' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryDepoimentos = new WP_Query($arrayQueryDepoimentos);
					while ( $queryDepoimentos->have_posts()) {
						$queryDepoimentos->the_post();
				?>
				<div class="wsg-05_carousel-item">


					<h3><?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_depoimentos_nome', true )); ?></h3>
					<?php echo wpautop(get_post_meta( get_the_ID(), 'wsg_depoimentos_item_resumo', true ));  ?>
					<figure>
							<?php
								$wsg_depoimentos_usr_img_id = get_post_meta( get_the_ID(), 'wsg_depoimentos_usr_img_id', true );
								getImageThumb($wsg_depoimentos_usr_img_id,'64x64');
							?>
					</figure>

				</div>
				<?php }wp_reset_query();  ?>

			</div>
		</div>
	</section>