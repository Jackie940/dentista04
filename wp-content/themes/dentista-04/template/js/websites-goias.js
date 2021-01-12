$(function(){
	
	// função para funcionar o botão do menu

	jQuery('.wsg-btn_menu').click(function() {
		jQuery('.wsg-menu_principal').toggleClass("aberto")
		jQuery('.wsg-btn_menu').toggleClass("btn-fechar")
	})

	// função de funcionamento das tabs

	if (jQuery('.wsg-tabs_contents').length) {
		jQuery('.wsg-tabs_btn').each(function(index, value){
			jQuery(value).click(function(){
				var tab = jQuery(this).data('tab');
				jQuery('.wsg-tabs_contents > div').each(function(index2, value2){
					jQuery(value2).removeClass('ver');
				});
				jQuery('.wsg-tabs_contents > div[data-tab='+tab+']').addClass('ver');
				jQuery('.wsg-tabs_btn').each(function(index2, value2){
					jQuery(value2).removeClass('active');
				});
				jQuery(this).addClass('active');
			});
		});
		jQuery('.wsg-tabs_btn:eq(0)').click();
	}

	// função de funcionamento de accordion

	if (jQuery('.wsg-accordion').length) {
		jQuery('.wsg-accordion').each(function(index, value){
			jQuery(value).click(function(){
				var accordion = jQuery(this).data('accordion');
				jQuery('.wsg-accordion_content').each(function(index2, value2){
					jQuery(value2).removeClass('ver');
				});
				jQuery('.wsg-accordion_content[data-accordion='+accordion+']').addClass('ver');
				jQuery('.wsg-accordion').each(function(index2, value2){
					jQuery(value2).removeClass('active');
				});
				jQuery(this).addClass('active');
			});
		});
		jQuery('.wsg-accordion:eq(0)').click();
	}

	// função de funcionamento de modal

	if (jQuery('.wsg-modal').length) {
		jQuery('.wsg-modal_btn').each(function(index, value){
			jQuery(value).click(function(){
				var item = jQuery(this).data('modal');
				jQuery('.wsg-modal').each(function(index2, value2){
					jQuery(value2).removeClass('ver');
				});
				jQuery('.wsg-modal[data-modal='+item+']').addClass('ver');
				jQuery('.wsg-modal_btn').each(function(index2, value2){
					jQuery(value2).removeClass('active');
				});
				jQuery(this).addClass('active');
			});
		});
	}
	jQuery('.wsg-modal_btn-fechar').click(function(){
		jQuery('.wsg-modal').removeClass('ver')
	})


	// Função para filtrar items na wsg-galeria

	jQuery('.wsg-galeria_btn-todos').click(function(){
		jQuery('.wsg-galeria_item').addClass('todos')
		jQuery('.wsg-galeria_btn').removeClass('active')
		jQuery('.wsg-galeria_btn-todos').addClass('active')
	})

	if (jQuery('.wsg-galeria').length) {
		jQuery('.wsg-galeria_btn').each(function(index, value){
			jQuery(value).click(function(){
				var item = jQuery(this).data('galeria');
				jQuery('.wsg-galeria_item').each(function(index2, value2){
					jQuery(value2).removeClass('ver').removeClass('todos');
				});
				jQuery('.wsg-galeria_item[data-galeria*='+item+']').addClass('ver');
				jQuery('.wsg-galeria_btn').each(function(index2, value2){
					jQuery(value2).removeClass('active');
				});
				jQuery(this).addClass('active');
				jQuery('.wsg-galeria_btn-todos').removeClass('active');
			});
		});
	}

	jQuery('.wsg-galeria_btn-todos').click();

})