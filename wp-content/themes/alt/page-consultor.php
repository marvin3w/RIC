<?php
    /*Template name: Área do Consultor */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-simulation">
    <section class="header-title">
        <h1>Área do Consultor</h1>
    </section>
    <section class="consultor-area">
    <?php
        if ( is_user_logged_in() ) {
            echo 'Welcome, registered user!';
        } else {
            echo 'Welcome, visitor!';
        }
    ?>
    </section>
</main>

<?php get_footer(); ?>