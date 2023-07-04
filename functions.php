<?php
/**
 * The Functions for our theme
 * This is the template that displays all of the <head> section
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage faviva
 * @since faviva 1.0
 */

// Register Theme Features
function addThemeSuport()  {
	// Add theme support for Post Formats
	add_theme_support( 'post-formats', array( 'image', 'gallery' ));
	// Add theme support for Featured Images
	add_theme_support( 'post-thumbnails', array( 'post', 'page' ) );
	// Add theme support for document Title tag
	add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'addThemeSuport' );


// Set media sizes
function wpdocs_theme_setup() {
	add_image_size( 'cards', 400, 200, array("center", "center") );
	add_image_size( 'article', 450, 250, array("center", "center") );
	add_image_size( 'page-header', 900, 250, array("center", "center") );
}

add_action( 'after_setup_theme', 'wpdocs_theme_setup' );


// Carregando scripts e estilos
function wp_action_enqueue_scripts()
{
    wp_enqueue_script("scripts", get_template_directory_uri(). "/scripts/main.js", array(), filemtime(get_template_directory() . "/scripts/main.js"), true );
    wp_enqueue_script("modal-lgpd", get_template_directory_uri(). "/scripts/modal-lgpd.js", array(), filemtime(get_template_directory() . "/scripts/modal-lgpd.js"), true );
    wp_enqueue_script("modal-whatsapp", get_template_directory_uri(). "/scripts/modal-whatsapp.js", array(), filemtime(get_template_directory() . "/scripts/modal-whatsapp.js"), true );

    wp_enqueue_style('fontawesome', "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css");
    wp_enqueue_style('extras', get_template_directory_uri() . '/styles/main.min.css', array(), filemtime(get_template_directory() . '/styles/main.min.css'), false);
}

add_action('wp_enqueue_scripts', 'wp_action_enqueue_scripts', 10);


// Registrando menus
function register_primary_menu() {
    register_nav_menu( 'top-menu', __( 'Menu principal', 'faviva' ) );
    register_nav_menu( 'footer-menu', __( 'Menu do rodapé', 'faviva' ) );
}

add_action( 'after_setup_theme', 'register_primary_menu' );


// Envio de email de contato
function sendMyMail() {
	global $wpdb;

	$nome     = filter_input(INPUT_POST, "nome", FILTER_SANITIZE_STRING);
	$email    = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
	$telefone = filter_input(INPUT_POST, "telefone", FILTER_SANITIZE_STRING);
	$mensagem = filter_input(INPUT_POST, "mensagem", FILTER_SANITIZE_STRING);
	$data     = date("d/m/Y h:i:s");

	if ($nome != "" && $email != "" && $telefone != "" && $mensagem != "") {

		$body = "Mensagem enviada automaticamente pelo site faviva.com.br em {$data}.\n\n-------\n\nNOME: {$nome}\n\nEMAIL: {$email}\n\nTELEFONE: {$telefone}\n\nMENSAGEM: {$mensagem}\n\n-------\n\nA mensagem foi recebida pelo setor de atendimento ao cliente e em breve retornaremos com sua solicitação o mais breve possível. Caso desejar agilizar ainda mais o processo, você pode enviar uma mensagem para o nosso serviço de atendimento, através do Whatsapp (27) 99928-0910.\n\nCaso não tenha solicitado estas informações ou os dados informados pertençam a outra pessoa, pedimos que apague e desconsidere esta mensagem.\n\nFaculdade VIVA Vitória Ltda.\nMantenedora: Instituto VIVA Vitória\nAv. Fernando Ferrari, 1.094, Mata da Praia\nVitória - ES • CEP: 29066-380\ncontato@faviva.com.br\n(27) 99928-0910";

		// $options[] = "Content-Type: text/html; charset=UTF-8";
		$options[] = "Reply-To: {$nome} <{$email}>";
		$options[] = "Cc: {$nome} <{$email}>";

		$sended = wp_mail('contato@faviva.com.br', "📣 FAVIVA - Mensagem automática enviada pelo site faviva.com.br", $body, $options);
	
		if ($sended) {
			echo 'success';
		}
	}

	die();
}

add_action('wp_ajax_sendMyMail', 'sendMyMail');
add_action('wp_ajax_nopriv_sendMyMail', 'sendMyMail');


// OpenGraph settings
function doctype_opengraph($output) {
    return $output . '
    xmlns:og="http://opengraphprotocol.org/schema/"
    xmlns:fb="http://www.facebook.com/2008/fbml"';
}
add_filter('language_attributes', 'doctype_opengraph');


function facebook_open_graph() {
	global $post;
	$image = "";

	if (!is_singular()) {
		return;
	}

	if ( $excerpt = $post->post_excerpt ) {
		$excerpt = strip_tags( $post->post_excerpt );
		$excerpt = str_replace( "", "'", $excerpt );
	} else {
		$excerpt = get_bloginfo('description');
	}
 
	// Get image when possible
	if ( !has_post_thumbnail( $post->ID ) ) {
		$image = get_template_directory_uri() . "/assets/faviva-opengraph.webp";
	} else {
		$image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'medium' );
		$image =  esc_attr( $image[0] );
	}

	echo "\t<!-- OpenGraph Metatags -->\n";
	echo "\t<meta property='og:type' content='article'/>\n";
	echo "\t<meta property='og:url' content='" . get_permalink() . "'/>\n";
	echo "\t<meta property='og:title' content='" . get_the_title() . "'/>\n";
	echo "\t<meta property='og:description' content='{$excerpt}'/>\n";
	echo "\t<meta property='og:image' content='{$image}'/>\n";

	echo "\t<!-- Twitter Metatags -->\n";
	echo "\t<meta property='twitter:card' content='summary_large_image'>\n";
	echo "\t<meta property='twitter:url' content='" . get_permalink() . "'>\n";
	echo "\t<meta property='twitter:title' content='" . get_the_title() . "'>\n";
	echo "\t<meta property='twitter:description' content='{$excerpt}'>\n";
	echo "\t<meta property='twitter:image' content='{$image}'>\n";

	echo "";
}
add_action( 'wp_head', 'facebook_open_graph', 5 );


function showDocente( $atts = array()) {
	extract( shortcode_atts( array(
		'image' => 'https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?w=640&h=960',
		'name' => 'Nome do professor',
		'title' => 'Titulação',
		'link' => 'http://faviva.com.br'
	), $atts));

	return "<div class='docente-card'><img class='docente-img' src='{$image}'><div class='docente-body'><h5>{$name}</h5><p>{$title}</p><a href='{$link}'>Plataforma Lattes</a></div></div>";
}

add_shortcode('showdocente', 'showDocente');