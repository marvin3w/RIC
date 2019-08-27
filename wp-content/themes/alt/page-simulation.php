<?php
    /*Template name: Simule Aqui */
	get_header(); 
	$fields = get_fields();
?>

<main class="main-simulation">
    <section class="header-title">
        <h1><?php echo $fields['titulo_de_destaque']; ?></h1>
    </section>
    <section class="simulation-section">
        <div class="wrap">
            <?php echo do_shortcode( '[contact-form-7 id="23" title="Simulação"]' ); ?>
        </div>
    </section>
    <section class="indication-section">
        <div class="wrap">
            <div class="title-section">
                <h2><?php echo $fields['indique']['titulo_1']; ?></h2>
                <h3><?php echo $fields['indique']['titulo_2']; ?></h3>
                <p><?php echo $fields['indique']['texto']; ?></p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="24" title="Indicação"]' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>