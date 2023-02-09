<?php
    /**
     * The Footer for our theme
     *
     * This is the template that displays all of the <head> section
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage faviva
     * @since faviva 1.0
     */
?>
            <section id="blog">
                <div class="container">

                <?php
                    $args = array(
                        'post_type' => array('post'),
                        'post_status' => array('publish'),
                        'posts_per_page'  => '3',
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'tax_query' => array(
                            array(                
                                'taxonomy' => 'post_format',
                                'field' => 'slug',
                                'terms' => array( 
                                    'post-format-aside',
                                    'post-format-audio',
                                    'post-format-chat',
                                    'post-format-gallery',
                                    'post-format-image',
                                    'post-format-link',
                                    'post-format-quote',
                                    'post-format-status',
                                    'post-format-video'
                                ),
                                'operator' => 'NOT IN'
                            )
                        ));

                    $the_query = new WP_Query( $args );
                    
                    // The Loop
                    if ( $the_query->have_posts() ) :
                ?>
                    <h2><i class="fa-solid fa-caret-right"></i> Últimas do blog</h2>
                    <div class="artigos">
                <?php
                        while ( $the_query->have_posts() ) :
                            $the_query->the_post();
                ?>
                        <div class="artigo">
                            <figure class="artigo__figure" style="margin-bottom:0;">
                                <img src="<?= the_post_thumbnail_url() ?>" alt="Imagem de capa da notícia">
                            </figure>
                            <div class="artigo__texto">
                                <small><?= the_category('&bull;') ?></small>
                                <h3><?= the_title() ?></h3>
                                <p><?= the_excerpt() ?></p>
                                <a class="artigo__link" href="<?= the_permalink() ?>"></a>
                            </div>
                        </div>
                <?php endwhile; ?>
                    </div>
                <?php
                    endif;
                    wp_reset_postdata();
                ?>

                    <p style="text-align: center; margin-top: 2rem;">
                        <a href="<?=home_url("blog")?>" class="botao botao__primario">Mais artigos do blog <i class="fa-solid fa-arrow-right-long"></i></a>
                    </p>

                </div>

                <div class="container" style="margin-top: 1.5rem;">
                    <a href="https://emec.mec.gov.br/emec/consulta-cadastro/detalhamento/d96957f455f6405d14c6542552b0f6eb/MTQ0Mw==" target="_blank" title="e-MEC">
                        <img src="<?=get_template_directory_uri();?>/assets/banner-emec.png" alt="e-MEC">
                    </a>
                </div>
                
            </section>

            <section id="contato">
                <div class="container">
                    <h2>Saiba mais</h2>
                    <div class="row">
                        <div class="col">
                            <a href="https://faviva.pincelatomico.net.br/" target="_blank" class="botao botao__primario"><i class="fa-solid fa-circle-user"></i> Área do aluno</a>
                            <ul class="saiba-mais">
                                <li><a href="<?=home_url("graduacao")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Graduação</a></li>
                                <li><a title="Faça a sua inscrição!" target="_blank" href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php"><i class="fa-solid fa-caret-right fa-fw"></i> Matrículas</a></li>
                                <li><a href="<?=home_url("sobre")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Sobre a FAVIVA</a></li>
                                <li><a href="<?=home_url("contato")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Contato</a></li>
                                <li><a href="<?=home_url("blog")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Blog</a></li>
                            </ul>
                        </div>

                        <div class="col separator"></div>
                        
                        <div class="col">
                            <ul class="contatos">
                                <li><strong>Faculdade VIVA Vitória Ltda.</strong></li>
                                <!-- <li><strong>CNPJ</strong>: 00.000.000/0001-00</li> -->
                                <li><strong>Mantenedora</strong>: Instituto VIVA Vitória</li>
                                <li><i class="fa-solid fa-location-pin fa-fw"></i>Rua Almerinda Corina da Silva, n° 10<br/>Jardim Camburi, Vitória - ES<br/>CEP: 29090-550</li>
                                <li><i class="fa-solid fa-envelope-open fa-fw"></i><a href="mailto:contato@faviva.com.br">contato@faviva.com.br</a></li>
                                <li><i class="fa-solid fa-phone-flip fa-fw"></i><a class="contatos__fone" href="tel:+5508006969999">0800 696 9999</a></li>
                                <li>
                                    <ul class="contatos__social">
                                        <li><a title="Siga-nos no Instagram" target="_blank" href="https://www.instagram.com/faviva.es"><i class="fab fa-instagram"></i></a></li>
                                        <li><a title="Siga-nos no Facebook" target="_blank" href="#"><i class="fab fa-facebook"></i></a></li>
                                        <li><a title="Siga-nos no Linkedin" target="_blank" href="https://www.linkedin.com/company/faviva"><i class="fab fa-linkedin"></i></a></li>
                                        <li><a title="Fale conosco pelo Whatsapp" target="_blank" href="https://wa.me/5527999280910"><i class="fab fa-whatsapp"></i></a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                        
                    </div>
                </div>
            </section>

            <section id="mapa">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d786.8787767941602!2d-40.26655282888294!3d-20.256870506617176!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xc8d4d5747c46fcc2!2sFAVIVA!5e0!3m2!1spt-BR!2sbr!4v1673641872654!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

        </main>

        <footer>
            <div class="container">
                FAVIVA &copy; 2022 &bullet; Todos os direitos reservados
            </div>
        </footer>

    <?php wp_footer(); ?>


    <div class="modal-lgpd">
        <div class="modal-lgpd__texto">
        <strong>A FAVIVA e os cookies</strong>: utilizamos cookies para personalizar anúncios e melhorar a sua experiência no nosso site. Ao continuar navegando, você concorda com a nossa <a href="">Política de Privacidade</a> e <a href="">Política de Cookies</a>.
        </div>
        <button class="botao botao__primario"><i class="fa-solid fa-xmark"></i> Aceitar e fechar</button>
    </div>

    <div class="modal-whatsapp">
        <div class="modal-whatsapp__wrapper">
            <button title="Fechar widget do Whastsapp" class="modal-whatsapp__close"><i class="fa-solid fa-xmark"></i></button>
            <h4><i class="fa-solid fa-caret-right"></i> Fale conosco agora!</h4>
            <p>Utilize um de nossos canais pelo Whatsapp para tirar as suas dúvidas.</p>
            <ul>
                <li>
                    <a title="Atendimento ao Cliente FAVIVA" target="_blank" href="https://wa.me/5527999280910">
                        <img src="<?= get_template_directory_uri() ?>/assets/faviva-whatsapp-profile-a.webp" alt="">
                        <span>
                            Atendimento ao cliente
                            <small>Clique para iniciar a conversa</small>
                        </span>
                        <i class="fas fa-chevron-right"></i>
                    </a>
                </li>
            </ul>
        </div>
        <button class="modal-whatsapp__button" title="Chame-nos no Whatsapp" aria-label="button"><i class="fab fa-whatsapp"></i></button>
    </div>
    

    </body>
</html>