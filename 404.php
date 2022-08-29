<?php
/**
 * The 404 page for our theme
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

    <section id="nf-error">
        <div class="container">
            <div class="nf-error">
                <figure class="nf-error__figure">
                    <img src="<?= get_template_directory_uri(); ?>/assets/faviva-404.svg" alt="Erro 404!">
                </figure>
                <div class="nf-error__text">
                    <h2>404! Conteúdo não encontrado.</h2>
                    <p>Não foi possível localizar o conteúdo que você está procurando. Verifique se <strong>a url foi digitada corretamente</strong> ou tente novamente mais tarde.</p>
                    <a href="<?= home_url("/") ?>" class="botao botao__primario"><i class="fa-solid fa-house"></i> Voltar à página inicial</a>
                </div>
            </div>
        </div>
    </section>


<?php get_footer(); ?>