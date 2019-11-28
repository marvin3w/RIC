<?php
    /*Template name: Quem Somos */
	get_header(); 
	$fields = get_fields();
?>

<main class="main-about">
    <section class="header-title">
        <h1><?php echo $fields['titulo_de_destaque']; ?></h1>
    </section>
    <section class="content-about">
        <div class="wrap">
            <div class="col">
                <h2>
                    <?php echo $fields['sobre']['titulo']; ?>
                </h2>
                <?php echo $fields['sobre']['texto']; ?>
            </div>
            
            <figure style="background-image:url(<?php echo $fields['sobre']['imagem']['url']; ?>);"></figure>
        </div>
    </section>
    <section class="projects">
        <div class="wrap">
            <div class="title-section">
                <h2>Projetos</h2>
                <h3>Projetos Executados</h3>
            </div>

            <div class="itens">

                <?php $posts = get_posts(array(
                    'posts_per_page'	=> -1,
                    'post_type'      => 'post',
	                'post_status'    => 'publish',
                    'category_name' => 'Projetos'
                ));

                if( $posts ): ?>
                    
                    <?php foreach( $posts as $post ): 
                        
                        setup_postdata( $post );

                        $imagem = get_field('imagem');
                        $resumo = substr(get_field('resumo'), 0, 85);
                        
                        ?>
                        
                            <div class="project">
                                <figure>
                                    <img src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt']; ?>">
                                </figure>
                                <p>
                                    <?php echo $resumo; ?>...
                                </p>
                                <a href="<?php the_permalink(); ?>" class="btn">Ler mais</a>
                            </div>
            
                    <?php endforeach; ?>
                
                <?php wp_reset_postdata(); ?>

            <?php endif; ?>
               
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>