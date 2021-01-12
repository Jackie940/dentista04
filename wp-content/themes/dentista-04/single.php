<?php
    get_header();
    $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
?>

    <?php
        while(have_posts(  )){ 
            the_post();
            
            $attachID = get_post_thumbnail_id( get_the_ID() );
    ?>

    <section class="wsg-breadcrumbs">
        <div class="wsg-container">
            <div class="wsg-flex">
                <h1><?php the_title(); ?></h1>
                <p><?php the_title(); ?> - <a href="index.html">Home</a></p>
            </div>
        </div>
    </section>

    <section class="wsg-blog_01">
        <div class="wsg-container">
            <div class="wsg-flex">
                <div class="wsg-box_8 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-8">
                    <article class="wsg-blog-interna_item">

                        <figure>
                            <?php echo getImageThumb(get_post_thumbnail_id(), '760x500'); ?>
                        </figure>

                        <h3><?php the_title(); ?></h3>

                        <p><?php the_content(); ?></p>
                        
                    </article>
                </div>
               <?php get_sidebar(); ?>
            </div>
        </div>
    </section>
    <?php } ?>

    <section class="wsg-06">
        <div class="wsg-container">
            <div class="wsg-cto">
                <div class="wsg-titulo_1">
                    <h3>Postagens relacionadas</h3>
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