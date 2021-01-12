<?php

	add_action( 'cmb2_admin_init', 'metaboxes_depoimentos' );

	function metaboxes_depoimentos() {

		// Página de configurações da logo
		$page_atual = get_page_by_path( 'depoimentos', OBJECT, 'depoimentos' );

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

		// Metabox depoimentos
		$depoimentos = new_cmb2_box( array(
			'id'            => 'depoimentos',
			'title'         => __( 'Depoimentos de Usuários' ),
			'object_types'  => array( 'depoimentos', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
		) );
		$depoimentos->add_field( array(
			'name'			=> __( 'Nome do usuário' ),
			'id'			=> 'wsg_depoimentos_nome',
			'type'			=> 'text',
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Imagem do usuário' ),
			'desc'       => __( 'Tamanho recomendado <strong>370x247</strong>' ),
			'id'         => 'wsg_depoimentos_usr_img',
			'type' => 'file',
			'preview_size' => array( 370/3, 247/3 ),
			'query_args' => array( 'type' => 'image' ),
		) );
		$depoimentos->add_field( array(
			'name'       => __( 'Resumo do usuário' ),
			'id'         => 'wsg_depoimentos_item_resumo',
			'type'       => 'wysiwyg',
		) );



	}

?>