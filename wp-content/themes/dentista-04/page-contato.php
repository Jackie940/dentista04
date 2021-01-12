<?php
	get_header(); 
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
	$id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
?>


<body>


   <section class="wsg-breadcrumbs">
	   <div class="wsg-container">
		   <div class="wsg-flex">
			   <h1>Contato</h1>
			   <p>Contato - <a href="index.html">Home</a></p>
		   </div>
	   </div>
   </section>

   <section class="wsg-contato-01">
	   <div class="wsg-container">
		   <div class="wsg-cto">
			   <div class="wsg-flex">
				   <div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-4 wsg-box_tp-4 wsg-box_tl-4">
					   <span class="flaticon-local-2"></span>
					   <h4>Localização</h4>
					   <p><?php echo get_post_meta($id_endereco, 'wsg_endereco', true); ?></p>
				   </div>
				   <div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-4 wsg-box_tp-4 wsg-box_tl-4">
					   <span class="flaticon-phone-2"></span>
					   <h4>Telefone</h4>
					   <?php
            				$telefones = get_post_meta( $id_telefones, 'wsg_telefone_items', true );
            				foreach ($telefones as $locais => $local) {
        				?>
					   <p><a href="" target="_blank"><?php echo $local['wsg_telefone_nmr']; ?></a></p>
					   <?php } ?>
				   </div>
				   <div class="wsg-box_4 wsg-box_cp-12 wsg-box_cl-4 wsg-box_tp-4 wsg-box_tl-4">
					   <span class="flaticon-mail-2"></span>
					   <h4>Email</h4>
					   <?php
            				$emails = get_post_meta( $id_email, 'wsg_emails', true );
            				foreach ($emails as $locais => $email) {
        				?>
					   <p><a href="" target="_blank"><?php echo $email; ?></a></p>
					   <?php } ?>
				   </div>
			   </div>
		   </div>
	   </div>
   </section>

   <section class="wsg-contato-02">
	   <div class="wsg-container">
		   <div class="wsg-flex">
			   <div class="wsg-box_5 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-5">
				   <h2>Envie sua mensagem</h2>
				   <form action="">
					   <h5>Name</h5>
					   <input type="text">
					   <h5>Email</h5>
					   <input type="email">
					   <h5>Menssagem</h5>
					   <textarea></textarea>
					   <button class="wsg-btn wsg-btn-1"><span>Enviar mensagem</span></a>
				   </form>
			   </div>
			   <div class="wsg-box_7 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-7">
				   <div class="wsg-mapa">
					   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3821.394206685503!2d-49.25908858503761!3d-16.707171288489555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935ef11b99720417%3A0x21e18bb4e614c2e1!2sSt.+Marista!5e0!3m2!1spt-BR!2sbr!4v1522660085211" width="1920" height="450" style="border:0" allowfullscreen></iframe>
				   </div>
			   </div>
		   </div>
	   </div>
   </section>


</body>
</html>

<?php get_footer(); ?>
