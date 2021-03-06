<?php
include "config.php";
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <title><?php echo $lang['title'] ?></title>

    <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0" />
    <meta property="og:title" content="UTEMA" />
    <meta property="og:type" content="informatique.multimedia" />
    <meta property="og:url" content="https://utema.fr/" />
    <meta property="og:image" content="https://utema.fr/assets/img/Logo.png" />

    <meta name="description" content="<?php echo $lang['Description'] ?>">

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
    <link rel="stylesheet" href="assets/css/Hero-Photography.css">

</head>


<!-- Nav -->

<body style="background: #001933;">


    <div id="wrapper" class="aled">
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li> <img class="adjust" src="assets/img/Blanc.png" alt="logo utema blanc"> </li>
                <li class="sidebar-brand"><span>UTEMA</span></li>
                <li> <a href="#hero"><?php echo $lang['Accueil'] ?></a></li>
                <li> <a href="#services"><?php echo $lang['Services'] ?></a></li>
                <li> <a href="#about"><?php echo $lang['À propos'] ?></a></li>
                <li> <a href="#contact"><?php echo $lang['Contacter'] ?></a></li><br><br><br><br><br>

                <div id="langue">
                    <div class="francais">
                        <li> <a href="index.php?lang=fr">
                                <span>Français</span>
                            </a></li>
                    </div>

                    <div class="anglais">
                        <li> <a href="index.php?lang=en">
                                <span>English</span>
                            </a></li>
                    </div>
                </div>
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

                                    if (strpos($_SERVER["HTTP_USER_AGENT"], "Firefox/") !== false) {

                                        echo '<h1 style="margin-top: 30%; margin-left: -15%; font-size: 100px;">' . $lang['Bonjour'] . '<span></span></h1>
                                            <h1 style="margin-top: -3%; margin-left: 0%; font-size: 100px;">' . $lang['Bienvenue'] . '<span></span></h1>
                                            <h1 class="rambla" style="font-size: 140px; margin-left: 20%; margin-top: -2%;">UTEMA <span></span></h1>';
                                    } else {
                                        echo '<h1 style="margin-top: 25%;">' . $lang['Bonjour'] . '<span></span></h1>
                                            <h1 style="margin-top: -3%;">' . $lang['Bienvenue'] . '<span></span></h1>
                                            <h1 class="rambla" style="font-size: 150px; margin-top: -2%;">UTEMA <span></span></h1>';
                                    }

                                    ?>
                                </div>
                            </div>
                        </nav>

                        <img src="assets/img/premier.png" class="person translate" data-speed="-0.45" alt="premier plan">
                        <img src="assets/img/deuxieme.png" class="mountain2 translate" data-speed="0.15" alt="deuxieme plan">
                        <img src="assets/img/troisieme.png" class="mountain3 translate" data-speed="0.3" alt="troisieme plan">
                        <img src="assets/img/fond.png" class="sky translate" style="display: none;" data-speed="0.5" alt="fond">

                        <nav class="navbar navbar-dark navbar-expand-md" style="z-index: 100000;">
                            <div class="hero">
                                <div class="decale enfonction">
                                    <h1><?php echo $lang['Bonjour'] ?><span></span></h1>
                                    <h1><?php echo $lang['Bienvenue'] ?><span></span></h1>
                                    <h1 class="rambla">UTEMA <span></span></h1>

                                </div>
                            </div>
                        </nav>
                    </header>


                </section>

                <!-- End Hero -->



                <!-- Services -->

                <div id='services'></div>
                <section style="background: #13122f; padding-bottom: 0px;padding-top: 52px;margin-top: 0px;">
                    <div class="container" style="background: #13122f;">
                        <h1 class="mx-auto" style="margin-bottom: -20px;text-align: center;margin: 53px; margin-top: 10px; background: #13122f;color: #f5faff;font-size: 50px;">
                            SERV<span style="color: #007fff;">I</span>CES</h1>
                    </div>

                    <hr class="d-flex mx-auto" style="background: #f5faff;margin-top: -20px;margin-bottom: -40px;width: auto;max-width: 380px;">


                    <section>

                        <div class="jumbotron hero-photography1" style="margin-top: 72px;padding-bottom: 0px;padding-top: 0px;margin-bottom: 0;border-radius: -0;">
                            <h2 class="hero-title ranger"><?php echo $lang['Photographie'] ?></h2>
                            <p class="hero-subtitle" style="margin-top: 3px;padding-bottom: 28px;">
                                <?php echo $lang['Portraits'] ?><br></p>
                        </div>


                        <div class="jumbotron hero-dev1" style="margin-top: -74px;padding-bottom: 0px;padding-top: 0px;border-radius: 0;">
                            <h2 class="hero-title ranger"><?php echo $lang['Programmation'] ?></h2>
                            <p class="hero-subtitle" style="margin-top: 3px;padding-bottom: 28px;">
                                <?php echo $lang['Programmes'] ?><br></p>
                        </div>


                        <div class="jumbotron hero-graphisme1" style="margin-top: -74px;padding-bottom: 0px;padding-top: 0px;border-radius: 0;">
                            <h2 class="hero-title ranger"><?php echo $lang['Graphisme'] ?></h2>
                            <p class="hero-subtitle" style="margin-top: 3px;padding-bottom: 28px;">
                                <?php echo $lang['Logos'] ?><br></p>
                        </div>


                        <div class="jumbotron hero-video1" style="margin-top: -74px;padding-bottom: 0px;padding-top: 0px;border-radius: 0;">
                            <h2 class="hero-title ranger"><?php echo $lang['Vidéo'] ?></h2>
                            <p class="hero-subtitle" style="margin-top: 3px;padding-bottom: 28px;">
                                <?php echo $lang['Montages'] ?><br></p>
                        </div>


                        <div class="jumbotron hero-support1" style="margin-top: -74px;padding-bottom: 0px;padding-top: 0px;border-radius: 0;">
                            <h2 class="hero-title ranger"><?php echo $lang['Support'] ?></h2>
                            <p class="hero-subtitle" style="margin-top: 3px;padding-bottom: 28px;">
                                <?php echo $lang['Réparation'] ?><br></p>
                        </div>

                    </section>

                </section>

                <!-- End Services -->



                <!-- About -->

                <section id='about' data-aos="fade-right" style="margin-top: 0px;background: #001933;margin-bottom: -34px;padding-bottom: -63px;">

                    <div class="container" style="background: #001933;margin-top: 0px;padding-top: 3px;">
                        <h1 class="mx-auto" style="text-align: center;margin: 53px;background: #001933;color: #f5faff;font-size: 50px;"><span style="color: #007fff;">
                                <?php echo $lang['À'] ?></span><?php echo $lang['PROPOS'] ?></h1>
                        <p class="text-center" style="color: #f5faff; margin-top: -25px"><?php echo $lang['Découvrez'] ?><br></p>
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
                                                    <div class="cover-imagia"><img alt="president" src="assets/img/secu.jpg"></div>
                                                    <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="nathan" src="assets/img/nathan.jpg"></div>
                                                    <div class="content-imagia">
                                                        <h3 class="name-imagia">Nathan Labbé</h3>
                                                        <p class="subtitle-imagia"><?php echo $lang['Sécurité Informatique'] ?></p>
                                                        <p class="text-center reduise"><em>
                                                                <?php echo $lang['Chargé'] ?>
                                                            </em></p>
                                                    </div>
                                                    <a target="_blank" href="portfolio/nathan/index.html">
                                                        <div class="footer-imagia"><span><?php echo $lang['Voir le portfolio'] ?></span></div>
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
                                                        <p class="subtitle-imagia"><?php echo $lang['Développeur'] ?></p>
                                                        <p class="text-center reduise"><em>
                                                                <?php echo $lang['Photgraphe'] ?>
                                                            </em></p>
                                                    </div>
                                                    <a target="_blank" href="portfolio/romain/index.html">
                                                        <div class="footer-imagia"><span><?php echo $lang['Voir le portfolio'] ?></span></div>
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
                                                    <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="louis" src="./assets/img/louis1.jpg"></div>
                                                    <div class="content-imagia">
                                                        <h3 class="name-imagia">Louis Georget</h3>
                                                        <p class="subtitle-imagia"><?php echo $lang['Graphiste'] ?></p>
                                                        <p class="text-center reduise"><em>
                                                                <?php echo $lang['Illustrateur'] ?>
                                                            </em></p>
                                                    </div>
                                                    <a target="_blank" href="portfolio/louis/index.html">
                                                        <div class="footer-imagia"><?php echo $lang['Voir le portfolio'] ?></span></div>
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
                                                        <div class="cover-imagia"><img alt="securite" src="assets/img/pres.jpg"></div>
                                                        <div class="user-imagia"><img class="img-circle visage" style="width: 150px;" alt="francois" src="assets/img/francois1.jpg"></div>
                                                        <div class="content-imagia">
                                                            <h3 class="name-imagia">François Pannier</h3>
                                                            <p class="subtitle-imagia"><?php echo $lang['Président'] ?></p>
                                                            <p class="text-center reduise"><em>
                                                                    <?php echo $lang['Paperasse'] ?>
                                                                </em></p>
                                                        </div>
                                                        <a target="_blank" href="portfolio/francois/index.html">
                                                            <div class="footer-imagia"><span><?php echo $lang['Voir le portfolio'] ?></span></div>
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
                                                            <p class="subtitle-imagia"><?php echo $lang['Communication'] ?></p>
                                                            <p class="text-center reduise"><em>
                                                                    <?php echo $lang['Chargé de comm'] ?>
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
                                    <?php echo $lang['CO'] ?></span><?php echo $lang['NTACTER'] ?></h1>
                            <p class="text-center" style="color: #f5faff;"></p>
                            <hr class="d-flex mx-auto" style="background: #f5faff;margin-top: -38px;margin-bottom: -30px;width: auto;max-width: 380px;">
                        </div>
                    </section>

                    <div id="link" data-aos="fade-right">
                        <div class="container" style="background: rgba(255,255,255,0);margin-top: 72px;">
                            <div class="row">
                                <div class="col-md-6" style="background: rgba(0,5,10,0);border-radius: 20px;">
                                    <h3 class="text-center" style="color: #f5faff;"><?php echo $lang['Téléphone'] ?></h3>
                                    <h2 class="text-center reduit infos" style="background: #001933;border-radius: 109px;padding: 21px;">
                                        <a style="text-decoration: none;" href="tel:0698189705">
                                            <p class="reduit">+33 (0)6 98 18 97 05</p>
                                        </a>
                                    </h2>
                                </div>

                                <div class="col-md-6" style="background: rgba(0,5,10,0);border-radius: 20px;">
                                    <h3 class="text-center" style="color: #f5faff;"><?php echo $lang['Email'] ?></h3>
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
                                    <h3 class="text-center" style="color: #f5faff;"><?php echo $lang['Localisation'] ?></h3>
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
                                        <li><a href="#"><?php echo $lang['Programmation'] ?></a></li>
                                        <li><a href="#"><?php echo $lang['Graphisme'] ?></a></li>
                                        <li><a href="#"><?php echo $lang['Photographie'] ?></a></li>
                                        <li><a href="#"><?php echo $lang['Vidéo'] ?></a></li>
                                    </ul>
                                </div>

                                <div class="col-sm-6 col-md-3 item">
                                    <h3>About</h3>
                                    <ul>
                                        <li><a href="#">Company</a></li>
                                        <li><a href="#">Team</a></li>
                                        <li><a href="#">Careers</a></li>
                                    </ul>
                                    <br>

                                    <h3><?php echo $lang['Langues'] ?></h3>
                                    <ul>
                                        <li><a href="index.php?lang=fr">Français</a></li>
                                        <li><a href="index.php?lang=en">English</a></li>
                                    </ul>
                                </div>

                                <div class="col-md-6 col-md-3 item text">
                                    <h3>UTEMA</h3>
                                    <p><?php echo $lang['Description'] ?></p>
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