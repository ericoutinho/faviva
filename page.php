<?php
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
                <img src="<?= the_post_thumbnail_url() ?>" alt="">
            </figure>
            <?php endif; ?>

            <h2>
                <?php
                    if (is_page(array("direito","arquitetura-e-urbanismo","ciencias-contabeis"))) {
                        echo "<small>Graduação em</small>";
                    }
                    echo "<i class='fa-solid fa-caret-right'></i> ";
                    the_title();
                ?>
            </h2>

            <ul class="page__share">
                <li>
                    <a target="_blank" title="Compartilhe no Facebook" href="https://www.facebook.com/sharer/sharer.php?u=<?= the_permalink() ?>">
                        <i class="fab fa-lg fa-square-facebook"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Compatilhe no Linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= the_permalink() ?>">
                        <i class="fab fa-lg fa-linkedin"></i>
                    </a>
                </li>
                <li>
                    <a target="_blank" title="Compatilhe via Whatsapp" href="https://api.whatsapp.com/send?text=Veja esta publicação: <?=the_permalink()?>">
                        <i class="fab fa-lg fa-whatsapp"></i>
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

            <a href="<?php echo home_url("vestibular"); ?>" class="botao botao__primario"><i class="fa-solid fa-pencil"></i> Quero fazer minha matrícula!</a>
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
            wp_reset_postdata();
        ?>
    </section>

<?php get_footer(); ?>