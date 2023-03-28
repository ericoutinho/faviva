<?php
    /**
     * The page contato for our theme
     *
     * This is the template that displays all of the <head> section
     *
     * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
     *
     * @package WordPress
     * @subpackage faviva
     * @since faviva 1.0
     */

    get_header();
?>

    <section>
        <?php
            $args = array(
                'post_type' => array('post'),
                'post_status' => array('publish'),
                'posts_per_page'  => '1',
                'order' => 'DESC',
                // 'orderby' => 'date',
                'orderby' => 'rand',
                'tax_query' => array(
                    array(
                        'taxonomy' => 'post_format',
                        'field' => 'slug',
                        'terms' => array( 'post-format-image' )
                    )
                )
            );

            $banner = new WP_Query($args);
            if ($banner->have_posts()) :
                while ($banner->have_posts()):
                    $banner->the_post();
                    the_content();
                endwhile;
            endif;
        ?>
    </section>

    <section id="page-contato">
        <div class="container">
            <h2><i class="fa-solid fa-caret-right"></i> Fale conosco</h2>
            <p>Tire suas dúvidas, deixe suas sugestões ou reclamações utilizando um de nossos canais de contato.</p>

            <div class="contato-row">

                <div class="contato-col-form">
                    <form id="js-form-contato" method="post">
                        <h3>Formulário de contato</h3>
                        <p>Caso prefira, utilize este formulário para enviar sua solicitação que nós responderemos o mais rápido possível.</p>
                        <ul>
                            <li>
                                <label for="nome">Nome</label>
                                <input type="text" name="nome" id="nome">
                                <small><i class="fa-solid fa-exclamation-circle"></i> Informe o seu nome.</small>
                            </li>
                            <li>
                                <label for="email">E-mail</label>
                                <input type="text" name="email" id="email">
                                <small><i class="fa-solid fa-exclamation-circle"></i> Informe o seu melhor email.</small>
                            </li>
                            <li>
                                <label for="telefone">Telefone</label>
                                <input type="text" name="telefone" id="telefone">
                                <small><i class="fa-solid fa-exclamation-circle"></i> Informe um telefone de contato.</small>
                            </li>
                            <li>
                                <label for="mensagem">Mensagem</label>
                                <textarea type="text" name="mensagem" id="mensagem" rows="5" placeholder="Deixe sua mensagem"></textarea>
                                <small><i class="fa-solid fa-exclamation-circle"></i> Por favor, escreva aqui a sua solicitação.</small>
                            </li>
                            
                            <button type="reset" class="botao botao__primario--outline"><i class="fa-solid fa-times"></i> Cancelar</button>
                            <button type="submit" class="botao botao__primario"><i class="fa-solid fa-check"></i> Enviar mensagem</button>
                        </ul>
                    </form>
                </div>

                <div class="contato-col-info">
                    <ul class="contatos">
                        <li><strong>Faculdade VIVA Vitória Ltda.</strong></li>
                        <!-- <li><strong>CNPJ</strong>: 00.000.000/0001-00</li> -->
                        <li><strong>Mantenedora</strong>: Instituto VIVA Vitória</li>
                        <li><i class="fa-solid fa-location-pin fa-fw"></i>R. Italina Pereira Mota, 500 - Jardim Camburi <br/>Vitória - ES • CEP: 29090-370</li>
                        <li><i class="fa-solid fa-envelope-open fa-fw"></i><a href="mailto:contato@faviva.com.br" target="_blank">contato@faviva.com.br</a></li>
                        <li><i class="fa-solid fa-phone-flip fa-fw"></i><a class="contatos__fone" href="tel:+5527999280910" target="_blank">(27) 99928-0910</a></li>
                        <li><i class="fa-solid fa-phone-flip fa-fw"></i><a class="contatos__fone" href="tel:+5508006969999" target="_blank">0800 696 9999</a></li>
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

<?php get_footer(); ?>