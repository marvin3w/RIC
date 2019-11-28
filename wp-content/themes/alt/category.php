<?php 
  /*Template name: Blog categ */
  get_header(); 
?>
	<main class="page-content main-blog">
		<section class="header-title">
            <?php 
                if ( have_posts() ) : ?>
                
            <h1>Categoria: <?php echo single_cat_title(); ?></h1>
		</section>
		<section class="blog-content">
			<div class="wrap">
				<div class="posts content-col1">
					
                <?php
                    // The Loop
                    while ( have_posts() ) : the_post(); ?>
                    
					<a href="<?php the_permalink(); ?>" class="post">
                        <figure style="background-image:url(<?php echo get_field('imagem')['url'];?>);"></figure>
                        <h4><?php the_title(); ?></h4>
                        <span class="date"><?php $post_date = get_the_date( 'd.m.Y' ); echo $post_date; ?></span>
                        <p><?php echo get_field('resumo');?></p>
                    </a>
                    
                    <?php endwhile; 
                    
                    else: ?>
                    <p>Não, há postagens para essa categoria.</p>
                    
                    
                <?php endif; ?>

				</div>

				<div class="contact content-col2">
					<div class="categs">
						<h2>Categorias</h2>
						<?php
									wp_nav_menu( array(
											'theme_location' => 'categories_menu',
											'menu_class'     => 'nav',
											'echo'           => true,
											'fallback_cb'    => 'wp_page_menu',
											'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
											'depth'          => 0
									) );
							?>
					</div>


					<h2>Dúvidas</h2>
					<?php echo do_shortcode( '[contact-form-7 id="90" title="Contato"]' ); ?>

					<div class="whats">
                    <span class="text">ou pelo whats</span>
                    <a href="https://wa.me/<?php echo preg_replace("/[^0-9]/", "", get_field('contatos', 41)['telefone_2']); ?>?text=Olá" class="btn btn-whats">
                        <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whats-ico.png" alt=""></i>
                        <span>Atendimento</span>
                    </a>
                </div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>