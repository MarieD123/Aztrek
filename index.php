<?php
require_once "model/database.php";
require_once "layout/header.php";
?>



    <header class="header-top" id="top">

        <?php require_once "layout/menu.php";?>

        <h1>Un nouveau monde à chaque pas</h1>
    </header>

    <main>

        <section class="evasion container">
            <h2>évadez vous</h2>
            <a href="" class="btn-cta">Découvrir nos séjours</a>
            <div class="destinations">
                <div class="photos-block photos-block-1">
                    <a href="#" class="photo-destination" id="photo-1">
                        <div class="destination-color">
                            <h3>Mexique</h3>
                        </div>
                    </a>
                    <a href="#" class="photo-destination" id="photo-2">
                        <div class="destination-color">
                            <h3>Guatemala</h3>
                        </div>
                    </a>
                </div>
                <div class="photos-block photos-block-2">
                    <a href="#" class="photo-destination" id="photo-3">
                        <div class="destination-color">
                            <h3>Honduras</h3>
                        </div>
                    </a>
                    <a href="#" class="photo-destination" id="photo-4">
                        <div class="destination-color">
                            <h3>Salvador</h3>
                        </div>
                    </a>
                </div>
                <div class="photos-block photos-block-3">
                    <a href="#" class="photo-destination" id="photo-5">
                        <div class="destination-color">
                            <h3>Costa rica</h3>
                        </div>
                    </a>
                </div>
            </div>
        </section>
    </main>

    <section class="guide">
        <div class="container">
            <div class="texte-guide">
                <h2>Suivez le guide</h2>
                <p>Batnae municipium in Anthemusia conditum
                    Macedonum manu priscorum ab Euphrate flumine
                    brevi spatio disparatur, refertum mercatoribus
                    opulentis, ubi annua sollemnitate prope Septembris
                    initium mensis ad nundinas magna promiscuae
                    fortunae convenit multitudo ad commercanda quae
                    Indi mittunt et Seres aliaque plurima vehi terra
                    marique consueta.</p>
                <a href="" class="btn-cta">+ de conseils</a>
            </div>
        </div>
    </section>

    <section class="actualites">
        <div class="container">
            <h2>Actualités</h2>
            <div class="actus">

                <article>
                    <h3>Dernière vidéo</h3>
                    <div class="visuel-actu">
                        <div class="visuel-actu"><iframe max-width="560" max-height="315" src="https://www.youtube.com/embed/En1lq8eBztk?start=20"
                                frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe></div>
                    </div>
                    <p>Retrouvez toutes nos vidéos sur notre chaîne Youtube !</p>
                    <a href="" class="btn-cta btn-rs btn-yt"><img src="./images/btn-youtube.png" alt="youtube"></a>
                </article>

                <article>
                    <h3>Dernier article</h3>
                    <div class="visuel-actu"><img src="./images/img-blog.jpg" alt=""></div>
                    <a href="" class="btn-cta">Découvrir le blog</a>
                </article>

                <article>
                    <h3>évènement du moment</h3>
                    <div class="visuel-actu"><img src="./images/evenement.jpg" alt=""></div>
                    <p>Découvrez nos événements et notre actualité sur la page Facebook d’Aztrek !</p>
                    <a href="" class="btn-cta btn-rs btn-fb"><img src="./images/btn-facebook.png" alt=""></a>
                </article>

            </div>
            <div class="newsletter">
                <p>Abonnez vous à notre <strong>newsletter</strong> pour ne rien louper de nos <strong>actualités</strong>
                    et de nos <strong>bons plans</strong> voyages !</p>
                <div class="abonnement">
                    <form class="newsletter-form" action="#" method="get">
                        <input type="email" name="mail" id="mail" placeholder="Votre email">
                        <button type="submit" name="submit-btn">S'inscrire</button>
                    </form>
                    <div class="avion"><img src="./images/avion-newsletter.png" alt=""></div>
                </div>
            </div>
        </div>
    </section>

    <section class="temoignages">
        <div class="container">
            <h2>Paroles de voyageurs</h2>
            <div class="owl-carousel ">
                <article>
                    <img src="uploads/slider1.png" alt="mexique">
                    <div class="texte">
                        <h4>Trésor du Yucatán</h4>
                        <div class="note"><img src="./images/picto-note-1.png" alt="4,5/5"></div>
                        <p>« Quibus ita sceleste patratis Paulus cruore perfusus reversusque ad principis castra multos
                            coopertos paene catenis adduxit in squalorem deiectos atque maestitiam, quorum adventu
                            intendebantur eculei uncosque parabat… »</p>
                        <a class="plus" href="">lire la suite</a>
                        <div class="id">
                            <p>Prénom N.</p>
                            <img src="./images/picto-avatar.png" alt="avatar">
                        </div>
                        <a href="" class="btn-cta btn-temoignages">Découvrir ce séjour</a>
                    </div>
                </article>
                <article>
                    <img src="uploads/slider2.png" alt="costa rica">
                    <div class="texte">
                        <h4>Caminando Mexico</h4>
                        <div class="note"><img src="./images/picto-note-1.png" alt="4,5/5"></div>
                        <p>« rem molestiae et laudantium vitae voluptates. Autem consequuntur quibusdam similique
                            assumenda quisquam nulla reiciendis, minus nihil hic necessitatibus cupiditate, facilis
                            suscipit, ducimus blanditiis… »</p>
                        <a class="plus" href="">lire la suite</a>
                        <div class="id">
                            <p>Prénom N.</p>
                            <img src="./images/picto-avatar.png" alt="avatar">
                        </div>
                        <a href="" class="btn-cta btn-temoignages">Découvrir ce séjour</a>
                    </div>
                </article>
                <article>
                    <img src="uploads/slider3.png" alt="guatemala">
                    <div class="texte">
                        <h4>Les volcans</h4>
                        <div class="note"><img src="./images/picto-note-1.png" alt="4,5/5"></div>
                        <p>« Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam cum, quae expedita quidem
                            officia suscipit commodi ipsum pariatur perferendis laborum non odit quam facilis
                            praesentium consequuntur voluptatum… »</p>
                        <a class="plus" href="">lire la suite</a>
                        <div class="id">
                            <p>Prénom N.</p>
                            <img src="./images/picto-avatar.png" alt="avatar">
                        </div>
                        <a href="" class="btn-cta btn-temoignages">Découvrir ce séjour</a>
                    </div>
                </article>
            </div>
            <a href="" class="btn-cta">+ de témoignages</a>
        </div>
    </section>

    <section class="photos">
        <div class="container">
            <h2>Nos photos coup de coeur</h2>
            <div class="coups-de-coeur">
                <div class="photo-insta">
                    <a href="https://www.instagram.com/p/Bq6KTW7B3sM/"><img src="./images/insta-1.png" alt="Sumidero"></a>
                </div>
                <div class="photo-insta">
                    <a href="https://www.instagram.com/p/Bq6A8qBhPXG/"><img src="./images/insta-2.png" alt="atitlan"></a>
                </div>
                <div class="photo-insta">
                    <a href="https://www.instagram.com/p/Bq5Qds1nRGx/"><img src="./images/insta-3.png" alt="volcan"></a>
                </div>
                <div class="photo-insta">
                    <a href="https://www.instagram.com/p/Bq5cd1IlNvH/"><img src="./images/insta-4.png" alt="chiapas"></a>
                </div>
            </div>
            <p>Découvrez toutes nos photos de voyages sur notre page <strong>instagram</strong>, ainsi que les
                souvenirs des Aztrekiens grâce au <strong>#Aztrek</strong> !</p>
            <a href="" class="btn-cta btn-rs"><img src="./images/btn-insta.png" alt="instagram"></a>
        </div>
    </section>

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
                        <li><a class="btn-rs btn-insta" href=""><img src="./images/footer-insta.png" alt="instagram"></a></li>
                        <li><a class="btn-rs btn-fb" href=""><img src="./images/footer-fb.png" alt="facebook"></a></li>
                        <li><a class="btn-rs btn-tw" href=""><img src="./images/footer-twitter.png" alt="twitter"></a></li>
                        <li><a class="btn-rs btn-yt" href=""><img src="./images/footer-youtube.png" alt="youtube"></a></li>
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

</html>