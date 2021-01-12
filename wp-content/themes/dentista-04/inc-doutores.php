<?php $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID; ?>	

<section class="wsg-03">
		<div class="wsg-container">

			<div class="wsg-cto">
				<div class="wsg-titulo_1">
					<h4>Nossa Equipe</h4>
					<h3>Conheça nosso time de especialistas</h3>
				</div>
			</div>

			<div class="wsg-03_carousel">

				<?php	
					$arrayQueryDoutores = array(
						'post_type'				=> array( 'doutores' ),
						'orderby' => 'menu_order',
						'order' => 'ASC',
						'posts_per_page'		=> '-1',
					);
					$queryDoutores = new WP_Query($arrayQueryDoutores);
					while ( $queryDoutores->have_posts()) {
						$queryDoutores->the_post();
				?>
				<div class="wsg-03_carousel-item">

					<figure>
						<?php
						$wsg_doutores_usr_img_id = get_post_meta( get_the_ID(), 'wsg_doutores_usr_img_id', true );
						getImageThumb($wsg_doutores_usr_img_id,'600x600');
						?>
					</figure>

					<div>
						<h2><a href=""><?php the_title(); ?></a></h2>
						<h4><?php $wsg_doutor_resumo_id = get_post_meta(get_the_ID(), 'wsg_doutor_resumo', true);
						echo $wsg_doutor_resumo_id; ?></h4>
					</div>

				</div>
				<?php }wp_reset_query();  ?>

			</div>
		</div>
	</section>