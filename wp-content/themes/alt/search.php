<?php get_header(); ?>


	<main class="page-content main-search">
        <section class="header-title">
			<h1>Resultados para <span class="search"><em><?php echo get_search_query(); ?></em></span></h1>
		</section>
		
		<section class="results-searchs">
			<div class="wrap">
				<?php get_template_part('loop'); ?>
			</div>
		</section>
	</main>
		

<?php get_footer(); ?>
