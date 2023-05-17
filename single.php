<?php
    /**
     * 
     * The SINGLE for our theme
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

            <figure class="page__figure">
                <img src="<?= the_post_thumbnail_url() ?>" alt="Imagem de capa da notícia">
            </figure>

            <h2>
                <?php
                    echo "<small>".the_category( '&bull;' )."</small>";
                    the_title();
                ?>
            </h2>

            <p style="opacity:0.5;"><i class="fas fa-clock"></i> Publicado em: <?=the_date()?></p>

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

            <!-- TAGS -->
            <?php if (get_the_tags()) : ?>
            <div class="page__tags">
                <i class="fa-solid fa-hashtag"></i>
            <?php
                foreach( get_the_tags() as $tag ) {
                    echo $tag->name . ', '; 
                }
            ?>
            </div>
            <!-- END TAGS -->

            <?php endif; ?>

            <?php 
                endwhile;	
                else:
            ?>
                echo "Não foi possível encontrar a página."
            <?php endif; ?>

        </div>
    </section>


<?php  get_footer(); ?>