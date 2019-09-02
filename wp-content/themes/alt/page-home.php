<?php
    /*Template name: Página Inicial */
	get_header(); 
	$fields = get_fields();
?>

<main class="main-home">
    <section class="header-title painel-home">
        <? 
            $banner = $fields['banner'];
            
            if($banner)
            {
                foreach($banner as $value)
                { 
                ?>
            
                
                <div class="item" style="background-image:url(<?php echo $value['imagem']['url']; ?>);">
                    <div class="wrap">
                        <div class="title-section">
                            <h2><?php echo $value['titulo']; ?></h2>
                            <h3>
                                <?php echo $value['texto']; ?>
                            </h3>
                            
                            <?php $posts = $value['link'];
                            if( $posts ): ?>
                                <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                                    <?php setup_postdata($post); ?>
                                    
                                    <a href="<?php the_permalink(); ?>" class="btn callaction"><?php echo $value['texto_do_botao']; ?></a>

                                    <?php endforeach; ?>
                                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
        
        
                <?php }
            }
            //  var_dump($banner);
        ?>
        
    </section>

    <section class="infograph colwidth sectionfirst">
        <div class="col colleft">
            <div class="content">
                <div class="title-section firstsection">
                    <h2><?php echo $fields['chamada']['titulo_1']; ?></h2>
                    <h3><?php echo $fields['chamada']['titulo_2']; ?></h3>
                    <p><?php echo $fields['chamada']['texto']; ?></p>
        
                    <?php $posts = $value['link'];
                    if( $posts ): ?>
                        <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                            <?php setup_postdata($post); ?>
                            
                            <a href="<?php the_permalink(); ?>" class="btn callaction"><?php echo $value['texto_do_botao']; ?></a>

                            <?php endforeach; ?>
                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="col colright">
            <div class="content form-contact-home">
                <div class="title-section">
                    <h2>Fale Conosco</h2>
                    <h3>Estou interessado</h3>
                </div>
                
                <?php echo do_shortcode( '[contact-form-7 id="40" title="Contato"]' ); ?>  
                
                <div class="whats">
                    <span class="text">ou pelo whats</span>
                    <a href="https://wa.me/<?php echo preg_replace("/[^0-9]/", "", get_field('contatos', 41)['telefone_2']); ?>?text=Olá" class="btn btn-whats">
                        <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whats-ico.png" alt=""></i>
                        <span>Atendimento por Whatsapp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    
    <?php $fields_benefits = get_fields(16); ?>
    <section class="infos-icons icons-benefits">
        <div class="wrap">
            <div class="title-section">
                <h2>Energia Solar</h2>
                <h3>Vantagens</h3>
            </div>
            <div class="itens-infos">

                <? 
                    $vantagens = $fields_benefits['vantagens']['informacoes'];
                    
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
        <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Quero Economizar</a>
    </section>

    <section class="content-steps">
        <div class="wrap">
            <h2>
                <?php echo $fields['como_adquirir']['titulo']; ?>
            </h2>

            <div class="steps">
                <? 
                    $passos = $fields['como_adquirir']['passos'];
                    
                    if($passos)
                    {
                        foreach($passos as $value)
                        { 
                        ?>
             
                        <div class="step">
                            <figure>
                                <img src="<?php echo $value['icone']['url']; ?>" alt="Ícone" />
                            </figure>
                            <div class="content">
                                <h3><?php echo $value['titulo']; ?></h3>
                                <p><?php echo $value['texto']; ?></p>
                            </div>
                        </div>
                
                        <?php }
                    }
                    //  var_dump($passos);
                ?>
                

            <div class="btns">
                <?php 
                // $posts = $fields['como_adquirir']['link'];
                $posts = null;
                if( $posts ): ?>
                    <?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
                        <?php setup_postdata($post); ?>
                        
                         <a href="<?php the_permalink(); ?>" class="btn callaction"><?php echo $fields['como_adquirir']['texto_do_botao']; ?></a>

                        <?php endforeach; ?>
                    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php endif; ?>
                <div class="callaction">
                    <a href="" class="btn" data-modal="orcamento">Quero adquirir</a>
                    <a href="https://wa.me/<?php echo preg_replace("/[^0-9]/", "", get_field('contatos', 41)['telefone_2']); ?>?text=Olá" class="btn" target="_blank">Falar com atendente</a>
                </div>
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
    </section>

    
    <section class="content-about content-facil">
        <div class="wrap">
            <figure style="background-image:url(<?php echo $fields['facil']['imagem']['url']; ?>);"></figure>
            
            <div class="col">
                <!-- <h2>
                    <?php echo $fields['facil']['titulo']; ?>
                </h2> -->
                <div class="title-section">
                    <h2><?php echo $fields['facil']['titulo_pequeno']; ?></h2>
                    <h3><?php echo $fields['facil']['titulo']; ?></h3>
                </div>
                <?php echo $fields['facil']['descricao']; ?>
            </div>
            
        </div>
    </section>  

    <section class="section-blog">
        <div class="wrap">
            <div class="title-section">
                <h2>Blog</h2>
                <h3>Veja o que a mídia fala</h3>
                <a href="<?php echo get_home_url(); ?>/blog/" class="btn callaction">Leia mais</a>
            </div>
            <div class="slick">

                <?php
                    $args = array(
                        'posts_per_page'	=> 12,
                        'category_name' => 'na-midia',
                        'post_type'			=> 'post'
                    );
                    
                    $index = 0;

                    // A Consulta
                    query_posts( $args );

                    // O Loop
                    while ( have_posts() ) : the_post(); ?>

                    <a href="<?php the_permalink(); ?>" class="post <?php echo ($index == 0) ? 'first' : '' ;?>">
                        <?php if($index == 0){ ?>
                            <figure style="background-image: url(<?php echo get_field('imagem')['url'];?>);">
                                <!-- <img src="<?php // echo get_field('imagem')['url'];?>"> -->
                            </figure>    
                        <?php  } else { ?>
                            <figure style="background-image: url(<?php echo get_field('imagem')['url'];?>);">
                                <!-- <img src="<?php // echo get_field('imagem')['url'];?>"> -->
                            </figure>    
                        <?php  } ?>
                        <div class="text">
                            <span class="date"><?php $post_date = get_the_date( 'd.m.Y' ); echo $post_date; ?></span>
                            <p><?php echo get_field('resumo');?></p>
                        </div>
                    </a>

                    <?php
                    $index++;
                    endwhile;

                    // Redefinindo Consulta
                    wp_reset_query();
                    ?>
            </div>
            
        </div>
        
    </section>

    <section class="infograph colwidth videoquotes">
        <div class="col colleft">
            <div class="content">
                <div class="title-section firstsection">
                    <h2><?php echo $fields['depoimentos']['titulo_1']; ?></h2>
                    <h3><?php echo $fields['depoimentos']['titulo_2']; ?></h3>
                </div>

                <div class="quotes">
                    <?php if($fields['depoimentos']['depoimento_1']['id_do_video']){?>
                        <a href="#" class="quote video" data-videoid="<?php echo $fields['depoimentos']['depoimento_1']['id_do_video'];?>">
                    <?php } else {  ?>
                        <a href="<?php echo $fields['depoimentos']['depoimento_1']['id_do_video'];?>" class="quote">
                    <?php }  ?>
                        <figure>
                            <img src="<?php echo $fields['depoimentos']['depoimento_1']['imagem']; ?>" alt="">
                        </figure>
                        <p>
                            <?php echo $fields['depoimentos']['depoimento_1']['texto']; ?>
                        </p>
                    </a>
                    <?php if($fields['depoimentos']['depoimento_2']['id_do_video']){?>
                        <a href="#" class="quote video" data-videoid="<?php echo $fields['depoimentos']['depoimento_2']['id_do_video'];?>">
                    <?php } else {  ?>
                        <a href="<?php echo $fields['depoimentos']['depoimento_2']['id_do_video'];?>" class="quote">
                    <?php }  ?>
                        <figure>
                            <img src="<?php echo $fields['depoimentos']['depoimento_2']['imagem']; ?>" alt="">
                        </figure>
                        <p>
                            <?php echo $fields['depoimentos']['depoimento_2']['texto']; ?>
                        </p>
                    </a>
                    
                </div>
                <a href="" class="btn" data-modal="depoimento">Deixe seu depoimento</a>
            </div>
        </div>
        <div class="col colright">
            <div class="content form-contact-home">
                <div class="title-section">
                    <h2><?php echo $fields['videos']['titulo_1']; ?></h2>
                    <h3><?php echo $fields['videos']['titulo_2']; ?></h3>
                </div>

                <div class="videos">
                    
                    <a href="#" class="quote video" data-videoid="<?php echo $fields['videos']['video_1']['id_do_video'];?>">
                        <figure>
                            <img src="<?php echo $fields['videos']['video_1']['imagem']; ?>" alt="">
                        </figure>
                        <p>
                            <?php echo $fields['videos']['video_1']['texto']; ?>
                        </p>
                    </a>
                    <a href="#" class="quote video" data-videoid="<?php echo $fields['videos']['video_2']['id_do_video'];?>">
                        <figure>
                            <img src="<?php echo $fields['videos']['video_2']['imagem']; ?>" alt="">
                        </figure>
                        <p>
                            <?php echo $fields['videos']['video_2']['texto']; ?>
                        </p>
                    </a>
                    
                </div>

                <a href="<?php echo $fields['videos']['link_do_canal']; ?>" class="btn" target="_blank">Ver todos os vídeos</a>
            </div>
        </div>
    </section>

    <section class="partners">
        <div class="title-section">
            <h2>Parceiros</h2>
        </div>
        <div class="partners-list">
            <div class="wrap">
                <? 
                    $parceiros = $fields['parceiros'];
                    
                    if($parceiros)
                    {
                        foreach($parceiros as $value)
                        { 
                        ?>
             
                        <figure class="item">
                            <img src="<?php echo $value['imagem']['url']; ?>" alt="<?php echo $value['nome']; ?>">
                        </figure>
                
                        <?php }
                    }
                ?>
            </div>
        </div>
    </section>
    
    
    <section class="map">
        <a href="<?php echo get_field('localizacao_mapa', 41)['link_localizacao_google_maps']; ?>" target="_blank">
            <figure>
                <img src="<?php echo get_field('localizacao_mapa', 41)['imagem_home']['url']; ?>" alt="Mapa de localização">
            </figure>
        </a>
    </section>
    

</main>

<?php get_footer(); ?>