<?php
    /*Template name: Contato */
	get_header(); 
	$fields = get_fields();
?>

<main class="main-energia">
    <section class="header-title">
        <h1><?php echo $fields['titulo_de_destaque']; ?></h1>
    </section>

    <section class="section-contato">
        <figure style="background-image:url(<?php echo $fields['localizacao_mapa']['imagem_pagina_de_contato']['url']; ?>)"></figure>
        <div class="wrap">
            <div class="col">
                <h2>Contato</h2>
                <?php echo do_shortcode( '[contact-form-7 id="90" title="Contato"]' ); ?>
            </div>
            <div class="col">
                <div class="content-aling">
                    <h3>Onde Estamos</h3>
                    <p>
                        <? 
                            $endereco = $fields['onde_estamos'];
                            
                            if($endereco)
                            {
                                foreach($endereco as $value)
                                { 
                                ?>
                            
                                    <?php echo $value['linha']; ?><br>

                                <?php }
                            }
                            //  var_dump($endereco);
                        ?>
                    </p>
    
                    <h3>Contato</h3>
                    <p>
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields['contatos']['telefone_1']) ;?>"><?php echo $fields['contatos']['telefone_1']; ?></a> <br>
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields['contatos']['telefone_2']) ;?>"><?php echo $fields['contatos']['telefone_2']; ?></a> <br>
                        <a href="mailto:<?php echo $fields['contatos']['email']; ?>"><?php echo $fields['contatos']['email']; ?></a>
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>