<?php
	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
	$id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;

	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;

	$id_sobre = get_page_by_path( 'sobre-nos', OBJECT, 'page' )->ID;
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
	<title><?php wp_title('|', true, 'right'); ?></title>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/websites-goias.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">

	<?php if( is_page('sobre')){ ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/empresa.css">
	<?php } else if( is_post_type_archive('servicos')) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/servicos.css">
	<?php } else if( is_singular('servicos')) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/servicos-interna.css">
	<?php } else if( is_page('blog') || is_search() || is_category() || is_tag()) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/blog.css">
	<?php } else if( is_single()) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/blog.css">
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/blog-interna.css">
	<?php } else if( is_page('contato')) { ?>
		<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' );?>/css/contato.css">
	<?php } ?>

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/mobile.css">

	<script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/websites-goias.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/owl.carousel.min.js"></script>
	<script src="<?php bloginfo('template_url'); ?>/js/carousel.js"></script>
	<?php wp_head(); ?>
</head>
<body>

	<header class="wsg-header wsg-header_horizontal">
		<div class="wsg-header_top">
			<div class="wsg-container">
				<div class="wsg-flex">
					<a href="<?php bloginfo('url'); ?>" class="wsg-logo">
						<figure>
							<?php
								$wsg_logo_header_img_id = get_post_meta( $id_logo, 'wsg_logo_header_img_id', true );
								echo getImageThumb($wsg_logo_header_img_id, 'full');
							?>
					</figure></a>

					<div class="wsg-btn_menu">
						<hr>
						<hr>
						<hr>
					</div>

					<nav class="wsg-menu_principal">

						<ul class="wsg-lista-inline">
							<?php wp_nav_menu( array(
								'theme_location' => 'header-menu'
							)); ?>
					</nav>
				</div>
			</div>
		</div>
		<div class="wsg-header_bottom">
			<div class="wsg-container">
				<div class="wsg-flex">
						<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-4 wsg-box_tp-4 wsg-box_tl-4">
							<div>
								<span class="flaticon-phone-2"></span>
								<div>
									<h4>Ligue-nos</h4>
									<?php
                            		$telefones = get_post_meta( $id_telefones, 'wsg_telefone_items', true );
                            		foreach ($telefones as $locais => $local) {
                            		?>
                                		<p><a href="" target="_blank"><?php echo $local['wsg_telefone_nmr']; ?></a></p>
                            		<?php } ?>
								</div>
							</div>
						</div>
					<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-4 wsg-box_tp-4 wsg-box_tl-4">
						<div>
							<span class="flaticon-mail-2"></span>
							<div>
								<h4>E-mail</h4>
								<?php
                            	$emails = get_post_meta( $id_email, 'wsg_emails', true );
                            	foreach ($emails as $locais => $email) {
                            	?>
                                	<p><a href="" target="_blank"><?php echo $email; ?></a></p>
                            	<?php } ?>
							</div>
						</div>
					</div>
					<div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-4 wsg-box_tp-4 wsg-box_tl-4">
						<div>
							<span class="flaticon-clock"></span>
							<div>
								<h4>Horário de funcionamento</h4>
								<p><?php echo get_post_meta($id_home, 'wsg_horario_semana', true); ?></p>
								<p><?php echo get_post_meta($id_home, 'wsg_horario_fimsemana', true); ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
