<?php

$message_sent = false;

if (isset($_POST['email']) && $_POST['email'] != '') {

    if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {



        $userName = $_POST['name'];
        $userEmail = $_POST['email'];
        $messageSubject = $_POST['subject'];
        $message = $_POST['message'];

        $to = "georget.portfolio@gmail.com";
        $body = "";

        $body .= "From: " . $userName . "\r\n";
        $body .= "Email: " . $userEmail . "\r\n";
        $body .= "Message: " . $message . "\r\n";

        mail($to, $messageSubject, $body);

        $message_sent = true;
    }
}
?>




<!DOCTYPE html>

<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/style2.css">
    <link rel="stylesheet" href="assets/css/button.css">
    <link rel="stylesheet" href="assets/css/skill.css">

    <link rel="icon" href="./assets/img/icon.ico" />
    <title>Louis Georget</title>
</head>

<body>
    <nav class="navbar navbar-expand-md  fixed-top maine-menu">
        <div class="container">
            <button class="navbar-toggler ml-auto" data-target="#my-nav" onclick="myFunction(this)" data-toggle="collapse"> <span class="bar1"></span> <span class="bar2"></span> <span class="bar3"></span>
            </button>
            <div id="my-nav" class="collapse navbar-collapse">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item active"> <a class="nav-link" href="#">Home</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="#about" tabindex="-1" aria-disabled="true">About</a>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="#activity" tabindex="-1" aria-disabled="true">Récent</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#portfolio" tabindex="-1" aria-disabled="true">Portfolio</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#testimonial" tabindex="-1" aria-disabled="true">Compétences</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#social" tabindex="-1" aria-disabled="true">Social</a></li>
                    <li class="nav-item"> <a class="nav-link" href="#contact" tabindex="-1" aria-disabled="true">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid fh5co-home-banner">
        <div class="card"> <img class="card-img" src="assets/img/banner-img.jpg" alt="">
            <div class="card-img-overlay">
                <div class="center-text">
                    <h1 class="titre2">Louis</h1>
                    <h1 class="titre">GEORGET</h1>
                    <a href="#about" type="button" class="btn2 btn middle btn1 degage">
                        Explorer</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid fh5co-two-img" id="about">
        <div class="row">
            <div class="col-sm-6 pr-0 pl-0">
                <div class="card"> <img class="card-img" src="assets/img/girl1.jpg" alt="louis 1">
                    <div class="card-img-overlay"> </div>
                </div>
            </div>
            <div class="col-sm-6 pr-0 pl-0">
                <div class="card"> <img class="card-img" src="assets/img/girl2.jpg" alt="louis 2">
                    <div class="card-img-overlay"> </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid fh5co-recent-work">
        <div class="container contact-pop">
            <div class="row">
                <div class="col-md-6  pr-0">
                    <div class="card"> <img class="card-img w-100" src="assets/img/girl3.jpg" alt="louis 3">
                        <div class="card-img-overlay"> </div>
                    </div>
                </div>
                <div class="col-md-6 pl-0">
                    <div class="content">
                        <h3>Louis Georget</h3>
                        <h4>Graphiste amateur</h4>
                        <hr />
                        <p>Je suis diplômé du Bac S et actuellement en
                            deuxième année de licence informatique à l’Université du Mans. <br>
                            Je m’intéresse à beaucoup de facettes de l’informatique, surtout lorsque cela demande de la
                            créativité. <br>
                            Je fais principalement du graphisme, de la musique, du dessin et de la vidéo. </p>
                        <a id="activity" type="button" href="#contact" class="btn btn1 btn2 btn3">CONTACTER</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container recent">
            <div class="row">
                <h2>Travaux récents</h2>
                <div class="owl-carousel owl-carousel2 owl-theme">
                    <a target="_blank" href="http://utema.tech">
                        <div class="card"> <img class="card-img" src="assets/img/recent-img1.jpg" alt="utema.tech">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">UTEMA</h5>
                                    <p class="card-text">HTML5, CSS3</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="https://www.youtube.com/channel/UCHDN_fyd8Xpk6jT5Xtx_neQ">
                        <div class="card"> <img class="card-img" src="assets/img/recent-img2.jpg" alt="Agent cog">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Agent Cog</h5>
                                    <p class="card-text">Dessins, illustrations</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="https://www.twitch.tv/spiich_tv">
                        <div class="card"> <img class="card-img" src="assets/img/recent-img3.jpg" alt="LeSpawnFR">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">LeSpawnFR</h5>
                                    <p class="card-text">Graphisme, overlays</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a target="_blank" href="https://www.instagram.com/aaluxury_rally">
                        <div class="card"> <img class="card-img" src="assets/img/recent-img4.jpg" alt="AALuxury-Rally">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">AALuxury-Rally</h5>
                                    <p class="card-text">Graphisme, bannières</p>
                                </div>
                            </div>
                        </div>
                    </a>
                    <a href="#portfolio">
                        <div class="card"> <img class="card-img" src="assets/img/recent-img5.jpg" alt="En voir plus">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="container-fluid recent fh5co-portfolio" id="portfolio">
        <div class="container">
            <h2>Portfolio</h2>
            <div class="row">

                <div class="bx bx-2">
                    <a target="_blank" href="./assets/img/agentcog.png">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img2.png" alt="Personnage cartoon">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Dessin Cartoon</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-3">
                    <a target="_blank" href="./assets/img/pub.jpg">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img3.png" alt="Affiche pour super u">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Affiche publicitaire</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-1">
                    <a target="_blank" href="./assets/img/M&S.png">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img1.png" alt="Dessin de deux personnages">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Dessin Manga</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-1">
                    <a target="_blank" href="./assets/img/BD.jpg">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img11.png" alt="Dessin de deux personnages">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">BD</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-2">
                    <a target="_blank" href="https://www.youtube.com/channel/UC2ohu73bjCxPko4vvO3yfSw/videos">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img10.png" alt="Personnage cartoon">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Vidéo</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-3">
                    <a target="_blank" href="./assets/img/Moon Horror.png">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img9.png" alt="Affiche pour super u">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Photomontage</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-middle" style="padding: 0;">
                    <a target="_blank" href="http://utema.tech">
                        <div class="bx bx-4">
                            <div class="card"> <img class="card-img" src="assets/img/portfolio-img4.png" alt="Site internet">
                                <div class="card-img-overlay">
                                    <div class="bottom-text">
                                        <h5 class="card-title">Site Web</h5>
                                    </div>
                                </div>
                            </div>
                    </a>
                </div>


                <div class="bx bx-5">
                    <a target="_blank" href="./assets/img/Anim.gif">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img5.png" alt="Personnage animé en 2D">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Animation 2D</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-6">
                    <a target="_blank" href="./assets/img/overlay.gif">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img6.png" alt="Overlay de stream">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Overlay de stream</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-7">
                    <a target="_blank" href="./assets/img/Offline.png">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img7.png" alt="Banniere">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Bannière</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="bx bx-8">
                    <a target="_blank" href="./assets/img/graphics.png">
                        <div class="card"> <img class="card-img" src="assets/img/portfolio-img8.png" alt="">
                            <div class="card-img-overlay">
                                <div class="bottom-text">
                                    <h5 class="card-title">Logo</h5>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>


    <div class="container-fluid fh5co-recent-work activity">
        <div class="container recent">
            <div class="row">
                <h2>Musique</h2>
                <div class="owl-carousel owl-carousel3 owl-theme">
                    <div>
                        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/881384362&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/ronteah-rth" title="Ronteah" target="_blank" style="color: #cccccc; text-decoration: none;">Ronteah</a> · <a href="https://soundcloud.com/ronteah-rth/in-trouble" title="in Trouble" target="_blank" style="color: #cccccc; text-decoration: none;">in Trouble</a></div>
                    </div>
                    <div>
                        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/826567882&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/ronteah-rth" title="Ronteah" target="_blank" style="color: #cccccc; text-decoration: none;">Ronteah</a> · <a href="https://soundcloud.com/ronteah-rth/neverwannago" title="Never Wanna Go - ft. Michael Mayo" target="_blank" style="color: #cccccc; text-decoration: none;">Never Wanna Go - ft. Michael Mayo</a></div>
                    </div>
                    <div>
                        <iframe width="100%" height="300" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/796938049&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"></iframe>
                        <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/ronteah-rth" title="Ronteah" target="_blank" style="color: #cccccc; text-decoration: none;">Ronteah</a> · <a href="https://soundcloud.com/ronteah-rth/shurya" title="Shurya" target="_blank" style="color: #cccccc; text-decoration: none;">Shurya</a></div>
                    </div>
                    <div class="card">
                        <a target="_blank" href="https://soundcloud.com/ronteah-rth">
                            <img class="card-img1" src="assets/img/voir plus.jpg" alt="En voir plus">
                            <div class="card-img-overlay">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid fh5co-about-me" id="testimonial">
        <div id="my-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="card"> <img class="card-img d-block w-100" src="assets/img/about-me-img.jpg" alt="Louis vue contre plongée">
                    <div class="card-img-overlay">
                        <h2 class="titre">Competences</h2>

                        <div class="skills-area">

                            <div class="skill">
                                <div class="skill-title">Photoshop - Graphisme</div>
                                <div class="skill-bar"></div>
                                <div class="ps skill-fill">
                                    <span class="skill-percent">85%</span>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skill-title">Illustrator - Vectoriel</div>
                                <div class="skill-bar"></div>
                                <div class="ai skill-fill">
                                    <span class="skill-percent">75%</span>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skill-title">Ableton Live 10 - Musique</div>
                                <div class="skill-bar"></div>
                                <div class="als skill-fill">
                                    <span class="skill-percent">75%</span>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skill-title">Clip Studio PAINT - Dessin</div>
                                <div class="skill-bar"></div>
                                <div class="csp skill-fill">
                                    <span class="skill-percent">70%</span>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skill-title">Premier Pro - Vidéo</div>
                                <div class="skill-bar"></div>
                                <div class="pp skill-fill">
                                    <span class="skill-percent">70%</span>
                                </div>
                            </div>

                            <div class="skill">
                                <div class="skill-title">HTML5 & CSS3</div>
                                <div class="skill-bar"></div>
                                <div class="html skill-fill">
                                    <span class="skill-percent">60%</span>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div id="social" class="container-fluid fh5co-insta-feed activity">
        <div class="container recent">
            <div class="row mb-5 pb-5">
                <div class="col-lg-6">
                    <div class="twit-box">
                        <div class="media mb-3"> <img class="align-self-start mr-3 rounded-circle" src="assets/img/pp-twi.png" alt="Photo de profil twitter @ronteahri">
                            <div class="media-body">
                                <h5 class="mb-0 mt-3">Louis</h5>
                                <p>@ronteahri</p>
                            </div>
                        </div>
                        <p class="text-justify"> Je suis assez actif sur Twitter, bien que je ne poste ou reposte que rarement.
                            En revanche, lorsque je considère quelque chose d'important à partager comme par exemple les musiques
                            que je compose, alors je partage. Sinon je like des dessins ou des actus.<blockquote class="blockquote text-right">
                                <p class="mb-0"></p>
                                <div class="blockquote-footer">concernant Twitter</div>
                            </blockquote>
                        </p>
                        <div class="clearfix"> <a target="_blank" href="https://twitter.com/ronteahri" class="btn btn-primary mt-2 float-right">Follow</a> </div>
                    </div>
                </div>
                <div class="col-lg-6 feed-caro">
                    <h2>Instagram feed</h2>
                    <div class="owl-carousel owl-carousel4 owl-theme">

                        <div>
                            <div class="card">
                                <a target="_blank" href="https://www.instagram.com/p/CGwzKuYl7-S/?utm_source=ig_web_copy_link">
                                    <img class="card-img" src="assets/img/feed-img1.png" alt="Poste instagram @ronteahri 1">
                                    <div class="card-img-overlay"> </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <a target="_blank" href="https://www.instagram.com/p/CGagBbNsW6I/?utm_source=ig_web_copy_link">
                                    <img class="card-img" src="assets/img/feed-img2.png" alt="Poste instagram @ronteahri 2">
                                    <div class="card-img-overlay"> </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <a target="_blank" href="https://www.instagram.com/p/CGYAa6yscSG/?utm_source=ig_web_copy_link">
                                    <img class="card-img" src="assets/img/feed-img3.png" alt="Poste instagram @ronteahri 3">
                                    <div class="card-img-overlay"> </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <a target="_blank" href="https://www.instagram.com/p/CGVXco2M9ly/?utm_source=ig_web_copy_link">
                                    <img class="card-img" src="assets/img/feed-img4.png" alt="Poste instagram @ronteahri 4">
                                    <div class="card-img-overlay"> </div>
                                </a>
                            </div>
                        </div>

                        <div>
                            <div class="card">
                                <a target="_blank" href="https://instagram.com/ronteahri">
                                    <img class="card-img" src="assets/img/plus-voir.png" alt="En voir plus">
                                    <div class="card-img-overlay"> </div>
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <h2 class="text-center d-block">Mes réseaux sociaux</h2>
            <div class="row social-links">
                <ul class="nav mx-auto">

                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://instagram.com/ronteahri"><img src="assets/img/insta.png" alt="icone instagram"></a>
                    </li>

                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://twitter.com/ronteahri"><img src="assets/img/twitter.png" alt="icone twitter"></a>
                    </li>

                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://soundcloud.com/ronteah-rth"><img src="assets/img/soundcloud.png" alt="icone soundcloud"></a>
                    </li>

                    <li class="nav-item"> <a class="nav-link" target="_blank" href="https://youtube.com/channel/UC2ohu73bjCxPko4vvO3yfSw"><img src="assets/img/youtube.png" alt="icone youtube"></a>
                    </li>

                </ul>
            </div>
        </div>
    </div>



    <footer class="container-fluid p-0 pr-0">
        <div class="row mr-0 ml-0">

            <div class="col-md-6 pr-0 pl-0 map">

                <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                    <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                    <script>
                        (function() {
                            var setting = {
                                "height": 875,
                                "width": 1200,
                                "zoom": 11,
                                "queryString": "Le Mans, France",
                                "place_id": "ChIJMarzFNKI4kcRf-B9akxdAmk",
                                "satellite": false,
                                "centerCoord": [47.981925665571744, 0.1956924623117695],
                                "cid": "0x69025d4c6a7de07f",
                                "lang": "fr",
                                "cityUrl": "/france/le-mans-912",
                                "cityAnchorText": "Carte de Le Mans, Pays de la Loire, France",
                                "id": "map-9cd199b9cc5410cd3b1ad21cab2e54d3",
                                "embed_id": "313051"
                            };
                            var d = document;
                            var s = d.createElement('script');
                            s.src = 'https://1map.com/js/script-for-user.js?embed_id=313051';
                            s.async = true;
                            s.onload = function(e) {
                                window.OneMap.initMap(setting)
                            };
                            var to = d.getElementsByTagName('script')[0];
                            to.parentNode.insertBefore(s, to);
                        })();
                    </script><a href="https://1map.com/fr/map-embed">1 Map</a>
                </div>

            </div>

            <div class="col-md-6 content-us">
                <div class="contact-form" id="contact">

                    <h3 class="text-uppercase">Me contacter</h3>
                    <form action="index.php" method="POST" class="form">

                        <?php
                        if ($message_sent) :
                        ?>
                            <h3>Votre message a été envoyé !</h3>
                        <?php
                        else :
                        ?>

                            <input type="text" class="form-control" id="name" name="name" placeholder="Votre Nom" tabindex="1" required>

                            <input type="email" class="form-control" id="email" name="email" placeholder="votre@email.com" tabindex="2" required>

                            <input type="text" class="form-control" id="subject" name="subject" placeholder="Objet" tabindex="3" required>

                            <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter votre message..." tabindex="4"></textarea>

                            <button type="submit">Envoyer</button>

                        <?php
                        endif;
                        ?>

                    </form>
                </div>
            </div>
        </div>

        <div class="copy pt-4 pb-4">
            <p><a href="https://freehtml5.co/" target="_blank"> &copy; 2020</a> &nbsp; - &nbsp;<a href="https://freehtml5.co/" target="_blank">Louis GEORGET</a> &nbsp; <br> &nbsp; All rights reserved.
            </p>
        </div>

    </footer>


    <script src="assets/js/jquery-3.3.1.slim.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/main2.js"></script>

</body>

</html>