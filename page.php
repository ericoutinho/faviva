<?php

    /* Template Name: PageDefault */

    /**
     * 
     * The PAGE for our theme
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

    <section class="page">
        <div class="container">

            <?php 

            if (have_posts()) :
                while (have_posts()) : the_post();
            ?>

            <?php if (has_post_thumbnail()) : ?>
            <figure class="page__figure">
                <img src="<?= the_post_thumbnail_url() ?>" alt="Imagem de capa da página">
            </figure>
            <?php endif; ?>

            <h2>
                <?php
                    if (is_page(array("direito","arquitetura-e-urbanismo","ciencias-contabeis"))) {
                        echo "<small>Graduação em</small>";
                    }
                    // echo "<i class='fa-solid fa-caret-right'></i> ";
                    the_title();
                ?>
            </h2>

            <ul class="page__share">
                <li>
                    <a target="_blank" title="Compartilhe no Facebook" style="background:#334D87;" href="https://www.facebook.com/sharer/sharer.php?u=<?= the_permalink() ?>">
                        <i class="fab fa-lg fa-fw fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Compartilhe no Twitter" style="background:#0099D7;" href="https://twitter.com/intent/tweet?text=<?= the_title() ?>&url=<?= the_permalink() ?>">
                        <i class="fab fa-lg fa-fw fa-twitter"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Compatilhe no Linkedin" style="background: #00669C;" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= the_permalink() ?>">
                        <i class="fab fa-lg fa-fw fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Compatilhe via Whatsapp" style="background:#25d366;" href="https://api.whatsapp.com/send?text=Veja esta publicação: <?=the_permalink()?>">
                        <i class="fab fa-lg fa-fw fa-whatsapp"></i>
                    </a>
                </li>
            </ul>

            <?php the_content(); ?>

            <?php
                 if (is_page(array("direito","arquitetura-e-urbanismo","ciencias-contabeis"))):
            ?>

            <ul class="page__summary">
                <li><i class="fa-solid fa-fw fa-calendar-days"></i> <strong>Duração</strong>: <?=get_post_meta(get_the_ID(), "duracao", true) ?></li>
                <li><i class="fa-solid fa-fw fa-clock"></i> <strong>Turno</strong>: <?=get_post_meta(get_the_ID(), "turno", true) ?></li>
                <li><i class="fa-solid fa-fw fa-chalkboard"></i> <strong>Modalidade</strong>: <?=get_post_meta(get_the_ID(), "modalidade", true) ?></li>
                <li><i class="fa-solid fa-fw fa-graduation-cap"></i> <strong>Formação</strong>: <?=get_post_meta(get_the_ID(), "formacao", true) ?></li>
            </ul>

            <a href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php" target="_blank" class="botao botao__primario"><i class="fa-solid fa-pencil"></i> Quero fazer minha matrícula!</a>
            <a href="<?php echo home_url("graduacao"); ?>" class="botao botao__primario--outline"><i class="fas fa-search"></i> Conhecer outros cursos</a>
            
            <?php endif; ?>

            <?php 
                endwhile;	
                else:
            ?>
                echo "Não foi possível encontrar a página."
            <?php endif; ?>

        </div>
    </section>


<?php get_footer(); ?>