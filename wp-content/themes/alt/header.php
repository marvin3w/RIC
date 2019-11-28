<!DOCTYPE html>

<html <?php language_attributes(); ?>>

<head>

    <meta charset="<?php bloginfo('charset'); ?>">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php bloginfo('name'); ?></title>

    <link rel="icon" type="image/png" sizes="32x32" href="favicon.ico">

    <?php wp_head(); ?>

    <meta name="author" content="Altgrupo"> 

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-MN8QHC3');</script>
    <!-- End Google Tag Manager -->

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-146762221-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-146762221-1');
    </script>

</head>

<body <?php body_class(); ?>>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MN8QHC3"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <header class="header-main">
        <div class="wrap">
            <div class="block-menu">
                <div class="burg-menu toggle__menu">
                    <svg enable-background="new 0 0 24 24" height="24px" id="Layer_1" version="1.1" viewBox="0 0 24 24" width="24px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><g><g><path d="M23.244,17.009H0.75c-0.413,0-0.75,0.36-0.75,0.801v3.421C0,21.654,0.337,22,0.75,22h22.494c0.414,0,0.75-0.346,0.75-0.77    V17.81C23.994,17.369,23.658,17.009,23.244,17.009z M23.244,9.009H0.75C0.337,9.009,0,9.369,0,9.81v3.421    c0,0.424,0.337,0.769,0.75,0.769h22.494c0.414,0,0.75-0.345,0.75-0.769V9.81C23.994,9.369,23.658,9.009,23.244,9.009z     M23.244,1.009H0.75C0.337,1.009,0,1.369,0,1.81V5.23c0,0.423,0.337,0.769,0.75,0.769h22.494c0.414,0,0.75-0.346,0.75-0.769V1.81    C23.994,1.369,23.658,1.009,23.244,1.009z"/></g></g></svg>
                </div>
                <a href="<?php echo get_home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Logo">
                </a>
                <nav class="menu">
                    <?php
                        wp_nav_menu( array(
                            'theme_location' => 'header_menu',
                            'menu_class'     => 'nav',
                            'echo'           => true,
                            'fallback_cb'    => 'wp_page_menu',
                            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                            'depth'          => 0
                        ) );
                    ?>
                </nav>
            </div>
            <?php $fields_contact = get_fields(41); ?>
            <nav class="contacts-headers">
                <div class="phones">
                    <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_1']) ;?>">
                        <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-ico.png" alt=""></i> <span><?php echo $fields_contact['contatos']['telefone_1']; ?></span>
                    </a>
                    <?php if($fields_contact['contatos']['telefone_2']): ?>
                        <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_2']) ;?>">
                            <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/phone-ico.png" alt=""></i> <span><?php echo $fields_contact['contatos']['telefone_2']; ?></span>
                        </a>
                    <?php endif; ?>
                    <?php
                        if ( is_user_logged_in() ) { ?>
                    
                        <a href="<?php echo get_home_url(); ?>/area-do-consultor/">
                            <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-ico.png" alt=""></i> <span>Área do Consultor</span>
                        </a>
                    
                    <?php    
                        } else { ?>

                            <a href="<?php echo get_home_url(); ?>/wp-login.php">
                                <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/user-ico.png" alt=""></i> <span>Área do Consultor</span>
                            </a>
                    <?php 
                        }
                    ?>
                    <a href="" class="btn btn-white" data-modal="orcamento">Solicite um orçamento Gratis</a>
                </div>
            </nav>
        
        </div>
    </header>


    <div class="menu-mobile">
        <nav class="nav-mobile">
            <?php
                wp_nav_menu( array(
                    'theme_location' => 'header_menu',
                    'menu_class'     => 'nav',
                    'echo'           => true,
                    'fallback_cb'    => 'wp_page_menu',
                    'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'          => 0
                ) );
            ?>
        </nav>

        <nav class="contacts-headers-mobile">
            <div class="phones">
                <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_1']) ;?>">
                    <span><?php echo $fields_contact['contatos']['telefone_1']; ?></span>
                </a>
                <?php if($fields_contact['contatos']['telefone_2']): ?>
                    <a href="tel:<?php echo preg_replace("/[^0-9]/", "", $fields_contact['contatos']['telefone_2']) ;?>">
                        <span><?php echo $fields_contact['contatos']['telefone_2']; ?></span>
                    </a>
                <?php endif; ?>
                <?php
                    if ( is_user_logged_in() ) { ?>
                
                    <a href="<?php echo get_home_url(); ?>/area-do-consultor/"><i></i> Área do Consultor</a>
                
                <?php    
                    } else { ?>

                        <a href="<?php echo get_home_url(); ?>/wp-login.php"><i></i> Área do Consultor</a>
                <?php 
                    }
                ?>
            </div>
        </nav>

        <a class="close toggle__menu" style="cursor: pointer">
            <svg height="32" id="close" viewBox="0 0 32 32" width="32" xmlns="http://www.w3.org/2000/svg"><path d="M4 8 L8 4 L16 12 L24 4 L28 8 L20 16 L28 24 L24 28 L16 20 L8 28 L4 24 L12 16 z"/></svg>
        </a>
    </div>