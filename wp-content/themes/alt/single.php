<?php get_header(); ?>
<?php
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="banner-alternative flex" role="banner">
        <div class="row">
            <div class="small-12 columns">
                <hgroup>
                    <h2><?php the_title(); ?></h2>
                </hgroup>
            </div>
        </div>
    </section>

    <section class="container">
        <div class="row">
            <div class="small-12 medium-10 medium-centered columns">

                <div class="blog-font">
                    <?php the_content(); ?>
                </div>

                <hr />

                <!-- Load Facebook SDK for JavaScript -->
                <div id="fb-root"></div>
                    <script>(function(d, s, id) {
                    var js, fjs = d.getElementsByTagName(s)[0];
                    if (d.getElementById(id)) return;
                    js = d.createElement(s); js.id = id;
                    js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
                    fjs.parentNode.insertBefore(js, fjs);
                    }(document, 'script', 'facebook-jssdk'));</script>

                    <div class="fb-comments" data-width="100%" data-href="<?php echo the_permalink() ?>" data-numposts="5"></div>
            <?php endwhile;
                else :
                    _e( 'Sorry, no posts matched your criteria.', 'textdomain' );
            endif; ?>
            </div>
        </div>
    </section>
<?php get_footer(); ?>