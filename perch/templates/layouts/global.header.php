<?php if (!defined('PERCH_RUNWAY')) include($_SERVER['DOCUMENT_ROOT'] . '/perch/runtime.php'); ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php perch_pages_title(); ?></title>
    <?php perch_page_attributes(); ?>
    <script src="https://kit.fontawesome.com/5bcd9efe81.js" crossorigin="anonymous" type="module"></script>
    <link rel="stylesheet" type="text/css" href="/assets/css/base.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css">
</head>
<body>
    <header class="c-header" id="header">
        <img class="c-header__logo" src="/assets/images/sff_logo.png" alt="Saltburn Folk Festival Logo">
        <button id="hamburger_button">Menu</button>
        <div class="c-header__links" id="navigation">
            <div class="c-navigation__wrapper">
                <div class="c-navigation">
                    <a href="about">About</a>
                    <a href="artists">Artists</a>
                    <a href="contact">Contact</a>
                </div>
            </div>
            <div class="c-socials">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </header>
    <section class="l-block" style="background-image: url('/assets/images/beach.jpg')">
        <ul class="l-restrict c-big-links">
            <li>
                <a href="/about">About</a>
            </li>
            <li>
                <a href="/contact">Contact</a>
            </li>
        </ul>
    </section>
    <section class="l-block l-block--primary l-block--center">
        <div class="l-restrict c-big-text">
            <p>Thanks to all that attended the Saltburn Folk Festival 2021 Virtual Gathering</p>
            <p>Join us next year for the 2022 Saltburn Folk Festival!</p>
        </div>
    </section> 
    <section class="l-block l-block--secondary">
        <div class="l-restrict c-text-image c-animated c-animated--fade" data-animation-delay="100">
            <div class="c-text-image__text">
                <p>Over half a century of British Folk Music, Song, and Dance in the North East of England</p>
                <a href="about">Learn more about our story.</a>
            </div>
            <img src="/assets/images/dance.jpg" alt="Dancing">
        </div>
    </section> 
    <div style="height: 2000px"></div>