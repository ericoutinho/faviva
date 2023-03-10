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

    <h1 hidden>FAVIVA - Faculdade Viva de Vitória</h1>

    <section id="hero">
        <div class="container">
            <div class="hero">
                <div class="hero__texto">
                    <h2>Ensino de excelência ao seu alcance.</h2>
                    <p>Conquiste sua graduação e se torne um profissional desejado pelo mercado <strong>com mensalidades que cabem no seu bolso</strong>.</p>
                    <div class="botao-grupo">
                        <a href="#graduacao" class="botao botao__outline"><i class="fa-solid fa-magnifying-glass"></i> Conhecer os nossos cursos</a>
                        <a target="_blank" href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php" class="botao botao__primario"><i class="fa-solid fa-pencil"></i> Fazer minha inscrição agora!</a>
                    </div>
                </div>
                <figure class="hero__figure" style="margin-bottom:0;">
                    <img src="<?= get_template_directory_uri() ?>/assets/faviva-hero.webp" alt="Aluno homem de mochila e cadernos empolgado">
                </figure>
            </div>
        </div>
    </section>

    <section id="sobre">
        <div class="container">
            <div class="sobre-wrapper">
                <figure class="sobre-wrapper__figure" style="margin-bottom:0;">
                    <img src="<?= get_template_directory_uri() ?>/assets/faviva-quem-somos.webp" alt="Estudante homem sorrindo utilizando caderno">
                </figure>
                <div class="sobre-wrapper__texto">
                    <h2>Bem-vindo(a) a FAVIVA!</h2>
                    <p>A <strong>FAVIVA</strong> é uma instituição a serviço da sociedade, comprometida com o futuro e com a consciência crítica, que respeita e valoriza as diferenças, priorizando a experimentação, reafirmando diariamente o seu compromisso com a educação e a produção qualitativa do conhecimento, sempre inspirada nos ideais de liberdade e solidariedade.</p>
                    <p>Nossa instituição <strong>preza pela qualificação permanente do seu corpo docente</strong>, composto em sua maioria por mestres e doutores, promovendo a atualização permanente da infraestrutura dos laboratórios e bibliotecas, bem como o incremento à assistência estudantil.</p>
                </div>
            </div>
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

    <section id="graduacao">
        <div class="container">
            <h2><i class="fa-solid fa-caret-right"></i> Graduação</h2>
            <p><strong>Todos os nossos cursos são reconhecidos pelo MEC</strong> e contamos com um corpo docente qualificado e experiente, formado em sua maioria por mestres e doutores, além infraestrutura adequada e acessível, possibilitando o máximo aproveitamento por nossos alunos.</p>

            <div class="cursos">

                <div class="curso">
                    <figure class="curso__figure" style="margin-bottom:0;">
                        <img src="<?= get_template_directory_uri(); ?>/assets/faviva-direito.webp" alt="Advogada lendo com estátua da justiça a sua frente">
                    </figure>
                    <div class="curso__texto">
                        <h3><small>Graduação em</small>Direito</h3>
                        <p>O curso de <strong>Direito</strong> da FAVIVA tem como objetivo preparar os alunos para um mercado de trabalho exigente e concorrido, oferecendo as bases necessárias para uma carreira promissora. O Direito é uma disciplina da área das Ciências Sociais Aplicadas.</p>
                        <ul>
                            <li><i class="fa-solid fa-clock fa-fw"></i> <strong>Duração</strong>: 5 anos</li>
                            <li><i class="fa-solid fa-chalkboard fa-fw"></i> <strong>Modalidade</strong>: Presencial</li>
                            <li><i class="fa-solid fa-graduation-cap fa-fw"></i> <strong>Formação</strong>: Bacharelado</li>
                        </ul>
                        <a href="<?=home_url("graduacao/direito")?>" class="botao botao__primario"><i class="fas fa-plus"></i> Mais informações</a>
                    </div>
                </div>

                <div class="curso">
                    <div class="curso__texto">
                        <h3><small>Graduação em</small>Arquitetura e Urbanismo</h3>
                        <p>No curso de <strong>Arquitetura e Urbanismo</strong> da FAVIVA, o aluno adquire conhecimentos teóricos e práticos tornando-se habilitado para planejar, construir e recuperar espaços urbanos. Para isso, as disciplinas se dividem entre duas grandes áreas das Ciências, as Humanas e as Exatas.</p>
                        <ul>
                            <li><i class="fa-solid fa-clock fa-fw"></i> <strong>Duração</strong>: 5 anos</li>
                            <li><i class="fa-solid fa-chalkboard fa-fw"></i> <strong>Modalidade</strong>: Presencial</li>
                            <li><i class="fa-solid fa-graduation-cap fa-fw"></i> <strong>Formação</strong>: Bacharelado</li>
                        </ul>
                        <a href="<?=home_url("graduacao/arquitetura-e-urbanismo")?>" class="botao botao__primario"><i class="fas fa-plus"></i> Mais informações</a>
                    </div>
                    <figure class="curso__figure" style="margin-bottom:0;">
                        <img src="<?= get_template_directory_uri(); ?>/assets/faviva-arquitetura.webp" alt="Mulher arquiteta sorrindo">
                    </figure>
                </div>

                <div class="curso">
                    <figure class="curso__figure" style="margin-bottom:0;">
                        <img src="<?= get_template_directory_uri(); ?>/assets/faviva-contabilidade.webp" alt="Mulher contadora analisando dados no PC">
                    </figure>
                    <div class="curso__texto">
                        <h3><small>Graduação em</small>Ciência Contábeis</h3>
                        <p>O curso de <strong>Ciências Contábeis</strong> da FAVIVA forma profissionais capacitados para trabalhar de forma produtiva e eficiente na gestão e no controle financeiro de pequenas, médias e grandes empresas, oferendo conhecimento técnico para o futuro profissional exercer todas as funções de um contador.</p>
                        <ul>
                            <li><i class="fa-solid fa-clock fa-fw"></i> <strong>Duração</strong>: 5 anos</li>
                            <li><i class="fa-solid fa-chalkboard fa-fw"></i> <strong>Modalidade</strong>: Presencial</li>
                            <li><i class="fa-solid fa-graduation-cap fa-fw"></i> <strong>Formação</strong>: Bacharelado</li>
                        </ul>
                        <a href="<?=home_url("graduacao/ciencias-contabeis")?>" class="botao botao__primario"><i class="fas fa-plus"></i> Mais informações</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="vestibular">
        <div class="container">
            <div class="vestibular">
                <figure style="margin-bottom:0;">
                    <img src="<?= get_template_directory_uri(); ?>/assets/faviva-vestibular.png" alt="Alunos usando um laptop">
                </figure>
                <div class="vestibular__texto">
                    <h2>Faça já sua matrícula!</h2>
                    <p><strong>Não perca mais tempo</strong>! As matrículas estão abertas e as vagas são limitadas. <strong>Garanta logo a sua!</strong></p>
                    <a class="botao botao__secundario" title="Faça a sua inscrição!" target="_blank" href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php">Comece o seu sonho agora! <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>