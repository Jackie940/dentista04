<?php

	add_action( 'cmb2_admin_init', 'metaboxes_doutores' );

	function metaboxes_doutores() {

		// Página de configurações da logo
		$page_atual = get_page_by_path( 'doutores', OBJECT, 'doutores' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($page_atual && $page_atual->ID != $post_id){
			return;
		}

		// Metabox doutores
		$doutores = new_cmb2_box( array(
			'id'            => 'doutores',
			'title'         => __( 'Doutores' ),
			'object_types'  => array( 'doutores', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
		) );

		$doutores->add_field( array(
			'name'       => __( 'Imagem do usuário' ),
			'desc'       => __( 'Tamanho recomendado <strong>370x247</strong>' ),
			'id'         => 'wsg_doutores_usr_img',
			'type' => 'file',
			'preview_size' => array( 370/3, 247/3 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$doutores->add_field( array(
			'name'       => __( 'Resumo do Doutor' ),
			'id'         => 'wsg_doutor_resumo',
			'type'       => 'wysiwyg',
		) );



	}

?>