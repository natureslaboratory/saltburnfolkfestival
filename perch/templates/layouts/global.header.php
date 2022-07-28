<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="/assets/images/favicon.jfif">
    <title><?php perch_pages_title(); ?></title>
    <?php perch_page_attributes(); ?>
    <script src="https://kit.fontawesome.com/5bcd9efe81.js" crossorigin="anonymous" type="module"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/base.css?v=<?= rand() ?>">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css?v=<?= rand() ?>">
</head>
<body>
    <header class="c-header" id="header">
        <a href="/"><img class="c-header__logo" src="/assets/images/sff_logo_white.png" alt="Saltburn Folk Festival Logo"></a>
        <button id="hamburger_button"><i class="fas fa-bars"></i></button>
        <div class="c-header__links" id="navigation">
            <div class="c-navigation__wrapper">
                <?php perch_pages_navigation() ?>
            </div>
            <!-- <div class="c-socials">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div> -->
            <?php perch_content_create("Social Icons", [ "template" => "socials.html" ]) ?>
            <?php perch_content_custom("Social Icons") ?>
        </div>
    </header>
    <div class="c-page">