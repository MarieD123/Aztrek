<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aztrek | Nos séjours</title>
    <link rel="shortcut icon" href="favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Raleway:300,400,600" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
        crossorigin="anonymous">
    <link rel="stylesheet" href="./css/main.css">
</head>

<body class="liste-sejours">
    <header class="header-top" id="top">
        <div class="container-fixed">
            <button class="nav-toggle" data-target=".main-nav">Menu<span></span></button>

            <nav class="main-nav ">
                <div class="logo"><a href="index.php"><img src="./images/logo-nav.png" alt=""></a></div>
                <ul>
                    <li class="item has-sublist">
                        <a href="#0" class="dropdownStart">Destinations</a>
                        <ul class="dropdown">
                            <li><a href="liste-sejours.php">Costa Rica</a></li>
                            <li><a href="liste-sejours.php">Guatemala</a></li>
                            <li><a href="liste-sejours.php">Honduras</a></li>
                            <li><a href="liste-sejours.php">Mexique</a></li>
                            <li><a href="liste-sejours.php">Salvador</a></li>
                            <li><a href="liste-sejours.php">Toutes nos destinations</a></li>
                        </ul>

                    </li>
                    <li class="item"><a href="#0">Qui sommes nous ?</a></li>
                    <li class="item"><a href="#0">Blog</a></li>
                    <li class="item"><a href="#0">Contact</a></li>
                    <li class="item"><a href="#0"><i class="fas fa-user"></i> Espace client</a></li>

                </ul>

            </nav>


        </div>
        <h1>Découvrez le Costa Rica</h1>
    </header>

    <main class="container">

        <aside class="search-form">
            <div class="criteres">
                <h4>Vos critères actuels</h4>
                <span>Costa rica</span><br>
                 <button>Réinitialiser les filtres</button> 
            </div>
            <form id="form" name="filter" action="#" method="get">
                <ul>
                    <li class="item" id="item-1">
                        <h3>Destination</h3>
                        <ul class="sub-list" id="sub-list-1">
                            <li class="sub-list-item">
                                <input type="checkbox" name="destination" id="dest-2" value="2">
                                <label for="dest-2">Costa Rica</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="destination" id="dest-3" value="3">
                                <label for="dest-3">Guatemala</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="destination" id="dest-4" value="4">
                                <label for="dest-4">Honduras</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="destination" id="dest-5" value="5">
                                <label for="dest-5">Mexique</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="destination" id="dest-6" value="6">
                                <label for="dest-6">Salvador</label>
                            </li>
                        </ul>
                    </li>
                    <li class="item" id="item-2">
                        <h3>Durée</h3>
                        <ul class="sub-list" id="sub-list-2">
                            <li class="sub-list-item">
                                <input type="checkbox" name="duree" id="duree-1" value="1">
                                <label for="duree-1">7 jours</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="duree" id="duree-2" value="1">
                                <label for="duree-2">14 jours</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="duree" id="duree-3" value="1">
                                <label for="duree-3">21 jours</label>
                            </li>
                        </ul>
                    </li>
                    <li class="item" id="item-3">
                        <h3>Date de départ</h3>
                        <div class="calendrier"></div>
                    </li>
                    <li class="item" id="item-4">
                        <h3>Difficulté</h3>
                        <ul class="sub-list" id="sub-list-3">
                            <li class="sub-list-item">
                                <input type="checkbox" name="difficulte" id="difficulte-1" value="1">
                                <label for="difficulte-1">1/5</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="difficulte" id="difficulte-2" value="1">
                                <label for="difficulte-2">2/5</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="difficulte" id="difficulte-3" value="1">
                                <label for="difficulte-3">3/5</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="difficulte" id="difficulte-4" value="1">
                                <label for="difficulte-4">4/5</label>
                            </li>
                            <li class="sub-list-item">
                                <input type="checkbox" name="difficulte" id="difficulte-5" value="1">
                                <label for="difficulte-5">5/5</label>
                            </li>
                        </ul>
                    </li>
                    <li class="item" id="item-5">
                        <h3>Budget</h3>
                        <div class="fourchette-prix"></div>
                    </li>
                </ul>
                <button type="submit">Filtrer</button>
            </form>
        </aside>

        <section>

            <article class="fiche-sejour">
                <a href="#">
                    <img src="uploads/sejour-tropical.jpg" alt="Aventure tropicale">
                    <h2>Aventure tropicale</h2>
                    <h3>Costa Rica</h3>
                    <div class="infos-sejour">
                        <div class="duree">
                            <img src="./images/picto-duree.eps" alt="durée">
                            <p>14 jours</p>
                        </div>
                        <p class="difficulte">Difficulte : <img src="./images/barre-niveau-sejour2.png" alt="niveau 3/5">
                            <span class="infobulle" aria-label="Randonnées présentant plusieurs passages techniques, il est conseillé d'avoir une expérience de la randonnée en montagne pour suivre cet itinéraire."><img
                                    src="./images/infobulle.png" alt="infobulle"></span>
                        </p>
                        <div class="prix">
                            <img src="./images/picto-prix.eps" alt="prix">
                            <p>à partir de <span>1399 €</span></p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="fiche-sejour">
                <a href="#">
                    <img src="uploads/sejour-nature-etat-pur.jpg" alt="Aventure tropicale">
                    <h2>La nature à l'état pur</h2>
                    <h3>Costa Rica</h3>
                    <div class="infos-sejour">
                        <div class="duree">
                            <img src="./images/picto-duree.eps" alt="durée">
                            <p>16 jours</p>
                        </div>

                        <p class="difficulte">Difficulte : <img src="./images/barre-niveau-sejour2.png" alt="niveau 2/5">
                            <span class="infobulle" aria-label="Itinéraire principalement sur des bons sentiers pouvant présenter quelques passages techniques, accessible sans expérience de la randonnée"><img
                                    src="./images/infobulle.png" alt="infobulle"></span>
                        </p>
                        <div class="prix">
                            <img src="./images/picto-prix.eps" alt="prix">
                            <p>à partir de <span>1779 €</span></p>
                        </div>
                    </div>
                </a>
            </article>

            <article class="fiche-sejour">
                <a href="#">
                    <img src="uploads/sejour-toucan-volcan.jpg" alt="Aventure tropicale">
                    <h2>Toucans, volcans et sable blanc</h2>
                    <h3>Costa Rica</h3>
                    <div class="infos-sejour">
                        <div class="duree">
                            <img src="./images/picto-duree.eps" alt="durée">
                            <p>10 jours</p>
                        </div>
                        <p class="difficulte">difficulté : <img src="./images/barre-niveau-sejour2.png" alt="niveau 1/5"> <span
                            class="infobulle" aria-label="Randonnées sur des bons sentiers sans difficultés techniques, accessible sans expérience de la randonnée"><img
                                src="./images/infobulle.png" alt="info-bulle"></span></p>
                        <div class="prix">
                            <img src="./images/picto-prix.eps" alt="prix">
                            <p>à partir de <span>1290 €</span></p>
                        </div>
                    </div>
                </a>
            </article>

        </section>
    </main>

    <footer class="footer-bottom">
        <div class="container">
            <div class="footer-infos">
                <a class="logo" href=""><img src="./images/logo-footer.png" alt="logo"></a>
                <div class="contact">
                    <p>Appelez nous au <span>01 23 45 67 89</span></p>
                    <a href="" class="btn-cta btn-green">Nous contacter</a>
                </div>
                <div class="newsletter-footer">
                    <p>Envie d’un avant-goût de voyage ?
                        Abonnez vous à notre <span>newsletter</span></p>
                    <form class="newsletter-form footer-form" action="#" method="get">
                        <input type="email" name="mail" id="email" placeholder="Votre email">
                        <button type="submit" name="submit-btn">S'inscrire</button>
                    </form>
                </div>
                <div class="reseaux-sociaux">
                    <p>Suivez nous !</p>
                    <ul>
                        <li><a class="btn-rs" href=""><img src="./images/footer-insta.png" alt="instagram"></a></li>
                        <li><a class="btn-rs" href=""><img src="./images/footer-fb.png" alt="facebook"></a></li>
                        <li><a class="btn-rs" href=""><img src="./images/footer-twitter.png" alt="twitter"></a></li>
                        <li><a class="btn-rs" href=""><img src="./images/footer-youtube.png" alt="youtube"></a></li>
                    </ul>
                </div>
            </div>
            <p class="credits">Copyright Aztrek 2018 - <a href="">Crédits et mentions légales</a></p>
        </div>
    </footer>


    <script src="./js/jquery-3.3.1.min.js"></script>
    <script src="./js/owl.carousel.min.js"></script>
    <script src="./js/scripts.js"></script>
</body>