<?php
    /*Template name: Simule Aqui */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-simulation">
    <section class="header-title">
        <h1>Simulador Online</h1>
    </section>
    <section class="simulation-section">
        <div class="wrap">
            <?php echo do_shortcode( '[contact-form-7 id="23" title="Simulação"]' ); ?>
        </div>
    </section>
    <section class="indication-section">
        <div class="wrap">
            <div class="title-section">
                <h2>INDIQUE</h2>
                <h3>GANHE DESCONTOS PARA INDICAR!</h3>
                <p>Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris ut aliquip cosequat duis aute irure dolor in reprehenderit in voluptate velit cillum dolore </p>
            </div>
            <?php echo do_shortcode( '[contact-form-7 id="24" title="Indicação"]' ); ?>
        </div>
    </section>
</main>

<?php get_footer(); ?>