<?php 
  get_header(); 
?>
  <main class="page-content main-blog">
		<section class="header-title">
			<div class="wrap">
				<h1><?php the_title(); ?></h1>
			</div>
		</section>
		<section class="blog-content">
			<div class="wrap">
				<div class="posts content-col1">
					<article class="content-blog">
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
						the_content();
					endwhile;
					endif;
					?>	
					</article>
					<?php comments_template(); ?>
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