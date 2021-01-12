<?php
	get_header();
	$id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
	$id_depoimentos = get_page_by_path( 'depoimentos', OBJECT, 'depoimentos' )->ID;
	$id_servicos = get_page_by_path( 'servicos', OBJECT, 'servicos' )->ID;
	$id_sobre = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;
 ?>

<body>

	<section class="wsg-breadcrumbs">
		<div class="wsg-container">
			<div class="wsg-flex">
				<h1>Blog</h1>
				<p>Blog - <a href="index.html">Home</a></p>
			</div>
		</div>
	</section>

	<div class="wsg-blog_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-8">
					<article class="wsg-flex">

						<?php
							$arrayQuery = array(
									'post_type' => array( 'post' ),
									'posts_per_page' => '-1',
								);
							$query = new WP_Query($arrayQuery);
							while ( $query->have_posts()) {
								$query->the_post();
						?>
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

					</article>

				</div>
				<?php get_sidebar(); ?>
			</div>
		</div>
	</div>

	


</body>

<?php get_footer(); ?>
