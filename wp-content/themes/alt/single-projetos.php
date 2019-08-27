<?php
    get_header(); 
    $fields = get_fields();
?>

<main class="main-about">
    <section class="header-title">
        <h1><?php the_title(); ?></h1>
    </section>
    <section class="content-about">
        <div class="wrap">
            <div class="col">
                <h2>
                    <?php echo $fields['projeto']['titulo']; ?>
                </h2>
                <?php echo $fields['projeto']['texto']; ?>
            </div>
            
            <figure style="background-image:url(<?php echo $fields['projeto']['imagem']['url']; ?>);"></figure>
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
                    'post_type'			=> 'projetos'
                ));

                if( $posts ): ?>
                    
                    <?php foreach( $posts as $post ): 
                        
                        setup_postdata( $post );

                        $imagem = get_field('conteudo_da_lista')['thumb'];
                        $resumo = wp_trim_words( get_field('conteudo_da_lista' )['resumo'], $num_words = 12, $more = '...' );
                        
                        ?>
                        
                            <div class="project">
                                <figure>
                                    <img src="<?php echo $imagem['url']; ?>" alt="<?php echo $imagem['alt']; ?>">
                                </figure>
                                <p>
                                    <?php echo $resumo; ?>
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