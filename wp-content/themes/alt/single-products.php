<?php 
	
	get_header(); 

	$fields = get_fields();
	
?>
       
	<main class="page-content main-products">
        <section class="header-destaque">
			<div class="slide" style="background: url(<?php echo $fields['imagem_de_destaque']['url']; ?>);">
				<div class="wrap">
					<div class="anchors">
                        <a href="#photos" class="photos">
                            <i class="ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-ico-white.png" alt=""></i>
                            <span>Fotos</span>
                        </a>
                        <a href="#videos" class="videos">
                            <i class="ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-ico-white.png" alt=""></i>
                            <span>Videos</span>
                        </a>
                        <a href="#features" class="features">
                            <i class="ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/infos-ico-white.png" alt=""></i>
                            <span>Características</span>
                        </a>
                    </div>
				</div>
			</div>
		</section>
		
		<section class="content_products">
			<div class="wrap">
				<div class="col">
                    <h1><?php the_title(); ?></h1>
                    <div class="description">
                        <p><?php echo $fields['descricao']; ?></p>
                    </div>

                    <div id="photos" class="infos-products">
                        <h2>
                            <i class="ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pic-ico-red.png" alt=""></i>
                            <span>Fotos</span>
                        </h2>
                        <div class="galeria">
                            <? 
                                $fotos = $fields['fotos'];
                                
                                if($fotos)
                                {
                                    foreach($fotos as $value)
                                    { 
                                    ?>

                                        <img src="<?php echo $value['imagem']['url']; ?>" alt="<?php echo $value['imagem']['alt']; ?>">

                                    
                                    <?php }
                                }
                                //  var_dump($fotos);
                            ?>
                        </div>
                    </div>
                    <div id="videos" class="infos-products">
                        <h2>
                            <i class="ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/video-ico-red.png" alt=""></i>
                            <span>Video</span>
                        </h2>
                        <div class="video" data-videoid="<?php echo $fields['video']['id_do_video']; ?>">
                            <figure>
                                <img src="<?php echo $fields['video']['imagem']['url']; ?>" alt="<?php echo $fields['video']['imagem']['alt']; ?>">
                            </figure>
                        </div>
                    </div>
                    <div id="features" class="infos-products">
                        <h2>
                            <i class="ico"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/infos-ico-red.png" alt=""></i>
                            <span>Informações</span>
                        </h2>
                        <div class="vertical-tabs">
                            <ul class="tabs vertical" data-tab="">
                                <? 
                                    $index = 0;
                                    $infos = $fields['informacoes'];
                                    
                                    if($infos)
                                    {
                                        foreach($infos as $value)
                                        { 
                                        ?>

                                            <li class="tab-title <?php echo ($index != 0)?" ":"active" ?>"><a href="#panel<?php echo $index; ?>" aria-selected="<?php echo ($index != 0)?"false":"true" ?>" tabindex="<?php echo ($index != 0)?"-1":"0" ?>"><?php echo $value['titulo']; ?></a></li>

                                        <?php 
                                        $index++;
                                        }
                                    }
                                    //  var_dump($infos);
                                ?>
                            </ul>
                            <div class="tabs-content">

                                <? 
                                    $index = 0;
                                    $infos = $fields['informacoes'];
                                    
                                    if($infos)
                                    {
                                        foreach($infos as $value)
                                        { 
                                        ?>

                                            <div class="content <?php echo ($index != 0)?" ":"active" ?>" id="panel<?php echo $index; ?>" aria-hidden="<?php echo ($index != 0)?"false":"true" ?>" >
                                                <p><?php echo $value['conteudo']; ?></p>
                                            </div>

                                        <?php 
                                        $index++;
                                        }
                                    }
                                    //  var_dump($infos);
                                ?>

                            </div>
                        </div>
                    </div>
					
				</div>				
				<div class="sidebar">
					<div class="interested">
						<div class="ico">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/ico-interested.png" >
							<h3>Estou Interessado</h3>
							<?php echo do_shortcode( '[contact-form-7 id="40" title="Estou Interessado"]' ); ?>
						</div>
					</div>
					
					<a href="https://api.whatsapp.com/send?phone=5551999999999&text=Oi,..." class="btn-whats" target="_blank">
						<i class="icon-whats">
							<svg height="1792" viewBox="0 0 1792 1792" width="1792" xmlns="http://www.w3.org/2000/svg"><path d="M1113 974q13 0 97.5 44t89.5 53q2 5 2 15 0 33-17 76-16 39-71 65.5t-102 26.5q-57 0-190-62-98-45-170-118t-148-185q-72-107-71-194v-8q3-91 74-158 24-22 52-22 6 0 18 1.5t19 1.5q19 0 26.5 6.5t15.5 27.5q8 20 33 88t25 75q0 21-34.5 57.5t-34.5 46.5q0 7 5 15 34 73 102 137 56 53 151 101 12 7 22 7 15 0 54-48.5t52-48.5zm-203 530q127 0 243.5-50t200.5-134 134-200.5 50-243.5-50-243.5-134-200.5-200.5-134-243.5-50-243.5 50-200.5 134-134 200.5-50 243.5q0 203 120 368l-79 233 242-77q158 104 345 104zm0-1382q153 0 292.5 60t240.5 161 161 240.5 60 292.5-60 292.5-161 240.5-240.5 161-292.5 60q-195 0-365-94l-417 134 136-405q-108-178-108-389 0-153 60-292.5t161-240.5 240.5-161 292.5-60z"/></svg>
						</i>
                		<span>Atendimento Whatsapp</span>
					</a>
					
					<div class="call">
						<h3>Ligamos para você</h3>
						<?php echo do_shortcode( '[contact-form-7 id="44" title="Ligamos"]' ); ?>
					</div>
					
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/imagens-bancos.jpg" alt="Bancos">
				</div>				
			</div>
		</section>
	</main>

<?php 
	// var_dump($fields);
	get_footer(); 
?>