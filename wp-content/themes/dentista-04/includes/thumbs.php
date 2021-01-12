<?php

	// tamanhos dinâmicos para thumbs
	function tamanhos_thumbs(){

		// Ativando suporte para imagem destacada
		add_theme_support('post-thumbnails');
		add_image_size( '1920x420', 1920, 420, true );
		add_image_size( '950x730', 950, 730, true );
		add_image_size( '380x240', 380, 240, true );
		add_image_size( '285x275', 285, 275, true );
		add_image_size( '895x580', 895, 580, true );
		add_image_size( '760x500', 760, 500, true );
		add_image_size( '275x175', 275, 175, true );
		add_image_size( '64x64', 64, 64, true );
	}
	add_action('after_setup_theme', 'tamanhos_thumbs');

?>