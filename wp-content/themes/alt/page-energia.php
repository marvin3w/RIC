<?php
    /*Template name: Emergia Solar */
	get_header(); 
	$fields = get_fields();
?>

<main class="main-energia">
    <section class="header-title">
        <h1><?php echo $fields['titulo_de_destaque']; ?></h1>
    </section>

    <section class="infos-icons">
        <div class="wrap">
            <p class="description"><?php echo $fields['por_que']['texto']; ?></p>
            <div class="itens-infos">

                <? 
                    $informacoes = get_field('por_que')['informacoes'];
                    
                    if($informacoes)
                    {
                        foreach($informacoes as $value)
                        { 
                        ?>
                    
                            <div class="info">
                                <figure>
                                    <img src="<?php echo $value['icone']['url']; ?>">
                                </figure>
                                <h3><?php echo $value['titulo']; ?></h3>
                                <p><?php echo $value['texto']; ?></p>
                            </div>
                
                
                        <?php }
                    }
                    //  var_dump($informacoes);
                ?>
            </div>
        </div>
    </section>

    <section class="infograph colwidth">
        <div class="col colleft">
            <div class="content">
                <div class="title-section">
                    <h2><?php echo $fields['energia_solar']['titulo_1']; ?></h2>
                    <h3><?php echo $fields['energia_solar']['titulo_2']; ?></h3>
                    <p><?php echo $fields['energia_solar']['texto']; ?></p>
                </div>
                <figure>
                    <img src="<?php echo $fields['energia_solar']['grafico']['url']; ?>">
                </figure>
            </div>
        </div>
        <div class="col colright">
            <div class="content">
                <div class="title-section">
                    <h2><?php echo $fields['crescimento']['titulo_1']; ?></h2>
                    <h3><?php echo $fields['crescimento']['titulo_1']; ?></h3>
                    <p><?php echo $fields['crescimento']['texto']; ?></p>
                </div>  
                <figure>
                    <img src="<?php echo $fields['crescimento']['grafico']['url']; ?>">
                </figure>
            </div>
        </div>
    </section>

    <section class="howitworks">
        <div class="wrap">
            <div class="title-section">
                <h2><?php echo $fields['como_funciona']['titulo_1']; ?></h2>
                <h3><?php echo $fields['como_funciona']['titulo_2']; ?>?</h3>
            </div>
            <div class="cols">
                <?php echo $fields['como_funciona']['conteudo_personalizado']; ?>
            </div>
        </div>
        <?php $posts = $fields['como_funciona']['link'];
        
        if( $posts ): ?>
            <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                <?php setup_postdata($post); ?>
                
                <a href="<?php the_permalink(); ?>" class="btn callaction"><?php echo $fields['como_funciona']['texto_botao']; ?></a>
                <?php endforeach; ?>
            <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
        <?php endif; ?>
    </section>

</main>

<?php get_footer(); ?>