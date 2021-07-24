<!DOCTYPE html>
<html lang="<?= bloginfo('language') ?>">

<head>
    <meta charset="<?= bloginfo('charset') ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= wp_title('|') || bloginfo('site'); ?></title>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/assets/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/assets/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/assets/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/assets/site.webmanifest">

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/custom.css">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?> data-bs-spy="scroll" data-bs-target="#menu-superior" data-bs-offset="63"> 
<?php wp_body_open(); ?>