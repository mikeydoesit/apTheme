<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php wp_title(); ?></title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css">
    <?php wp_head(); ?>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-148571704-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-148571704-1');
    </script>
</head>
<body <?php body_class() ?>>
<div class="loader">
    <!-- <img src="<?php echo get_bloginfo('template_directory'); ?>/img/aplogo.png" alt=""> -->
</div>
    <main>
    <div id="mobileMenuNavLinks">
        <a href="/" class="home">Home</a>
        <a href="/category/fashion/" class="fashion">Fashion</a>
        <a href="/category/skinhair/" class="skinhair">Skin & Hair</a>
        <a href="/category/food/" class="food">Food</a>
        <a href="/category/tech/" class="tech">Tech</a>
        <a href="/category/inspiration/" class="inspiration">Inspiration</a>
        <a href="/category/culture/" class="culture">Culture</a>
        <a href="/category/businessfinance/" class="businessfinance">Business & Finance</a>
    </div>
        <header>
        <div id="headerLeft">
        <a href="/"><img class="logo" src="<?php echo get_bloginfo('template_directory'); ?>/img/trunclogo.png" alt=""></a>
        <div id="mobileMenu">
                
                <a href="javascript:void(0);" class="icon" onclick="toggleMobileMenu()">
                    <i class="fas fa-bars fa-2x"></i>
                </a>
            </div>
        </div>
            
            <div id="navLinks">
                <nav>
                    <a href="/" class="home">Home</a>
                    <a href="/category/fashion/" class="fashion">Fashion</a>
                    <a href="/category/skinhair/" class="skinhair">Skin & Hair</a>
                    <a href="/category/food/" class="food">Food</a>
                    <a href="/category/tech/" class="tech">Tech</a>
                    <a href="/category/inspiration/" class="inspiration">Inspiration</a>
                    <a href="/category/culture/" class="culture">Culture</a>
                    <a href="/category/businessfinance/" class="businessfinance">Business & Finance</a>
                </nav>
            </div>
            <div class="socMedLinks">
                <a href="https://www.instagram.com/the_afropost/" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="https://www.youtube.com/channel/UCuCVy9fg3UhtyRSjfMyMLVQ/" target="_blank"><i class="fab fa-youtube"></i></a>
                <a href="https://twitter.com/afro_post" target="_blank"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </header>
        <hr id="header-divider"/>