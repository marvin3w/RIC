<?php
    /*Template name: Blog */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-blog">
    <section class="header-title">
        <h1>Fique por dentro das novidades</h1>
    </section>
    <section class="blog-content">
        <div class="wrap">
            <div class="posts content-col1">

                <?php
                    $args = array(
                        'posts_per_page'	=> -1,
                        'post_type'			=> 'post'
                    );

                    // A Consulta
                    query_posts( $args );

                    // O Loop
                    while ( have_posts() ) : the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="post">
                        <figure>
                            <img src="<?php echo get_field('imagem')['url'];?>">
                        </figure>
                        <h4><?php the_title(); ?></h4>
                        <span class="date"><?php $post_date = get_the_date( 'd.m.Y' ); echo $post_date; ?></span>
                        <p><?php echo get_field('resumo');?></p>
                    </a>

                    <?php
                    endwhile;

                    // Redefinindo Consulta
                    wp_reset_query();
                ?>
                
            </div>

            <div class="contact content-col2">
                <div class="categs">
                    <h2>Categorias</h2>
                    <ul>
                        <?php wp_list_categories( array(
                            'orderby' => 'name',
                            'title_li' => ''
                        ) ); ?> 
                    </ul>
                </div>


                <h2>Dúvidas</h2>
                <?php echo do_shortcode( '[contact-form-7 id="90" title="Contato"]' ); ?>

                <div class="whats">
                    <span class="text">ou pelo whats</span>
                    <a href="#" class="btn btn-whats">
                        <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whats-ico.png" alt=""></i>
                        <span>Atendimento</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
   
</main>

<?php get_footer(); ?>