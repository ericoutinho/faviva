<?php
    /**
     * Template Name: PageCursos
     * 
     * A página para exibir cada Curso
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
            <img src="<?= the_post_thumbnail_url("page-header") ?>" alt="Imagem de capa da página">
        </figure>

        <div class="article-wrapper">

            <article>
                <h2 class="curso-titulo">
                    <small>Graduação em</small>
                    <i class='fa-solid fa-caret-right'></i>
                    <?= the_title(); ?>
                </h2>

                <ul class="page__share">
                    <li>Compartilhe por </li>
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
                        <a target="_blank" title="Compatilhe via Whatsapp" href="https://api.whatsapp.com/send?text=Veja esta publicação: <?= the_permalink() ?>">
                            <i class="fab fa-lg fa-whatsapp"></i>
                        </a>
                    </li>
                </ul>

                <?php the_content(); ?>

        <?php
            endwhile;
            else :
                echo "Não foi possível encontrar a página.";
            endif;
        ?>

            </article>

            <nav>
                <ul class="page__summary">
                    <li>
                        <i class="fa-solid fa-fw fa-calendar-days"></i>
                        <span><strong>Duração</strong><?= get_post_meta(get_the_ID(), "duracao", true) ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-fw fa-clock"></i>
                        <span><strong>Turno</strong><?= get_post_meta(get_the_ID(), "turno", true) ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-fw fa-chalkboard"></i>
                        <span><strong>Modalidade</strong><?= get_post_meta(get_the_ID(), "modalidade", true) ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-fw fa-graduation-cap"></i>
                        <span><strong>Formação</strong><?= get_post_meta(get_the_ID(), "formacao", true) ?></span>
                    </li>
                    <li>
                        <i class="fa-solid fa-fw fa-hourglass-end"></i>
                        <span><strong>Carga Horária</strong><?= get_post_meta(get_the_ID(), "ch", true) ?></span>
                    </li>
                </ul>

                <div class="botao-grupo">
                    <a href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php" target="_blank" class="botao botao__primario"><i class="fa-solid fa-pencil"></i>&nbsp; Fazer minha matrícula agora!</a>
                    <a class="botao botao__especial" onclick="toggleMatriz()"><i class="fa-solid fa-table-list" aria-label="button"></i>&nbsp; Conhecer Matriz Curricular</a>
                    <a href="https://wa.me/5527999280910" class="botao botao__secundario" target="_blank"><i class="fas fa-plus"></i>&nbsp; Obter mais informações</a>
                    <a href="<?php echo home_url("graduacao"); ?>" class="botao botao__secundario"><i class="fas fa-search"></i>&nbsp; Conhecer os outros cursos</a>
                </div>
            </nav>

        </div>

    </div>
</section>


<?php get_footer(); ?>