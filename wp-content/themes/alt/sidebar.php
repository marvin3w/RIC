	<div class="cell-xs-10 cell-sm-8 cell-md-4 offset-top-90 offset-md-top-0">
		<div class="inset-lg-left-30 inset-md-left-15">
			<div class="range">
			<aside class="text-left">
				<?php 
					$about = get_field('sobre', 154);
				?>
				<!-- Aside post-->
				<div class="cell-xs-12 cell-xs-push-1 cell-md-push-1">
					<h5><?php echo $about['titulo'] ;?></h5>
					<div class="text-subline"></div>
					<article class="post-default text-left">
						<div class="offset-top-30"><img src="<?php echo $about['foto'] ;?>" width="340" height="220" alt="" class="img-responsive reveal-inline-block"></div>
						<div class="offset-top-20">
						<p><?php echo $about['texto'] ;?></p>
						</div>
						<div class="offset-top-20"><a href="<?php echo get_page_link(40); ?>" class="btn btn-primary btn-sm">Ver mais</a></div>
					</article>
				</div>

				
				<!-- Recent Posts-->
				<div class="cell-xs-12 offset-top-60 cell-xs-push-5 cell-md-push-1">
					<h5>Notícias Recentes</h5>
					<div class="text-subline"></div>
					<?php
						$recent_posts = wp_get_recent_posts(array('numberposts' => 3, 'post_type'=>'noticias'));
						foreach( $recent_posts as $recent ){
						?>

							<div class="offset-top-30">
								<p class="text-bold text-primary font-accent text-line-height-125"><a href="<?php echo get_permalink($recent["ID"]);?>"><?php echo $recent["post_title"];?></a></p>
								<ul class="list-inline">
								<li><span class="icon icon-xxs fa-calendar text-dark text-middle"></span>
									<time datetime="2016-01-01" class="text-dark inset-left-5 text-middle"><?php echo get_the_date( 'j F, Y' );?></time>
								</li>
							</div>
							
						<?php	
						}
					?>
				</div>

				<!-- Banner -->
				<div class="cell-xs-12 offset-top-60 text-center cell-xs-push-7 cell-md-push-1">
					<img src="<?php echo get_field('bannere', 154); ?>" width="340" height="500" alt="" class="img-responsive reveal-inline-block">
				</div>
			</aside>
			</div>
		</div>
	</div>
