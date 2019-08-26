<?php
    /*Template name: Página Inicial */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-home">
    <section class="header-title painel-home">
        <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-slider.jpg);">
            <div class="wrap">
                <div class="title-section">
                    <h2>Paineis Solares</h2>
                    <h3>
                        Reduza em até 95%<br>
                        sua conta de energia<br>
                        pelos próximos<br>
                        25 anos
                    </h3>
                    <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Quero Economizar</a>
                </div>
            </div>
        </div>
        <div class="item" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-slider.jpg);">
            <div class="wrap">
                <div class="title-section">
                    <h2>Paineis Solares</h2>
                    <h3>
                        Reduza em até 95%<br>
                        sua conta de energia<br>
                        pelos próximos<br>
                        25 anos
                    </h3>
                    <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Quero Economizar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="infograph colwidth">
        <div class="col colleft">
            <div class="content">
                <div class="title-section">
                    <h2>ENERGIA SOLAR</h2>
                    <h3>Benefícios contínuos</h3>
                    <p>Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim minim 
                    veniam, quis nostrud exercitation ullamco laboris ut aliquip cosequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore 
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident, 
                    sunt in culpa qui officia deserunt mollit anim id est labo</p>
                    <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Simule Aqui</a>
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
                    <a href="#" class="btn btn-whats">
                        <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whats-ico.png" alt=""></i>
                        <span>Atendimento por Whatsapp</span>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="infos-icons icons-benefits">
        <div class="wrap">
            <div class="title-section">
                <h2>Energia Solar</h2>
                <h3>Vantagens</h3>
            </div>
            <div class="itens-infos">
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-1.png">
                    </figure>
                    <h3>Sustentável e Ambiental</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-2.png">
                    </figure>
                    <h3>Tecnologia de ponta</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-4.png">
                    </figure>
                    <h3>Economia mensal garantida</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-5.png">
                    </figure>
                    <h3>Fácil de implementar</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-3.png">
                    </figure>
                    <h3>Controle da Energia gerada</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-3.png">
                    </figure>
                    <h3>Energia em dias nublados</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-1.png">
                    </figure>
                    <h3>Sustentável e Ambiental</h3>
                </div>
            </div>
        </div>
        <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Quero Economizar</a>
    </section>

    <section class="content-steps">
        <div class="wrap">
            <h2>
                Como adquirir<br>
                O sistema de energia<br>
                Solar fotovoltaica?
            </h2>

            <div class="steps">
                <div class="step">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo1-ico.png" alt="Ícone" />
                    </figure>
                    <div class="content">
                        <h3>Passo 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        incididunt ut labore et dolore magna aliqua. Ut enim melh 
                        nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
                <div class="step">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo1-ico.png" alt="Ícone" />
                    </figure>
                    <div class="content">
                        <h3>Passo 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        incididunt ut labore et dolore magna aliqua. Ut enim melh 
                        nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
                <div class="step">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo1-ico.png" alt="Ícone" />
                    </figure>
                    <div class="content">
                        <h3>Passo 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        incididunt ut labore et dolore magna aliqua. Ut enim melh 
                        nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
                <div class="step">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/passo1-ico.png" alt="Ícone" />
                    </figure>
                    <div class="content">
                        <h3>Passo 1</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        incididunt ut labore et dolore magna aliqua. Ut enim melh 
                        nostrud exercitation ullamco laboris.</p>
                    </div>
                </div>
            </div>

            <div class="btns">
                <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Quero Economizar</a>
                <!-- <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Falar com atendente</a> -->
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
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
                <div class="project">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/project-figure.png" alt="">
                    </figure>
                    <p>
                        Lorem ipsum dolor amet consectetur 
                        incididunt ut labore et dolore magna 
                        nostrud exercitation.
                    </p>
                    <a href="#" class="btn">Ler mais</a>
                </div>
            </div>
        </div>
    </section> 

   
    <section class="content-about">
        <div class="wrap">
            <div class="col">
                <h2>
                    HÁ X ANOS NO MERCADO LEVANDO
                    ECONÔMIA PARA SEU BOLSO.
                </h2>
                <p>
                    Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim minim 
                    veniam, quis nostrud exercitation ullamco laboris ut aliquip cosequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore 
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim minim 
                    veniam, quis nostrud exercitation ullamco laboris ut aliquip cosequat. 
                    Duis aute irure dolor in reprehenderit in voluptate velit cillum dolore 
                    eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat proident, 
                    sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
            </div>
            
            <figure style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/bg-block-example.jpg);"></figure>
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
                        <span class="date"><?php $post_date = get_the_date( 'd.m.Y' ); echo $post_date; ?></span>
                        <p><?php echo get_field('resumo');?></p>
                    </a>

                    <?php
                    endwhile;

                    // Redefinindo Consulta
                    wp_reset_query();
                    ?>
            </div>
            
        </div>
        
    </section>

    <section class="partners">
        <div class="title-section">
            <h2>Parceiros</h2>
        </div>
        <div class="partners-list">
            <div class="wrap">
                <figure class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner.png" alt="Partner Name">
                </figure>
                <figure class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner.png" alt="Partner Name">
                </figure>
                <figure class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner.png" alt="Partner Name">
                </figure>
                <figure class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner.png" alt="Partner Name">
                </figure>
                <figure class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner.png" alt="Partner Name">
                </figure>
                <figure class="item">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/partner.png" alt="Partner Name">
                </figure>
            </div>
        </div>
    </section>
    <section class="map">
        <figure>
            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/map.png" alt="Mapa de localização">
        </figure>
    </section>
    <section class="news">
        <div class="wrap">
            <span class="blue">conteúdos exclusivos sobre energia sustentável?</span>
            <span class="orange">Assine nossa news</span>
            <div class="form">
                <?php echo do_shortcode( '[contact-form-7 id="39" title="News"]' ); ?>
            </div>
        </div>
    </section>

</main>

<?php get_footer(); ?>