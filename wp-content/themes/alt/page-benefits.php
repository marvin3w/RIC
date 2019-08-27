<?php
    /*Template name: Vantagens */
	get_header(); 
	$fields = get_fields();
?>

<main class="main-energia">
    <section class="header-title">
        <h1><?php echo $fields['titulo_de_destaque']; ?></h1>
    </section>

    <section class="infos-icons icons-benefits">
        <div class="wrap">
            <p class="description"><?php echo $fields['vantagens']['texto']; ?></p>
            <div class="itens-infos">

                <? 
                    $vantagens = get_field('vantagens')['informacoes'];
                    
                    if($vantagens)
                    {
                        foreach($vantagens as $value)
                        { 
                        ?>
                    
                        <div class="info">
                            <figure>
                                <img src="<?php echo $value['icone']['url']; ?>">
                            </figure>
                            <h3><?php echo $value['titulo']; ?></h3>
                        </div>
                
                
                        <?php }
                    }
                    //  var_dump($vantagens);
                ?>
                
            </div>
        </div>
        <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Simule Aqui</a>
    </section>

    <?php
        $fieldsenergy = get_fields(14);
        // var_dump($fieldsenergy);
    ?>

    <section class="infograph colwidth">
        <div class="col colleft">
            <div class="content">
                <div class="title-section">
                    <h2><?php echo $fieldsenergy['energia_solar']['titulo_1']; ?></h2>
                    <h3><?php echo $fieldsenergy['energia_solar']['titulo_2']; ?></h3>
                    <p><?php echo $fieldsenergy['energia_solar']['texto']; ?></p>
                </div>
                <figure>
                    <img src="<?php echo $fieldsenergy['energia_solar']['grafico']['url']; ?>">
                </figure>
            </div>
        </div>
        <div class="col colright">
            <div class="content">
                <div class="title-section">
                    <h2><?php echo $fieldsenergy['crescimento']['titulo_1']; ?></h2>
                    <h3><?php echo $fieldsenergy['crescimento']['titulo_1']; ?></h3>
                    <p><?php echo $fieldsenergy['crescimento']['texto']; ?></p>
                </div>  
                <figure>
                    <img src="<?php echo $fieldsenergy['crescimento']['grafico']['url']; ?>">
                </figure>
            </div>
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

</main>

<?php get_footer(); ?>