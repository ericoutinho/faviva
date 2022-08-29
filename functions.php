<?php
/**
 * The Functions for our theme
 *
 * This is the template that displays all of the <head> section
 *
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