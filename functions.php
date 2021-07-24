<?php

function ajaxSendMessage()
{
    $emailAdmin = "ericoutinho@gmail.com";

    if ($_POST) {
        $nome     = filter_input(INPUT_POST, "nome");
        $email    = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
        $telefone = filter_input(INPUT_POST, "telefone");
        $mensagem = filter_input(INPUT_POST, "mensagem");
        $agora    = date("d/m/Y \à\s h:i:s");

        if (empty($nome) || empty($email) || empty($telefone) || empty($mensagem)) {
            exit();
        }

        $template = file_get_contents( get_template_directory()."/templateEmailAdmin.html");
        $search   = array("@nome", "@email", "@telefone", "@mensagem", "@agora");
        $replace  = array($nome, $email, $telefone, $mensagem, $agora);
        $html     = str_replace( $search, $replace, $template);

        $headers  = array('Content-Type: text/html; charset=UTF-8');

        if (wp_mail($emailAdmin, "🔔 Mensagem enviada do site " . bloginfo('site'), $html, $headers)) {
            echo "enviado";
        }
        exit();
    }
}

add_action('wp_ajax_nopriv_ajaxSendMessage', 'ajaxSendMessage');
add_action('wp_ajax_ajaxSendMessage', 'ajaxSendMessage');
