<?php
	$id_logo = get_page_by_path( 'configuracoes-da-logo', OBJECT, 'gerais' )->ID;
    $id_home = get_page_by_path( 'home', OBJECT, 'page' )->ID;
    $id_endereco = get_page_by_path( 'endereco', OBJECT, 'contatos' )->ID;
	$id_email = get_page_by_path( 'email', OBJECT, 'contatos' )->ID;
	$id_telefones = get_page_by_path( 'telefones', OBJECT, 'contatos' )->ID;
?>


<footer class="wsg-footer">
    <div class="wsg-footer_top">
        <div class="wsg-container">
            <div class="wsg-flex">
                <div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
                    <a href="index.html" class="wsg-logo">
                    <figure>
                        <?php
                            $wsg_logo_footer_img_id = get_post_meta( $id_logo, 'wsg_logo_footer_img_id', true );
                            echo getImageThumb($wsg_logo_footer_img_id, 'full');
                        ?>
                    </figure></a>
                    <p><?php echo get_post_meta($id_home, 'wsg_sobre_conteudo', true); ?></p>
                    <ul class="wsg-midias-sociais wsg-lista-inline">
                        <li><a href="" target="_blank" class="flaticon-google-plus"></a></li>
                        <li><a href="" target="_blank" class="flaticon-instagram"></a></li>
                        <li><a href="" target="_blank" class="flaticon-facebook"></a></li>
                    </ul>
                </div>
                <div class="wsg-box_6 wsg-box_cp-12 wsg-box_cl-12 wsg-box_tp-12 wsg-box_tl-6">
                    <h3>Contate-Nos</h3>

                    <div class="wsg-flex">
                        <span class="flaticon-phone-2"></span>
                        <div>
                            <h4>Ligue para nós</h4>
                            <?php
                            $telefones = get_post_meta( $id_telefones, 'wsg_telefone_items', true );
                            foreach ($telefones as $locais => $local) {
                            ?>
                                <p><a href="" target="_blank"><?php echo $local['wsg_telefone_nmr']; ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="wsg-flex">
                        <span class="flaticon-mail-2"></span>
                        <div>
                            <h4>Envie-nos uma mensagem</h4>
                            <?php
                            $emails = get_post_meta( $id_email, 'wsg_emails', true );
                            foreach ($emails as $locais => $email) {
                            ?>
                                <p><a href="" target="_blank"><?php echo $email; ?></a></p>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="wsg-flex">
                        <span class="flaticon-local-2"></span>
                        <div>
                            <p><?php echo get_post_meta($id_endereco, 'wsg_endereco', true); ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wsg-footer_bottom">
        <div class="wsg-container">
            <div class="wsg-cto">
                <p>Copyright 2020 todos os direitos reservados</p>
            </div>
        </div>
    </div>
</footer>

</body>
</html>
