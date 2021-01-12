<?php

// Meus posts types
	function meus_post_types(){

		// Serviços
		register_post_type('servicos',
			array(
				'labels' 			=> array(
					'name' 			=> __('Serviços'),
					'singular_name'	=> _x('Serviço', 'post type singular name'),
					'add_new'		=> _x('Novo serviço', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo serviço', 'portfolio item'),
					'edit_item'		=> _x('Editar serviço', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'servicos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		register_post_type('depoimentos',
			array(
				'labels' 			=> array(
					'name' 			=> __('Depoimentos'),
					'singular_name'	=> _x('Depoimento', 'post type singular name'),
					'add_new'		=> _x('Novo Depoimento', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo depoimento', 'portfolio item'),
					'edit_item'		=> _x('Editar depoimento', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'depoimentos'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);

		register_post_type('Doutores',
			array(
				'labels' 			=> array(
					'name' 			=> __('Doutores'),
					'singular_name'	=> _x('Doutor', 'post type singular name'),
					'add_new'		=> _x('Novo doutor', 'portfolio item'),
					'add_new_item'	=> _x('Adicionar novo doutor', 'portfolio item'),
					'edit_item'		=> _x('Editar doutor', 'portfolio item'),
				),
				'rewrite' 			=> array('slug' => 'doutores'),
				'public' 			=> true,
				'has_archive' 		=> true,
				'menu_icon' 		=> 'dashicons-admin-post',
				'supports' 			=> array('title', 'page-attributes'),
			)
		);


	}
	add_action('init', 'meus_post_types');

?>