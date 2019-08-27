<?php
    /*Template name: Área do Consultor */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-blog">
    <section class="header-title">
        <h1>Área do Consultor</h1>
    </section>
    <section class="consultor-area">
    <?php
        if ( is_user_logged_in() ) {
    ?> 
        
        <section class="blog-content">
			<div class="wrap">
                <article class="content-blog">
                    <div class="wrap">
                    <?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile; endif; ?>	
                    </div>
                </div>
			</div>
		</section>

    <?php     
        } else {
            echo 'Welcome, visitor!';
        }
    ?>
    </section>
</main>

<?php get_footer(); ?>