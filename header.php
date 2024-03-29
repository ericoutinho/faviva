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

    <!-- Theme color mobile -->
    <meta name="theme-color" content="#1E8BB0">
    <!-- Favicon -->
    <link rel="icon" href="<?= get_template_directory_uri(); ?>/assets/favicon.svg">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>

    <nav class="menu-top">
        <div class="menu-container">
            <a href="<?= site_url("/") ?>">
                <img class="menu-brand" src="<?= get_template_directory_uri() ?>/assets/faviva-logomarca.svg" alt="Brand">
            </a>
            <button class="menu-toggle" aria-label="button"><i class="fa-solid fa-bars" onclick="menuToggle()"></i></button>
            <?php
                wp_nav_menu(
                    array(
                        "menu" => "top-menu",
                        "menu_class" => "menu-items",
                        "container" => ""
                    )
                );
            ?>
            <a class="menu-button" href="https://faviva.pincelatomico.net.br/" target="_blank">
                <i class="fa-solid fa-circle-user"></i>
                Portal Acadêmico
            </a>
        </div>
    </nav>

    <main>