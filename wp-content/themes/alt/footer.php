    <section class="menufooter">
        <div class="wrap">
            <a href="<?php echo get_home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
            </a>
            <nav class="menu">
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'footer_menu',
                        'menu_class'     => 'nav',
                        'echo'           => true,
                        'fallback_cb'    => 'wp_page_menu',
                        'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                        'depth'          => 0
                    ) );
                ?>
            </nav>   
        </div>
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
    <!-- Footer -->
    <?php $fields_contact = get_fields(41); ?>
    <footer class="site-footer">
        <div class="wrap">
            <div class="col">
                <h6 class="title-footer">Onde Estamos</h6>
                <ul class="list-footer">
                <?php
                
                        
                    $endereco = $fields_contact['onde_estamos'];
                    
                    if($endereco)
                    {
                        foreach($endereco as $value)
                        { 
                        ?>
                    
                            <li><?php echo $value['linha']; ?><li>

                        <?php }
                    }
                    //  var_dump($endereco);
                ?>
                </ul>
            </div>
            <div class="col">
                <h6 class="title-footer">Contatos</h6>
                <ul class="list-footer list-footer--no-margin">
                    <li>
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_1']) ;?>">
                            <?php echo $fields_contact['contatos']['telefone_1']; ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_2']) ;?>" target="_blank">
                            <?php echo $fields_contact['contatos']['telefone_2']; ?>
                        </a>
                    </li>
                    <li><a href="mailto:coworking@intermetrocoworking.com.br">contato@ric.com.br</a></li>
                </ul>
            </div>
            <div class="col">
                <a href="#" class="btn" data-modal="orcamento">Quero uma proposta</a>
            </div>
            <div class="col">
                <ul class="flex socials">
                    <li>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/facebook-ico.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/instagram-ico.png" alt="">
                        </a>
                    </li>
                    <li>
                        <a href="#" target="_blank">
                            <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/youtube-ico.png" alt="">
                        </a>
                    </li>
                </ul>
            
            </div>
            <div class="col">
                <span class="rights">© COPYRIGHT 2019</span>
                <a href="http://www.altgrupo.com.br/" target="_blank" class="madeby">
                    <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/logo-alt.png" alt="Logo Altgrupo">
                    <!-- <span>Alt Grupo - Desenvolvimento de Sites</span> -->
                </a>
            </div>
        </div>
    </footer>

    <div class="modal modalvideo">
        <div class="overlay"></div>
        <div class="content">
            <i class="close">
                <svg height="18" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M38 12.83l-2.83-2.83-11.17 11.17-11.17-11.17-2.83 2.83 11.17 11.17-11.17 11.17 2.83 2.83 11.17-11.17 11.17 11.17 2.83-2.83-11.17-11.17z"/><path d="M0 0h48v48h-48z" fill="none"/></svg>
            </i>
            <iframe src="" width="100%" height="355" frameborder="0"></iframe>
        </div>
    </div>

    <div class="modal modalimage">
        <div class="overlay"></div>
        <div class="content">
            <i class="close">
            <svg height="18" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M38 12.83l-2.83-2.83-11.17 11.17-11.17-11.17-2.83 2.83 11.17 11.17-11.17 11.17 2.83 2.83 11.17-11.17 11.17 11.17 2.83-2.83-11.17-11.17z"/><path d="M0 0h48v48h-48z" fill="none"/></svg>
            </i>
            <figure>
                <img src="" />
            </figure>
        </div>
    </div>

    <div class="modal modal-orcamento">
      <div class="overlay"></div>
      <div class="content">
        <i class="close">
          <svg height="18" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M38 12.83l-2.83-2.83-11.17 11.17-11.17-11.17-2.83 2.83 11.17 11.17-11.17 11.17 2.83 2.83 11.17-11.17 11.17 11.17 2.83-2.83-11.17-11.17z"/><path d="M0 0h48v48h-48z" fill="none"/></svg>
        </i>
        <h3>
          Orçamento
        </h3>
        <p class="description">
          Deixe seu contato que entramos em contato para mais informações.
        </p>
        <div class="form-agenda form-fale">
          <?php echo do_shortcode( '[contact-form-7 id="88" title="Orçamento"]' ); ?>
        </div>
      </div>
    </div>

    <div class="modal modal-depoimento">
      <div class="overlay"></div>
      <div class="content">
        <i class="close">
          <svg height="18" viewBox="0 0 48 48" width="48" xmlns="http://www.w3.org/2000/svg"><path d="M38 12.83l-2.83-2.83-11.17 11.17-11.17-11.17-2.83 2.83 11.17 11.17-11.17 11.17 2.83 2.83 11.17-11.17 11.17 11.17 2.83-2.83-11.17-11.17z"/><path d="M0 0h48v48h-48z" fill="none"/></svg>
        </i>
        <h3>
          Depoimento
        </h3>
        <p class="description">
          Deixe seu depoimento para nós.
        </p>
        <div class="form-agenda form-fale">
          <?php echo do_shortcode( '[contact-form-7 id="373" title="Depoimento"]' ); ?>
        </div>
      </div>
    </div>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <a href="https://wa.me/<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_2']); ?>?text=Olá" style="position:fixed;width:60px;height:60px;bottom:40px;right:40px;background-color:#25d366;color:#FFF;border-radius:50px;text-align:center;font-size:30px;box-shadow: 1px 1px 2px #888; z-index:1000;background-image: -moz-linear-gradient( 90deg, rgb(38,179,61) 0%, rgb(91,211,102) 100%);background-image: -webkit-linear-gradient( 90deg, rgb(38,179,61) 0%, rgb(91,211,102) 100%); background-image: -ms-linear-gradient( 90deg, rgb(38,179,61) 0%, rgb(91,211,102) 100%); box-shadow: 0px 0px 20px 0px rgba(0, 1, 1, 0.2);" class="btn-fixed-whats" target="_blank">
        <i style="margin-top:16px" class="fa fa-whatsapp"></i>
    </a>
 


<?php wp_footer(); ?>

<script>
    document.addEventListener( 'wpcf7mailsent', function( event ) {
        if( '40' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-contato' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }else if( '24' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-indicacao' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }else if( '39' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-news' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }else if( '88' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-orcamento' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }else if( '87' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-representante' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }else if( '86' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-sejarepresentante' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }else if( '23' == event.detail.contactFormId ) {
            dataLayer.push({ 'event' : 'send-form-simulacao' });
            fbq('track', 'Lead');
            window._fbq.push(['track', 'Formulário Enviado', {'value': 'Formulário Enviado'}]);
        }
    }, false );

    $('body').on('click', '.btn-whats', function(){
        dataLayer.push({ 'event' : 'click-whats' });
    })

    $('body').on('click', '.btn-fixed-whats', function(){
        dataLayer.push({ 'event' : 'click-whats' });
    })
</script>