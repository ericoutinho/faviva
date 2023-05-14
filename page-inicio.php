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
                    <h2>Uma instituição em constante evolução.</h2>
                    <p>Faça parte de uma instituição com filosofia inclusiva, pautada na experiência empírica de seus alunos e na <strong>formação de profissionais desejados pelo mercado de trabalho</strong>.</p>
                    <div class="botao-grupo">
                        <a href="#graduacao" class="botao botao__outline"><i class="fa-solid fa-magnifying-glass"></i> Conheça nossos cursos</a>
                        <a target="_blank" href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php" class="botao botao__primario"><i class="fa-solid fa-pencil"></i> Faça sua inscrição agora!</a>
                    </div>
                </div>
                <figure class="hero__figure" style="margin-bottom:0;">
                    <img src="<?= get_template_directory_uri() ?>/assets/faviva-hero-image.webp" alt="Aluno homem de mochila e cadernos empolgado">
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

    <section id="vestibular">
        <div class="container">
            <div class="vestibular">
                <div class="vestibular__texto">
                    <h2>Muito mais segurança </br>em sua formação!</h2>
                    <p>Na <strong>FAVIVA</strong> você pode cursar sua graduação de forma tranquila e segura, com a garantia de alcançar o seu <strong>diploma registrado e reconhecido em todo o Território Nacional</strong>.</p>
                </div>
                <figure style="margin-bottom:0;">
                    <img src="<?= get_template_directory_uri(); ?>/assets/faviva-seguranca-diploma.webp" alt="Alunos usando um laptop">
                </figure>
            </div>
        </div>
    </section>

    <section id="graduacao">
        <div class="container">
            <h2>Cursos de Graduação</h2>
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
                    <p><strong>Não perca mais tempo</strong>! As matrículas estão abertas e as vagas são limitadas. <strong>Garanta logo a sua vaga!</strong></p>
                    <a class="botao botao__secundario" title="Faça a sua inscrição!" target="_blank" href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php">Comece o seu sonho agora! <i class="fa-solid fa-arrow-right-long"></i></a>
                </div>
            </div>
        </div>
    </section>

    
<?php get_footer(); ?>