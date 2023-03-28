<?php
/**
 * The Header for our theme
 *
 * This is the template that displays all of the <head> section
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage faviva
 * @since faviva 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Primary Meta Tags -->
    <title><?php bloginfo('title'); ?></title>
    <meta name="description" content="<?php bloginfo("description") ?>">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="<?php bloginfo("url"); ?>">
    <meta property="og:title" content="<?php bloginfo("title") ?>">
    <meta property="og:description" content="<?php bloginfo("description") ?>">
    <meta property="og:image" content="<?= get_template_directory_uri() ?>/assets/faviva-meta-imagem.webp">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="<?php bloginfo("url"); ?>">
    <meta property="twitter:title" content="<?php bloginfo("title") ?>">
    <meta property="twitter:description" content="<?php bloginfo("description") ?>">
    <meta property="twitter:image" content="<?= get_template_directory_uri() ?>/assets/faviva-meta-imagem.webp">

    <!-- Theme color mobile -->
    <meta name="theme-color" content="#1E8BB0">

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri(); ?>/assets">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri(); ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri(); ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri(); ?>/assets/site.webmanifest">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= get_template_directory_uri(); ?>/styles/main.min.css?v=<?=wp_get_theme()->get('Version')?>">

    <script src="<?= get_template_directory_uri(); ?>/scripts/main.js" defer></script>
    <script src="<?= get_template_directory_uri(); ?>/scripts/modal-lgpd.js" defer></script>
    <script src="<?= get_template_directory_uri(); ?>/scripts/modal-whatsapp.js" defer></script>

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

    <header>

        <nav class="menu">
            <div class="menu__colapse">

                <!-- Brand -->
                <a class="menu__brand" href="<?= home_url("/"); ?>" title="FAVIVA" alt="Logomarca da FAVIVA">
                    <img src="<?= get_template_directory_uri(); ?>/assets/faviva-logomarca.svg" alt="Logomarca FAVIVA">

                </a>
                <!-- Toggle button -->
                <button class="menu__toggle"><i class="fa-solid fa-bars"></i></button>

                <!-- Menu links -->
                <ul class="menu__links">
                    <!-- <li><a href="<?=home_url("sobre")?>">Sobre</a></li> -->

                    <li class="menu__dropdown">
                        <span>Sobre <i class="fas fa-caret-down"></i></span>
                        <ul>
                            <li><a href="<?=home_url("sobre")?>">A FAVIVA</a></li>
                            <li><a href="<?=home_url("cadastro-no-e-mec")?>">Cadastro no e-MEC</a></li>
                            <li><a href="<?=home_url("como-chegar-na-faviva")?>">Como chegar até aqui</a></li>
                            <li><a href="<?=home_url("validacao-de-documentos")?>">Validação de documentos</a></li>
                        </ul>
                    </li>

                    <li class="menu__dropdown">
                        <span>Graduação <i class="fas fa-caret-down"></i></span>
                        <ul>
                            <li><a href="<?=home_url("direito")?>">Direito</a></li>
                            <li><a href="<?=home_url("arquitetura-e-urbanismo")?>">Arquitetura e Urbanismo</a></li>
                            <li><a href="<?=home_url("ciencias-contabeis")?>">Ciências Contábeis</a></li>
                        </ul>
                    </li>

                    <li><a target="_blank" href="https://faviva.pincelatomico.net.br/externos/nova_matricula/matricula.php">Matrículas</a></li>
                    <li><a href="<?=home_url("contato")?>">Contato</a></li>
                    <li><a href="<?=home_url("blog")?>">Blog</a></li>
                    <li><a href="https://faviva.pincelatomico.net.br/" target="_blank" class="botao botao__primario"><i class="fa-solid fa-circle-user"></i> Portal Acadêmico</a></li>
                </ul>
            </div>
        </nav>

    </header>

    <main>