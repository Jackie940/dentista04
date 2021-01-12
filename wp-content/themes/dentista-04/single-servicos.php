<?php
    get_header();
    $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

    <section class="wsg-breadcrumbs">
        <div class="wsg-container">
            <div class="wsg-flex">
                <h1>Serviços interna</h1>
                <p>Serviços interna - <a href="index.html">Home</a></p>
            </div>
        </div>
    </section>

    <section class="wsg-servicos-interna_01">
        <div class="wsg-container">
            <div class="wsg-flex">
                <?php
                while(have_posts(  )){ 
                    the_post();
                
                    $attachID = get_post_thumbnail_id( get_the_ID() );
                ?>
                <article class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-9 wsg-box_tl-9">

                    <figure>
                        <?php $wsg_servicos_usr_img_id = get_post_meta( get_the_ID(), 'wsg_servico_interna_img_id', true );
                        getImageThumb($wsg_servicos_usr_img_id,'895x580');?>
                    </figure>

                    <h3 class="wsg-titulo_1"><?php the_title(); ?></h3>
                    <p><?php echo get_post_meta( get_the_ID(), 'wsg_servico_interna_conteudo', true ); ?></p>

                </article>
                <?php } ?>
                <aside class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-3 wsg-box_tl-3">
                    <div class="wsg-categoria">
                        <h2>Relacionados</h2>
                        <ul>
                            <?php
                                $wsg_servicos_na_home = get_post_meta( $id_page, 'wsg_servicos_na_home', true );

                                $arrayQueryServicos = array(
                                    'post_type'             => array( 'servicos' ),
                                    'orderby' => 'menu_order',
                                    'order' => 'ASC',
                                    'posts_per_page'        => '-1',
                                    'post__in'              => $wsg_servicos_na_home,
                                );

                                $queryServicos = new WP_Query($arrayQueryServicos);
                                while ( $queryServicos->have_posts()) {
                                    $queryServicos->the_post();
                                ?>

                                <li class="flaticon-arrow-right"><a href="<?php the_permalink(  ); ?>"><?php the_title(); ?></a></li>

                                <?php }wp_reset_query();  ?>
                        </ul>
                    </div>
                </aside>
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

<?php get_footer(); ?>