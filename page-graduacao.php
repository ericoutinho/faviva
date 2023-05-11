<?php
/**
 * The page-graduacao for our theme
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

    <section id="graduacao">
        <div class="container">
            <h2>Graduação</h2>
            <p><strong>Todos os nossos cursos são reconhecidos pelo MEC</strong> e contamos com um corpo docente qualificado e experiente, formado em sua maioria por mestres e doutores, além infraestrutura adequada e acessível, possibilitando o máximo aproveitamento por nossos alunos.</p>

            <div class="cursos">

                <div class="curso">
                    <figure class="curso__figure">
                        <img src="<?= get_template_directory_uri(); ?>/assets/faviva-direito.webp">
                    </figure>
                    <div class="curso__texto">
                        <h3><small>Graduação em</small>Direito</h3>
                        <p>O curso de <strong>Direito</strong> da FAVIVA tem como objetivo preparar os alunos para um mercado de trabalho exigente e concorrido, oferecendo as bases necessárias para uma carreira promissora. O Direito é uma disciplina da área das Ciências Sociais Aplicadas.</p>
                        <ul>
                            <li><i class="fa-solid fa-clock fa-fw"></i> <strong>Duração</strong>: 5 anos</li>
                            <li><i class="fa-solid fa-chalkboard fa-fw"></i> <strong>Modalidade</strong>: Presencial</li>
                            <li><i class="fa-solid fa-graduation-cap fa-fw"></i> <strong>Formação</strong>: Bacharelado</li>
                        </ul>
                        <a href="<?=home_url("direito")?>" class="botao botao__primario"><i class="fas fa-plus"></i> Mais informações</a>
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
                        <a href="<?=home_url("arquitetura-e-urbanismo")?>" class="botao botao__primario"><i class="fas fa-plus"></i> Mais informações</a>
                    </div>
                    <figure class="curso__figure">
                        <img src="<?= get_template_directory_uri(); ?>/assets/faviva-arquitetura.webp">
                    </figure>
                </div>

                
            </div>
        </div>
    </section>


<?php get_footer(); ?>