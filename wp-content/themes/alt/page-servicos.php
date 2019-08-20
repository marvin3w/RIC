<?php get_header(); ?>



<section class="banner-inside flex" role="banner" style="background-image: url(<?php echo get_bloginfo('template_url') ?>/assets/images/bg-servicos.jpg);">

    <div class="row">

        <div class="small-12 medium-4 columns">

            <h2 class="title">Serviços para <span>completar </span> o seu negócio.</h2>



            <div class="card-form card-form--left">

                <div class="card-form__header">

                    <h4>Estou <span>interessado</span> na Intermetro Coworking</h4>

                </div>

                <?php echo do_shortcode('[contact-form-7 id="40" title="Cotação"]'); ?>

            </div>

        </div>

    </div>

</section>



<section class="container">

    <div class="row">

        <div class="small-12 columns">

            <div class="videos-container videos-container--marginless">

                <div class="small-up-1 medium-up-2 row collapse">

                    <?php if(have_rows('servico')) : ?>

                        <?php while(have_rows('servico')) : the_row()?>

                            <div class="column column-block">

                                <div class="video flex">

                                    <div class="video__info">

                                        <span class="video__score" style="background-image: url(<?php the_sub_field('servico_icone'); ?>)"><?php the_sub_field('servico_titulo'); ?></span>

                                        <?php the_sub_field('servico_texto'); ?>

                                    </div>

                                    <div class="video__itself">

                                        <figure class="image is-4by3">

                                            <img src="<?php the_sub_field('servico_imagem'); ?>" alt="">

                                        </figure>

                                    </div>

                                </div>

                            </div>

                        <?php endwhile; ?>

                    <?php endif; ?>

                </div>

                <br /><br /><br /><br />

                <div class="text-center">

                    <div class="btn__group">

                        <a href="<?php echo get_bloginfo('url') ?>/agende-uma-visita" class="btn__default btn__default--secondary">Agende uma visita</a>

                        <a href="https://wa.me/5551997502659" class="btn__default btn__default--wp">Fale pelo WhatsApp</a>

                    </div>

                </div>

            </div>

        </div>

    </div>

</section>



<?php get_footer(); ?>