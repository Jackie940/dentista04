<?php

	add_action( 'cmb2_admin_init', 'metaboxes_home' );

	function metaboxes_home() {

		// Método de especificação de página
		$homePage = get_page_by_path( 'home', OBJECT, 'page' );

		$post_id;

		if (isset($_GET['post'])) {
			$post_id = $_GET['post'];
		}else if(isset($_POST['post_ID'])) {
			$post_id = $_POST['post_ID'];
		}
		if( !isset( $post_id ) ) return;

		if($homePage && $homePage->ID != $post_id){
			return;
		}

		// Metabox Banner
		$banner = new_cmb2_box( array(
			'id'            => 'banners',
			'title'         => __( 'Banners' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$banner_items = $banner->add_field( array(
			'id'            => 'banner_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Imagem do banner' ),
			'desc'       => __( 'Tamanho recomendado <strong>1920x420</strong>' ),
			'id'         => 'wsg_banner_items_img',
			'type' => 'file',
			'preview_size' => array( 1920/5, 420/5 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Titulo do banner' ),
			'id'         => 'wsg_banner_items_titulo',
			'type'       => 'text',
		) );
		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Texto do banner' ),
			'id'         => 'wsg_banner_items_texto',
			'type'       => 'wysiwyg',
		) );
		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'texto do botão' ),
			'id'         => 'wsg_banner_items_btn_texto',
			'type'       => 'text',
		) );
		$banner->add_group_field( $banner_items, array(
			'name'       => __( 'Link do botão' ),
			'id'         => 'wsg_banner_items_btn_link',
			'type'       => 'text',
		) );

		// Metabox call_to_action
		$call_to_action = new_cmb2_box( array(
			'id'            => 'call_to_action',
			'title'         => __( 'Chamada para ação' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_call_to_action_titulo',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Texto do botão da seção' ),
			'id'         => 'wsg_call_to_action_btn_texto',
			'type'       => 'text',
		) );
		$call_to_action->add_field( array(
			'name'       => __( 'Link do botão da seção' ),
			'id'         => 'wsg_call_to_action_btn_link',
			'type'       => 'text',
		) );

		// Metabox Sobre
		$sobre_01 = new_cmb2_box( array(
			'id'            => 'sobre_01',
			'title'         => __( 'Sobre nós' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Imagem da seção' ),
			'desc'       => __( 'Tamanho recomendado <strong>950x650</strong>' ),
			'id'         => 'wsg_sobre_01_img',
			'type' => 'file',
			'preview_size' => array( 950/5, 650/5 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_sobre_01_titulo',
			'type'       => 'text',
		) );
		$sobre_01->add_field( array(
			'name'       => __( 'Subtítulo da seção' ),
			'id'         => 'wsg_sobre_01_subtitulo',
			'type'       => 'text',
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Texto de sobre nós' ),
			'id'         => 'wsg_sobre_01_conteudo',
			'type'       => 'wysiwyg',
		) );

		$sobre_01_items = $sobre_01->add_field( array(
			'name'			=> __( 'Items sobre nós' ),
			'id'            => 'sobre_01_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Item {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );

		$sobre_01->add_group_field( $sobre_01_items, array(
			'name'       => __( 'Imagem do item' ),
			'desc'       => __( 'Tamanho recomendado <strong>32x32</strong>' ),
			'id'         => 'wsg_sobre_01_items_img',
			'type' => 'file',
			'preview_size' => array( 32/1, 32/1 ),
			'query_args' => array( 'type' => 'image' ),
		) );

		$sobre_01->add_group_field( $sobre_01_items, array(
			'name'       => __( 'Título do item' ),
			'id'         => 'wsg_sobre_01_items_titulo',
			'type' => 'Text',
		) );

		$sobre_01->add_group_field( $sobre_01_items, array(
			'name'       => __( 'Texto do item' ),
			'id'         => 'wsg_sobre_01_items_texto',
			'type' => 'wysiwyg',
		) );

		$sobre_01->add_field( array(
			'name'       => __( 'Texto abaixo da imagem de sobre nós' ),
			'id'         => 'wsg_sobre_01_conteudo_img',
			'type'       => 'wysiwyg',
		) );

		// Metabox Serviços
		$servicos = new_cmb2_box( array(
			'id'            => 'servicos',
			'title'         => __( 'Serviços' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			//'closed'        => true,
		) );

		$servicos->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_servicos_titulo',
			'type'       => 'text',
		) );
		$servicos->add_field( array(
			'name'    => __( 'Listagem de serviços' ),
			'desc'    => __( 'Arraste os produtos da coluna da esquerda para a da direita para anexá-lo. <br/>Você pode reorganizar a ordem dos produtos na coluna da direita arrastando e soltando.'),
			'id'      => 'wsg_servicos_na_home',
			'type'    => 'custom_attached_posts',
			'column'  => true,
			'options' => array(
				'show_thumbnails' => true,
				'filter_boxes'    => true,
				'query_args'      => array(
					'posts_per_page' => 5,
					'post_type'      => 'servicos',
				),
			),
		) );

		// Metabox Formulário de contato
		$contato = new_cmb2_box( array(
			'id'            => 'contato',
			'title'         => __( 'Formulário de contato' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			//'closed'        => true,
		) );

		$contato->add_field( array(
			'name'       => __( 'Título da seção' ),
			'id'         => 'wsg_contato_titulo',
			'type'       => 'text',
		) );
		$contato->add_field( array(
			'name'       => __( 'Texto abaixo do botão de envio' ),
			'id'         => 'wsg_contato_texto',
			'type'       => 'wysiwyg',
		) );
		$contato->add_field( array(
			'name'       => __( 'Iframe de localização do google maps' ),
			'id'         => 'wsg_contato_iframe',
			'type'       => 'textarea_code',
		) );

	$horario = new_cmb2_box( array(
			'id'            => 'wsg_horario',
			'title'         => __( 'Horário de funcionamento' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$horario->add_field( array(
			'name'       => __( 'Horário de funcionamento Segunda a Sexta' ),
			'id'         => 'wsg_horario_semana',
			'type'       => 'text',
		) );
		$horario->add_field( array(
			'name'       => __( 'Horário de funcionamento Sabado e Domingo' ),
			'id'         => 'wsg_horario_fimsemana',
			'type'       => 'text',
		) );


		//Home Empresas Parceiras

		$parceiras = new_cmb2_box( array(
			'id'            => 'parceiras',
			'title'         => __( 'Parceiras' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			//'closed'        => true,
		) );
	
		$parceiras_items = $parceiras->add_field( array(
			'id'            => 'parceiras_items',
			'type'          => 'group',
			'options'       => array(
				'group_title'   => __( 'Logo {#}' ),
				'add_button'    => __( 'Adicionar Outro Item' ),
				'remove_button' => __( 'Remover Item' ),
				'sortable'      => true,
				'closed'        => true,
			),
		) );
		$parceiras->add_group_field($parceiras_items, array(
			'name'       => __( 'Logos de parceiras' ),
			'id'         => 'wsg_parceiras_img',
			'type'       => 'file',
		) );

	$atendimentos = new_cmb2_box( array(
			'id'            => 'wsg_atendimentos',
			'title'         => __( 'Atendimentos' ),
			'object_types'  => array( 'page', ),
			'context'       => 'normal',
			'priority'      => 'high',
			'show_names'    => true,
			'closed'        => true,
		) );
		$atendimentos->add_field( array(
			'name'       => __( 'Novos Sorrisos' ),
			'id'         => 'wsg_novos_sorrisos',
			'type'       => 'text',
		) );
		$atendimentos->add_field( array(
			'name'       => __( 'Profissionais' ),
			'id'         => 'wsg_profissionais',
			'type'       => 'text',
		) );
		$atendimentos->add_field( array(
			'name'       => __( 'Clientes' ),
			'id'         => 'wsg_clientes',
			'type'       => 'text',
		) );
		$atendimentos->add_field( array(
			'name'       => __( 'Procedimentos bem Sucedidos' ),
			'id'         => 'wsg_procedimentos',
			'type'       => 'text',
		) );
		$atendimentos->add_field( array(
			'name'       => __( 'Cirurgias estéticas' ),
			'id'         => 'wsg_cirurgias',
			'type'       => 'text',
		) );

		

	}

?>