<?php
	get_header();
	$id_page = get_page_by_path( 'home', OBJECT, 'page' )->ID;
	$id_depoimentos = get_page_by_path( 'depoimentos', OBJECT, 'depoimentos' )->ID;
	$id_servicos = get_page_by_path( 'servicos', OBJECT, 'servicos' )->ID;
	$id_sobre = get_page_by_path( 'sobre', OBJECT, 'page' )->ID;
 ?>
	<div class="wsg-blog_01">
		<div class="wsg-container">
			<div class="wsg-flex">
				<div class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-8">
					<article class="wsg-flex">


                <?php
                        /**/
                        global $paged;
                        $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
                        $args = array (
                        'post_type'         => 'post',
                        'posts_per_page'    => 6,
                        'paged'				=> $paged,
                         );
						global $query_string;
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
						$query_args = explode("&", $query_string);
						// essa variavel não deve ser reuniciada
						$search_query = array();
						foreach($query_args as $key => $string) {
							$query_split = explode("=", $string);
							$search_query[$query_split[0]] = urldecode($query_split[1]);
						}
						$search_query['post_type'] = array('post');
						$search_query['posts_per_page'] = 6;
						$search_query['paged'] = $paged;

						$query = new WP_Query( $search_query );
						// var_dump($query->query);
						// var_dump($query->get_posts());
						// exit;
						if ( $query->have_posts() ) {
							while ( $query->have_posts() ) {
								$query->the_post();
								$attachID = get_post_thumbnail_id( get_the_ID() );
								$categories = get_the_terms( get_the_ID(), 'category' );
								$htmlCategory = '';
								if ( $categories && ! is_wp_error( $categories ) ){
									$draught_links = array();
									foreach ($categories as $category) {
										$item = '<a href="'.get_term_link($category->term_id, "category").'" title="'.$category->name.'" ><span class="icon-price-tags"></span> '.$category->name.'</a>';
										array_push($draught_links, $item);
									}
									$htmlCategory = implode(" | ", $draught_links);
								}
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
								<p><a href="<?php the_permalink()?>"><?php the_excerpt(); ?></a></p>
							</div>
						</div>
					</div>
                    <?php }
                        }else{ ?>
                            <section class="wsg-404_erro">
                                <div class="wsg-container">
                                    <div class="wsg-cto">
                                        <h1 class="wsg-titulo_1">Nada encontrado.</h1>
                                    </div>
                                </div>
                            </section>

                       <?php } ?>

                    <div class="wsg-paginacao">
                    <?php
						if (function_exists("pagination")) {
							pagination($query);
                        }
                    ?>
                   </article>
                	</div>
					
					<?php get_sidebar(  ); ?>
                </div>
			</div>
		</div>
		
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


<?php get_footer(); ?>