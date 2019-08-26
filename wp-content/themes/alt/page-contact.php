<?php
    /*Template name: Contato */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-energia">
    <section class="header-title">
        <h1>Fale Conosco</h1>
    </section>

    <section class="section-contato">
        <figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/map-contact.png)"></figure>
        <div class="wrap">
            <div class="col">
                <h2>Contato</h2>
                <?php echo do_shortcode( '[contact-form-7 id="90" title="Contato"]' ); ?>
            </div>
            <div class="col">
                <div class="content-aling">
                    <h3>Onde Estamos</h3>
                    <p>
                        Rua Lorem Ipsum - 000 | Sala 405<br>
                        Bairro dolor sit amet<br>
                        Cep 0000-000<br>
                        Porto Alegre - RS<br>
                    </p>
    
                    <h3>Contato</h3>
                    <p>
                        51. 0000-0000<br>
                        51. 000-000-000<br>
                        contato@ric.com.br
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>