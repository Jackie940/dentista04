<?php if(is_active_sidebar( 'sidebar_blog' )){ ?>
	<aside class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-4">
		<?php 
 			dynamic_sidebar( 'sidebar_blog' ); 
 		?>
 	</aside>
<?php }else{ echo "Você ainda não colocou nenhum widget";}?>