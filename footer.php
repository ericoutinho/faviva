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
                        'posts_per_page'  => '5',
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
                            <figure class="artigo__figure">
                                <img src="<?= the_post_thumbnail_url() ?>" alt="">
                            </figure>
                            <div class="artigo__texto">
                                <h3><?= the_title() ?></h3>
                                <p><?= the_excerpt() ?></p>
                                <a class="botao botao__secundario" href="<?= the_permalink() ?>">Saiba mais <i class="fa-solid fa-chevron-right"></i></a>
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
            </section>

            <section id="contato">
                <div class="container">
                    <h2>Saiba mais</h2>
                    <div class="row">
                        <div class="col">
                            <a href="#" class="botao botao__primario"><i class="fa-solid fa-circle-user"></i> Área do aluno</a>
                            <ul class="saiba-mais">
                                <li><a href="<?=home_url("graduacao")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Graduação</a></li>
                                <li><a href="<?=home_url("vestibular")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Vestibular</a></li>
                                <li><a href="<?=home_url("sobre")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Sobre a FAVIVA</a></li>
                                <li><a href="<?=home_url("contato")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Contato</a></li>
                                <li><a href="<?=home_url("blog")?>"><i class="fa-solid fa-caret-right fa-fw"></i> Blog</a></li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="contatos">
                                <li><strong>Faculdade VIVA Vitória Ltda.</strong></li>
                                <!-- <li><strong>CNPJ</strong>: 00.000.000/0001-00</li> -->
                                <li><strong>Mantenedora</strong>: Instituto VIVA Vitória</li>
                                <li><i class="fa-solid fa-location-pin fa-fw"></i>Av. Fernando Ferrari, 1.094, Mata da Praia<br/>Vitória - ES • CEP: 29066-380</li>
                                <li><i class="fa-solid fa-envelope-open fa-fw"></i><a href="mailto:contato@faviva.com.br">contato@faviva.com.br</a></li>
                                <li><i class="fa-solid fa-phone-flip fa-fw"></i><a class="contatos__fone" href="tel:+5527999280910">(27) 99928-0910</a></li>
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
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3742.5803139897466!2d-40.302547482793166!3d-20.276233222969186!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb818048f03c4c1%3A0x44216bb10ea95486!2sAv.%20Fernando%20Ferrari%2C%201094%20-%20Goiabeiras%2C%20Vit%C3%B3ria%20-%20ES%2C%2029075-010!5e0!3m2!1spt-BR!2sbr!4v1661732661139!5m2!1spt-BR!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </section>

        </main>

        <footer>
            <div class="container">
                FAVIVA &copy; 2022 &bullet; Todos os direitos reservados
            </div>
        </footer>

    <?php wp_footer(); ?>

    </body>
</html>