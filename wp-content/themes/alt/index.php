<?php get_header(); ?>

<section class="banner-alternative flex" role="banner">
    <div class="row">
        <div class="small-12 columns">
            <hgroup>
                <h2>Blog</h2>
            </hgroup>
        </div>
    </div>
</section>

<section class="container">
    <div class="small-up-1 medium-up-3 row">
        <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

                <div class="column column-block">
                    <a href="<?php the_permalink(); ?>" class="card-regular">
                        <figure class="card-regular__image image is-3by2">
                        <?php
                            if ( has_post_thumbnail() ) {
                                    the_post_thumbnail();
                                }
                                else {
                                    echo '<img src="' . get_bloginfo( 'template_url' ) 
                                        . '/assets/images/480x320.png" />';
                                }
                            ?>
                        </figure>
                        <div class="card-regular__text">
                            <?php the_title(); ?>
                        </div>
                    </a>
                </div>
            <?php endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif; ?>
    </div>
</section>

<?php get_footer(); ?>