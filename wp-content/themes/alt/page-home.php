<?php get_header(); ?>



<section class="banner" role="banner">

    <div class="carousel">

        <?php if(have_rows('slides', 15)) : ?>

            <?php while(have_rows('slides', 15)) : the_row()?>

                <div>

                    <div class="carousel__item flex" style="background-image: url(<?php the_sub_field('slide_imagem'); ?>)">

                        <div class="row">

                            <div class="small-12 medium-6 large-5 columns">

                                <h2><?php the_sub_field('slide_titulo');?></h2>

                                <?php the_sub_field('slide_texto');?>

                                <a href="<?php the_sub_field('slide_link');?>" class="btn__default btn__default--primary">Veja nossos produtos</a>

                            </div>

                        </div>

                    </div>

                </div>

            <?php endwhile; ?>

        <?php endif; ?>

    </div>

</section>



<div class="home-bg">

    <section class="container container--primary container-why">

        <div class="row expanded">

            <div class="small-12 medium-5 medium-offset-3 columns">

                <h3 class="title">Porque escolher um<br /><span>Coworking?</span></h3>

                <?php the_field('porque_coworking_texto'); ?>



                <a href="<?php echo get_bloginfo('url') ?>/produtos" class="btn__default btn__default--primary mobile__buttonspace">Veja nossos produtos</a>

            </div>



            <div class="small-12 medium-4 columns">

                <!-- <div class="card-form">

                    <div class="card-form__header">

                        <h4>Faça aqui uma <span>cotação</span><br />com a Intermetro</h4>

                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="40" title="Cotação"]'); ?>

                </div> -->

                <a href="<?php echo esc_url( get_page_link( 107 ) ); ?>" class="btn__default btn__default--primary btn_plan" target="_blank">Planos e Preços</a>

                <a href="https://wa.me/5551997502659" class="btn__default btn__default--wp" target="_blank">Fale pelo WhatsApp</a>

                <div class="card-form">

                    <div class="card-form__header">

                        <h4>Ligamos para você</h4>

                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="41" title="Ligamos para você"]'); ?>

                </div>

            </div>

        </div>

    </section>



    <section class="container">

        <div class="row">

            <div class="small-12 medium-6 columns">

                <h4 class="title">Porque escolher<br />a <span>Intermetro?</span></h4><br />



                <div class="small-up-1 medium-up-2 row">

                    <?php if(have_rows('porque_intermetro')) : ?>

                        <?php while(have_rows('porque_intermetro')) : the_row()?>

                            <div class="column column-block">

                                <div class="card-reason flex">

                                    <div class="card-reason__icon">

                                        <img src="<?php the_sub_field('porque_intermetro_icone') ?>" alt="<?php the_sub_field('porque_intermetro_titulo') ?>">

                                    </div>

                                    <div class="card-reason__info">

                                        <dl>

                                            <dt><?php the_sub_field('porque_intermetro_titulo') ?></dt>

                                            <dd><?php the_sub_field('porque_intermetro_texto') ?></dd>

                                        </dl>

                                    </div>

                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

            </div>



            <div class="small-12 medium-6 columns">

                <img src="<?php echo get_bloginfo('template_url') ?>/assets/images/coworking.png" alt="">

            </div>

        </div>

    </section>



    <section class="container container--end">

        <div class="row">

            <div class="small-12 columns">

                <div class="masonry-layout">

                    <div class="ml__item show-for-large">

                        <?php get_template_part('template-parts/video'); ?>

                    </div>

                    <?php $count = 0; ?>

                    <?php if(have_rows('foto', 148)) : ?>

                        <?php while(have_rows('foto', 148)) : the_row()?>

                            <?php 

                                $count++;

                                if($count > 8) { break; }

                            ?>

                            <a data-fancybox="gallery" href="<?php the_sub_field('foto_imagem'); ?>" class="ml__item">

                                <img src="<?php the_sub_field('foto_imagem'); ?>" alt="<?php the_sub_field('foto_texto'); ?>">

                            </a>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>



                <div class="text-center">

                    <a href="https://www.google.com/maps/place/Rua+18+de+Novembro,+273+-+Navegantes,+Porto+Alegre+-+RS/@-29.9987297,-51.1959444,17z/data=!3m1!4b1!4m5!3m4!1s0x951979f1c26d2511:0x25d2316ca596171a!8m2!3d-29.9987344!4d-51.1937557" class="btn__default btn__default--primary" target="_blank">Ver como chegar</a>

                </div>

            </div>

        </div>

    </section>

</div>



<?php get_footer(); ?>