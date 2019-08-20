<?php
    /*Template name: Vantagens */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-energia">
    <section class="header-title">
        <h1>Vantagens</h1>
    </section>

    <section class="infos-icons">
        <div class="wrap">
            <p class="description">Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim minim veniam, quis nostrud exercitation ullamco laboris ut aliquip cosequat duis aute irure dolor in reprehenderit in voluptate velit cillum dolore </p>
            <div class="itens-infos">
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-1.png">
                    </figure>
                    <h3>ENERGIA SOLAR SUSTENTÁVEL</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-2.png">
                    </figure>
                    <h3>Gere sua própria energia</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-3.png">
                    </figure>
                    <h3>Energia solar renovável</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-4.png">
                    </figure>
                    <h3>Vantagem<br>financeira</h3>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-5.png">
                    </figure>
                    <h3>Valorisa seu imóvel<br>ou empresa</h3>
                </div>
            </div>
        </div>
        <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Simule Aqui</a>
    </section>

    <section class="infograph colwidth">
        <div class="col colleft">
            <div class="content">
                <div class="title-section">
                    <h2>ENERGIA SOLAR</h2>
                    <h3>Liberdade Energética</h3>
                    <p>Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph1.png">
                </figure>
            </div>
        </div>
        <div class="col colright">
            <div class="content">
                <div class="title-section">
                    <h2>CRESCIMENTO</h2>
                    <h3>ADESÃO EM MASSA</h3>
                    <p>Lorem ipsum dolor sit amet, conectetur adipiscing elit, sed eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>  
                <figure>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/graph2.png">
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

</main>

<?php get_footer(); ?>