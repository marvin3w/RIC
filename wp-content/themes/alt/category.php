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
                        <figure>
                            <img src="<?php echo get_field('imagem')['url'];?>">
                        </figure>
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
						<ul>
							<?php wp_list_categories( array(
								'orderby' => 'name',
								'title_li' => ''
							) ); ?> 
						</ul>
					</div>


					<h2>Dúvidas</h2>
					<?php echo do_shortcode( '[contact-form-7 id="90" title="Contato"]' ); ?>

					<div class="whats">
                    <span class="text">ou pelo whats</span>
                    <a href="#" class="btn btn-whats">
                        <i><img src="<?php echo get_template_directory_uri(); ?>/assets/images/whats-ico.png" alt=""></i>
                        <span>Atendimento</span>
                    </a>
                </div>
				</div>
			</div>
		</section>
	</main>
<?php get_footer(); ?>