<?php
/**
 * The index for our theme
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
    
    
    <section id="page-blog">
        <div class="container">
            <h2>Blog da FAVIVA</h2>

            <?php
                // O Loop
                global $wp_query, $paged;
                $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
                $args = array(
                    'post_type' => array('post'),
                    'post_status' => array('publish'),
                    'posts_per_page'  => '10',
                    'paged' => $paged,
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

                $query = new WP_Query($args);
                if ($query->have_posts( )) :
                    while ($query->have_posts( )) :
                        $query->the_post();
            ?>

            <div class="blog-card">
                <figure class="blog-card__figure">
                    <img src="<?=get_the_post_thumbnail_url()?>" loading="lazzy">
                </figure>
                <div class="blog-card__text">
                    <small><?=the_category( '&bull;' )?></small>
                    <h3><?=the_title()?></h3>
                    <p><?=get_the_excerpt()?></p>

                    <?php
                        // GET TAGS
                        if (get_the_tags()) :
                            echo "<span>\n";
                            foreach( get_the_tags() as $tag ) {
                                echo $tag->name . ', ';
                            }
                            echo "</span>";
                        endif;
                    ?>
                    
                    <a href="<?=the_permalink()?>" class="blog-card__link"></a>
                </div>
            </div>

            <?php
                    endwhile;

                    echo get_next_posts_link() ? "<a class='botao botao__primario--outline' href='".get_next_posts_link()."' ><i class='fa-solid fa-chevron-left'></i> Anteriores</a> &nbsp;" : "";
                    echo get_previous_posts_link() ? "<a class='botao botao__primario--outline' href='".get_previous_posts_link()."' >Próximos <i class='fa-solid fa-chevron-right'></i></a>" : "";
            
                    wp_reset_query();
                endif;
                // Fim do Loop
            ?>


        </div>
    </section>


<?php get_footer(); ?>