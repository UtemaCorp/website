<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title>UTEMA - Aide Numérique</title>

    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" />
    <meta property="og:title" content="UTEMA" />
    <meta property="og:type" content="informatique.multimedia" />
    <meta property="og:url" content="https://utema.fr/" />
    <meta property="og:image" content="https://utema.fr/assets/img/Logo.png" />

    <meta name="description" content="Utema a pour but de favoriser l’accès au numérique et à la compréhension de ses 
    outils de mise en œuvre, en accompagnant professionnels et particuliers, par le biais de tous les moyens actuels et futurs disponibles.">

    <link rel="icon" href="assets/img/icon.ico" />


    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/ionicons.min.css">
    <link rel="stylesheet" href="assets/css/Carousel-Hero.css">
    <link rel="stylesheet" href="assets/css/Dark-NavBar.css">
    <link rel="stylesheet" href="assets/css/Footer-Dark.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="assets/css/Responsive-Blog-Library.css">
    <link rel="stylesheet" href="assets/css/Social-Icons.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="assets/css/background.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/Full-Height-Hero.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu-1.css">
    <link rel="stylesheet" href="assets/css/Sidebar-Menu.css">
    <link rel="stylesheet" href="assets/css/top.css">

</head>


<!-- Nav -->

<body style="background: #001933;">


    <div id="wrapper" class="aled">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li> <img class="adjust" src="assets/img/Blanc.png" alt="logo utema blanc"> </li>
                <li class="sidebar-brand"><span>UTEMA</span></li>
                <li> <a href="#hero">Accueil</a></li>
                <li> <a href="#services">Services</a></li>
                <li> <a href="#about">À propos</a></li>
                <li> <a href="#contact">Contacter</a></li>
            </ul>
        </div>
        <div class="page-content-wrapper">
            <div>

                <a style="text-decoration: none;" id="menu-toggle" href="#menu-toggle" class="gotopbtn attention">
                    <div class="swag">:)</div>
                </a>

                <!-- End Nav -->


                <!-- Hero -->


                <section id="hero">

                    <header>
                        <nav class="navbar navbar-dark navbar-expand-md" data-speed="0.1" style="z-index: 20;">
                            <div class="hero big-title translate">
                                <div class="decale">

                                    <?php
                                    //modification du css suivant le navigateur
                                    //$_SERVER["HTTP_USER_AGENT"] : variable donnant le navigateur

                                    if ($_SERVER["HTTP_USER_AGENT"] == 'Mozilla/5.0 (Windows NT 10.0; Win64; x64; rv:85.0) Gecko/20100101 Firefox/85.0') {

                                        echo '<h1 style="margin-top: 30%; margin-left: -15%; font-size: 100px;">Bonjour, <span></span></h1>
                                        <h1 style="margin-top: -3%; margin-left: 0%; font-size: 100px;">Bienvenue chez <span></span></h1>
                                        <h1 class="rambla" style="font-size: 140px; margin-left: 20%; margin-top: -2%;">UTEMA <span></span></h1>';
                                    } else {
                                        echo '<h1 style="margin-top: 25%;">Bonjour, <span></span></h1>
                                        <h1 style="margin-top: -3%;">Bienvenue chez <span></span></h1>
                                        <h1 class="rambla" style="font-size: 150px; margin-top: -2%;">UTEMA <span></span></h1>';
                                    }
                                    ?>
                                </div>
                            </div>
                        </nav>

                        <img src="assets/img/premier.png" class="person translate" data-speed="-0.45" alt="">
                        <img src="assets/img/deuxieme.png" class="mountain2 translate" data-speed="0.15" alt="">
                        <img src="assets/img/troisieme.png" class="mountain3 translate" data-speed="0.3" alt="">
                        <img src="assets/img/fond.png" class="sky translate" style="display: none;" data-speed="0.5" alt="">

                        <nav class="navbar navbar-dark navbar-expand-md" style="z-index: 100000;">
                            <div class="hero">
                                <div class="decale enfonction">
                                    <h1>Bonjour, <span></span></h1>
                                    <h1>Bienvenue chez <span></span></h1>
                                    <h1 class="rambla">UTEMA <span></span></h1>

                                </div>
                            </div>
                        </nav>
                    </header>


                </section>

                <!-- End Hero -->



                <!-- Services -->

                <div id='services'></div>
                <section style="background: #00050a; padding-bottom: 0px;padding-top: 52px;margin-top: 0px;">
                    <div class="container" style="background: #00050a;">
                        <h1 class="mx-auto" style="text-align: center;margin: 53px; margin-top: 10px; background: #00050a;color: #f5faff;font-size: 50px;">SERV<span style="color: #007fff;">I</span>CES</h1>
                        <p class="text-center" style="color: #f5faff;">L'équipe UTEMA œuvre dans plusieurs domaines, de la programmation<br>au graphisme en passant par la
                            photographie.<br>Découvrez comment UTEMA peut vous être utile.<br></p>
                    </div>

                    <hr class="d-flex mx-auto" style="background: #f5faff;margin-top: 40px;margin-bottom: -40px;width: auto;max-width: 380px;">
                    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="margin-top: 81px;">

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="jumbotron hero-nature carousel-hero">
                                    <h1 class="hero-title">Programmation</h1>
                                    <p class="hero-subtitle">Programmes, petits logiciels, sites web statiques ou dynamiques, base de données et bien d'autres…<br></p>
                                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">En savoir plus</a></p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="jumbotron hero-photography carousel-hero">
                                    <h1 class="hero-title">Graphisme</h1>
                                    <p class="hero-subtitle">Logos, illustrations, designs, chartres graphiques, web design, affiches, overlays, animations et bien d'autres...
                                    </p>
                                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">En savoir plus</a></p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="jumbotron hero-technology carousel-hero">
                                    <h1 class="hero-title">Photographie</h1>
                                    <p class="hero-subtitle">Portraits, backgrounds, scènes, macro, panning shots, photos de produits, retouches et bien d'autres...
                                    </p>
                                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">En savoir plus</a></p>
                                </div>
                            </div>

                            <div class="carousel-item">
                                <div class="jumbotron hero-video carousel-hero">
                                    <h1 class="hero-title">Vidéo/Montage</h1>
                                    <p class="hero-subtitle">Montages vidéos, post-productions, scènes, animations, court-métrages et bien d'autres...
                                    </p>
                                    <p><a class="btn btn-primary btn-lg hero-button" role="button" href="#">En savoir plus</a></p>
                                </div>
                            </div>

                        </div>

                        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><i class="fa fa-chevron-left"></i><span class="sr-only">
                                    Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><i class="fa fa-chevron-right"></i><span class="sr-only">
                                    Next</span></a></div>
                        <ol class="carousel-indicators">
                            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-1" data-slide-to="1"></li>
                            <li data-target="#carousel-1" data-slide-to="2"></li>
                            <li data-target="#carousel-1" data-slide-to="3"></li>
                        </ol>
                    </div>
                </section>

                <!-- End Services -->



                <!-- About -->

                <section id='about' data-aos="fade-right" style="margin-top: 0px;background: #001933;margin-bottom: -34px;padding-bottom: -63px;">
                    <div class="container" style="background: #001933;margin-top: 0px;padding-top: 3px;">
                        <h1 class="mx-auto" style="text-align: center;margin: 53px;background: #001933;color: #f5faff;font-size: 50px;"><span style="color: #007fff;">À
                            </span>&nbsp;PROPOS</h1>
                        <p class="text-center" style="color: #f5faff;">Découvrez les membres de l'équipe et apprenez en plus sur UTEMA.<br></p>
                    </div>
                    <hr class="d-flex mx-auto" style="background: #f5faff;margin-top: 36px;margin-bottom: 32px;width: auto;max-width: 380px;">

                    <section class="card-section-imagia" style="background: #001933;margin-top: 32px;padding-bottom: -26px;">
                        <section class="card-section-imagia" style="background: #001933;margin-top: -62px;padding-top: 21px;padding-bottom: -35px;">
                            <div class="container" style="max-width: 1200px;">
                                <div class="row" style="background: #001933;">

                                    <div class="col-sm-6 col-md-4">
                                        <div class="card-container-imagia">
                                            <div class="card-imagia">
                                                <div class="front-imagia">
                                                    <div class="cover-imagia"><img alt="president" src="assets/img/pres.jpg"></div>
                                                    <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="francois" src="assets/img/francois.jpg"></div>
                                                    <div class="content-imagia">
                                                        <h3 class="name-imagia">François Pannier</h3>
                                                        <p class="subtitle-imagia">Président</p>
                                                        <p class="text-center reduise"><em>
                                                                Président de UTEMA, se charge de la paperasse et de la communication.
                                                            </em></p>
                                                    </div>
                                                    <a target="_blank" href="portfolio/francois/index.html">
                                                        <div class="footer-imagia"><span>Voir le portfolio</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4">
                                        <div class="card-container-imagia">
                                            <div class="card-imagia">
                                                <div class="front-imagia">
                                                    <div class="cover-imagia"><img alt="programmeur" src="assets/img/dev.jpg"></div>
                                                    <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="romain" src="assets/img/romain.JPG"></div>
                                                    <div class="content-imagia">
                                                        <h3 class="name-imagia">Romain Laval</h3>
                                                        <p class="subtitle-imagia">Développeur</p>
                                                        <p class="text-center reduise"><em>
                                                                Photographe et développeur C#, C, Python et bien d'autres encore, chargé de la programmation au sein de l'équipe.
                                                            </em></p>
                                                    </div>
                                                    <a target="_blank" href="portfolio/romain/index.html">
                                                        <div class="footer-imagia"><span>Voir le portfolio</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-sm-6 col-md-4">
                                        <div class="card-container-imagia">
                                            <div class="card-imagia">
                                                <div class="front-imagia">
                                                    <div class="cover-imagia"><img alt="graphiste" src="assets/img/graph.JPG"></div>
                                                    <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="louis" src="assets/img/louis.jpg"></div>
                                                    <div class="content-imagia">
                                                        <h3 class="name-imagia">Louis Georget</h3>
                                                        <p class="subtitle-imagia">Graphiste</p>
                                                        <p class="text-center reduise"><em>
                                                                Graphiste, illustrateur, web designer et bien plus, chargé de tout ce qui touche au visuel et à la création en tous genre.
                                                            </em></p>
                                                    </div>
                                                    <a target="_blank" href="portfolio/louis/index.html">
                                                        <div class="footer-imagia">Voir le portfolio</span></div>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <section class="card-section-imagia" style="background: #001933;">
                                <div class="container" style="max-width: 1200px;">
                                    <div class="row" style="background: #001933;margin-top: -64px;padding-bottom: -27px;">
                                        <div class="col-sm-6 col-md-4 d-flex ml-auto">
                                            <div class="card-container-imagia">
                                                <div class="card-imagia">
                                                    <div class="front-imagia">
                                                        <div class="cover-imagia"><img alt="securite" src="assets/img/secu.jpg"></div>
                                                        <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="nathan" src="assets/img/nathan.jpg"></div>
                                                        <div class="content-imagia">
                                                            <h3 class="name-imagia">Nathan Labbé</h3>
                                                            <p class="subtitle-imagia">Sécurité Informatique</p>
                                                            <p class="text-center reduise"><em>
                                                                    Chargé de la sécurité informatique et du réseaux au sein de UTEMA.
                                                                </em></p>
                                                        </div>
                                                        <a target="_blank" href="portfolio/nathan/index.html">
                                                            <div class="footer-imagia"><span>Voir le portfolio</span></div>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="col-sm-6 col-md-4 d-flex mr-auto">
                                            <div class="card-container-imagia">
                                                <div class="card-imagia">
                                                    <div class="front-imagia">
                                                        <div class="cover-imagia"><img alt="communication" src="assets/img/comm.jpg"></div>
                                                        <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="mato" src="assets/img/mato.jpg"></div>
                                                        <div class="content-imagia">
                                                            <h3 class="name-imagia">Mato Vidović</h3>
                                                            <p class="subtitle-imagia">Communication</p>
                                                            <p class="text-center reduise"><em>
                                                                    Chargé de la communication entre client et UTEMA, c'est aussi le trésorier.
                                                                </em></p>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </section>
                        </section>
                    </section>
                </section>

                <!-- End About -->


                <!-- Contact -->

                <section class="bg1">
                    <section id='contact' data-aos="fade-right">
                        <div class="container" style="margin-top: 54px;padding-top: 3px;background: rgba(255,255,255,0);">
                            <h1 class="mx-auto" style="text-align: center;margin: 53px;color: #f5faff;font-size: 50px;background: rgba(51,51,51,0);"><span style="color: #007fff;">
                                    CO</span>NTACTER</h1>
                            <p class="text-center" style="color: #f5faff;"></p>
                            <hr class="d-flex mx-auto" style="background: #f5faff;margin-top: -38px;margin-bottom: -30px;width: auto;max-width: 380px;">
                        </div>
                    </section>

                    <div id="link" data-aos="fade-right">
                        <div class="container" style="background: rgba(255,255,255,0);margin-top: 72px;">
                            <div class="row">
                                <div class="col-md-6" style="background: rgba(0,5,10,0);border-radius: 20px;">
                                    <h3 class="text-center" style="color: #f5faff;">Téléphone</h3>
                                    <h2 class="text-center reduit infos" style="background: #001933;border-radius: 109px;padding: 21px;">
                                        <a style="text-decoration: none;" href="tel:0698189705">
                                            <p class="reduit">+33 (0)6 98 18 97 05</p>
                                        </a>
                                    </h2>
                                </div>

                                <div class="col-md-6" style="background: rgba(0,5,10,0);border-radius: 20px;">
                                    <h3 class="text-center" style="color: #f5faff;">Email</h3>
                                    <a style="text-decoration: none;" href="mailto:contact@utema.fr">
                                        <h2 class="text-center reduit" style="background: #001933;border-radius: 109px;padding: 21px;">contact@utema.fr</h2>
                                    </a>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div data-aos="zoom-in" class="social-icons" style="margin-top: -43px;background: rgba(255,255,255,0);padding-bottom: -3px;">

                        <a target="_blank" href="https://twitter.com/utemacorp"><i class="icon ion-social-twitter snetwork"></i></a>
                        <a target="_blank" href="https://facebook.com/utemacorp"><i class="icon ion-social-facebook snetwork"></i></a>
                        <a target="_blank" href="https://instagram.com/utemacorp"><i class="icon ion-social-instagram-outline snetwork"></i></a>
                        <a target="_blank" href="https://fr.linkedin.com/company/utemateam"><i class="icon ion-social-linkedin-outline snetwork"></i></a>

                    </div>

                    <div class="recentre" data-aos="fade-down">
                        <div class="container" style="background: rgba(255,255,255,0);">
                            <div class="row">
                                <div class="col-md-12" style="margin-top: 0px;margin-right: 34px;">
                                    <h3 class="text-center" style="color: #f5faff;">Localisation</h3>
                                    <h1 class="text-center" style="color: #f5faff;margin-top: -12px;">Le Mans <span class="disparait">-</span> <br class="apparait"> Sarthe</h1>
                                    <hr class="d-flex mx-auto" style="background: #f5faff;margin-top: 20px;margin-bottom: -30px;width: auto;max-width: 380px;">
                                </div>
                            </div>
                        </div>
                    </div>


                    <section style="margin-top: 40px; margin-bottom: -180px;">

                        <div id="wrapper-9cd199b9cc5410cd3b1ad21cab2e54d3">
                            <div id="map-9cd199b9cc5410cd3b1ad21cab2e54d3"></div>
                            <script>
                                (function() {
                                    var setting = {
                                        "height": 520,
                                        "width": 3840,
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


                    </section>
                </section>

                <!-- End Contact -->

                <!-- Footer -->
                <div class="footer-dark" style="background: #242628;margin-top: 140px; padding-top: 80px;">
                    <footer>
                        <div class="container" style="background: rgba(255,255,255,0);">
                            <div class="row">
                                <div class="col-sm-6 col-md-3 item">
                                    <h3>Services</h3>
                                    <ul>
                                        <li><a href="#">Graphisme</a></li>
                                        <li><a href="#">Developpement</a></li>
                                        <li><a href="#">Photographie</a></li>
                                        <li></li>
                                        <li><a href="#">Vidéo</a></li>
                                    </ul>
                                </div>
                                <div class="col-sm-6 col-md-3 item">
                                    <h3>About</h3>
                                    <ul>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                </div>
                                <div class="col-md-6 item text">
                                    <h3>UTEMA</h3>
                                    <p>L’association Utema a pour but de favoriser l’accès au numérique et la compréhension de ses
                                        outils de mise en œuvre, en accompagnant professionnels et particuliers, par le biais de tous les moyens actuels et futurs disponibles.</p>
                                </div>
                            </div>
                            <p class="copyright">UTEMA © 2021</p>
                        </div>
                    </footer>
                </div>


                <!-- End Footer -->

            </div>
        </div>
    </div>




    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-init.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="assets/js/Contact-Form-v2-Modal--Full-with-Google-Map.js"></script>
    <script src="assets/js/Fixed-navbar-starting-with-transparency.js"></script>
    <script src="assets/js/Sidebar-Menu.js"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>