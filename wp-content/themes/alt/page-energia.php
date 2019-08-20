<?php
    /*Template name: Emergia Solar */
	get_header(); 
	// $fields = get_fields();
?>

<main class="main-energia">
    <section class="header-title">
        <h1>Por que Energia Solar?</h1>
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
                    <p>Lorem ipsum dolor amet consectetur incididunt nostrud exercitation</p>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-2.png">
                    </figure>
                    <h3>Gere sua própria energia</h3>
                    <p>Lorem ipsum dolor amet consectetur incididunt nostrud exercitation</p>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-3.png">
                    </figure>
                    <h3>Energia solar renovável</h3>
                    <p>Lorem ipsum dolor amet consectetur incididunt nostrud exercitation</p>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-4.png">
                    </figure>
                    <h3>Vantagem<br>financeira</h3>
                    <p>Lorem ipsum dolor amet consectetur incididunt nostrud exercitation</p>
                </div>
                <div class="info">
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-info-5.png">
                    </figure>
                    <h3>Valorisa seu imóvel<br>ou empresa</h3>
                    <p>Lorem ipsum dolor amet consectetur incididunt nostrud exercitation</p>
                </div>
            </div>
        </div>
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

    <section class="howitworks">
        <div class="wrap">
            <div class="title-section">
                <h2>ENERGIA SOLAR</h2>
                <h3>Como funciona?</h3>
            </div>
            <div class="cols">
                <div class="col">
                    <div class="number">01</div>
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/figure-how-1.png">
                    </figure>
                    <p>Durante o dia os painéis produzem
                    energia para abastecer sua casa
                    ou negócio</p>
                </div>
                <div class="col col2">
                    <p>Gerando mais energia do que
                    consumindo,  esta energia éinjetada 
                    na rede de distribuilção</p>
    
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/figure-how-2.png">
                    </figure>
    
                    <div class="number">02</div>
    
                    <p>Este excedente é transformado
                    em créditos de energia para
                    o prorpietário.</p>
                </div>
                <div class="col">
                    <div class="number">03</div>
                    
                    <figure>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/figure-how-3.png">
                    </figure>
    
                    <p>Durante à noite, o imóvel utiliza a energia
                    da rede de distribuição, com os créditos
                    gerados anteriormente. Se ainda sobrar,
                    esses poderão ser utilizados em outro 
                    momento ou em outra propriedade!</p>
                </div>
            </div>
        </div>
        <a href="<?php echo get_home_url(); ?>/simule-aqui/" class="btn callaction">Simule Aqui</a>
    </section>

</main>

<?php get_footer(); ?>