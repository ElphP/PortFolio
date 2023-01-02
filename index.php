<?php include("form_php.php");?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Elphège Proisy - Développeur Web</title>

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
            href="https://fonts.googleapis.com/css2?family=Magra&family=Oxygen&display=swap"
            rel="stylesheet"
        /> -->

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="style.css" />
    <meta name="robots" content="noindex,nofollow" />
</head>

<body onload="changeStyleForm()">
    <button class="openModal">
        <img src="horl.png" alt="Bouton horloge" class="iconHorl" />
    </button>

    <!-- fenêtre modale -->
    <dialog id="modal">
        <div class="closeModal">
            <img src="close-icon-16.png" alt="fermer" class="close" />
        </div>

        <div class="horl">
            <span class="sec" style="--i: 1"></span>
            <span class="sec" style="--i: 2"></span>
            <span class="sec" style="--i: 3"></span>
            <span class="sec" style="--i: 4"></span>
            <span class="sec" style="--i: 5"></span>
            <span class="sec" style="--i: 6"></span>
            <span class="sec" style="--i: 7"></span>
            <span class="sec" style="--i: 8"></span>
            <span class="sec" style="--i: 9"></span>
            <span class="sec" style="--i: 10"></span>
            <span class="sec" style="--i: 11"></span>
            <span class="sec" style="--i: 12"></span>
            <span class="sec" style="--i: 13"></span>
            <span class="sec" style="--i: 14"></span>
            <span class="sec" style="--i: 15"></span>
            <span class="sec" style="--i: 16"></span>
            <span class="sec" style="--i: 17"></span>
            <span class="sec" style="--i: 18"></span>
            <span class="sec" style="--i: 19"></span>
            <span class="sec" style="--i: 20"></span>
            <span class="sec" style="--i: 21"></span>
            <span class="sec" style="--i: 22"></span>
            <span class="sec" style="--i: 23"></span>
            <span class="sec" style="--i: 24"></span>
            <span class="sec" style="--i: 25"></span>
            <span class="sec" style="--i: 26"></span>
            <span class="sec" style="--i: 27"></span>
            <span class="sec" style="--i: 28"></span>
            <span class="sec" style="--i: 29"></span>
            <span class="sec" style="--i: 30"></span>
            <span class="sec" style="--i: 31"></span>
            <span class="sec" style="--i: 32"></span>
            <span class="sec" style="--i: 33"></span>
            <span class="sec" style="--i: 34"></span>
            <span class="sec" style="--i: 35"></span>
            <span class="sec" style="--i: 36"></span>
            <span class="sec" style="--i: 37"></span>
            <span class="sec" style="--i: 38"></span>
            <span class="sec" style="--i: 39"></span>
            <span class="sec" style="--i: 40"></span>
            <span class="sec" style="--i: 41"></span>
            <span class="sec" style="--i: 42"></span>
            <span class="sec" style="--i: 43"></span>
            <span class="sec" style="--i: 44"></span>
            <span class="sec" style="--i: 45"></span>
            <span class="sec" style="--i: 46"></span>
            <span class="sec" style="--i: 47"></span>
            <span class="sec" style="--i: 48"></span>
            <span class="sec" style="--i: 49"></span>
            <span class="sec" style="--i: 50"></span>
            <span class="sec" style="--i: 51"></span>
            <span class="sec" style="--i: 52"></span>
            <span class="sec" style="--i: 53"></span>
            <span class="sec" style="--i: 54"></span>
            <span class="sec" style="--i: 55"></span>
            <span class="sec" style="--i: 56"></span>
            <span class="sec" style="--i: 57"></span>
            <span class="sec" style="--i: 58"></span>
            <span class="sec" style="--i: 59"></span>
            <span class="sec" style="--i: 60"></span>
        </div>
        <div id="dateHeure">
            <div id="date"></div>
            <div id="heure"></div>
        </div>
    </dialog>
    <!-- fin modale -->

    <div class="fenetre">
        <nav>
            <ul>
                <li><a class="nom" href="">Elphège PROISY</a></li>

                <li><a class="navbar" href="">A propos de moi</a></li>
                <li>
                    <a class="navbar" href="#realis">Mes réalisations</a>
                </li>
                <li><a class="navbar" href="#mail">Me contacter</a></li>

                <li><a class="btnCV" href="monCV.pdf" target="about_blank">mon CV</CV></a></li>
                <li>
                    <div class="burger"><span class="barre"></span></div>
                </li>
            </ul>
        </nav>
        <ul class="menuDeroul">
            <li class="onglet"><a href="#realis">Mes réalisations</a></li>
            <li class="onglet">
                <a href="#mail">Me contacter</a>
            </li>
        </ul>

        <main>
            <h1>Portefolio</h1>

            <section class="aboutme">
                <div class="presentText">
                    <div class="animation">
                        <div id="animText1"></div>
                        <div class="secondRow">
                            <div id="animText2"></div>
                            <div id="animText3"></div>
                        </div>

                        <h2>A propos de moi,</h2>
                        <p>
                            Lorem ipsum dolor, sit amet consectetur adipisicing
                            elit. Voluptas, itaque delectus maxime eos ipsa
                            nobis non maiores qui, veniam corporis quisquam
                            sapiente reiciendis? A maxime, molestiae, nihil,
                            suscipit sed ullam impedit illo reiciendis
                            consectetur voluptatem nisi eius possimus quod
                            necessitatibus error enim ex ipsam. Sit nulla modi
                            dolores suscipit pariatur!
                        </p>
                    </div>
                </div>

                <div class="photo"><img src="photoPFolio.png" alt="photo personelle" class="maPhoto"></div>
            </section>

            <section id="realis">
                <div class="container">
                    <div class="iframeContainer">
                        <h3>
                            <a href="https://betadev.elphegeproisy.com/EneaTelecom/index.php" target="_blank">Site
                                EneaTelecom</a>
                        </h3>
                        <iframe src="https://betadev.elphegeproisy.com/EneaTelecom/index.php" frameborder="0"
                            class="iframeContent">
                        </iframe>
                    </div>
                    <div class="textPres">
                        <div class="langage">
                            <p>Langages utilisés:</p>
                            <p>CSS3 HTML5/ Javascript/ PHP</p>
                            <div class="logos">
                                <img src="htmlCss.png" alt="iconHTML-CSS" />
                                <img src="JS.png" alt="iconJS" />
                                <img src="PHPVF.png" alt="iconPHP" />
                            </div>
                        </div>
                        <div class="particul">
                            <p class="titre">Particularités du code:</p>
                            <br />
                            <p>Javascript:</p>

                            <ul>
                                <li>- Animation de cartes pivotantes</li>
                                <li>
                                    - Animation "menu burger" (version
                                    mobile)
                                </li>
                            </ul>
                            <br />
                            <p>PHP:</p>
                            <ul>
                                <li>
                                    - Gestion d'un formulaire de contact
                                </li>
                            </ul>
                            <br />
                            <p>CSS:</p>

                            <ul>
                                <li>
                                    - Animations fade In + Scale, effet
                                    Bounce + fade In
                                </li>
                                <li>
                                    - Animation rotateX (pour afficher des
                                    numéros de téléphone)
                                </li>
                            </ul>
                            <br />
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="iframeContainer">
                        <h3>
                            <a href="https://www.elphegeproisy.com" target="_blank" rel="noopener noreferrer">Site
                                elphegeproisy.com</a>
                        </h3>
                        <iframe src="https://www.elphegeproisy.com" frameborder="0" class="iframeContent">
                        </iframe>
                    </div>
                    <div class="textPres">
                        <div class="langage">
                            <p>Ce site a été mis en place avec</p>
                            <p>le CMS WORDPRESS</p>
                            <img src="WP.png" alt="iconWordPress" />
                        </div>
                    </div>
                </div>

                <div class="container">
                    <div class="iframeContainer">
                        <h3>
                            <a href="https://betadev.elphegeproisy.com/RP1/index.php" target="_blank"
                                rel="noopener noreferrer">Site FICTIF Amélie</a>
                        </h3>
                        <iframe src="https://betadev.elphegeproisy.com/RP1/index.php" frameborder="0"
                            class="iframeContent">
                        </iframe>
                    </div>

                    <div class="textPres">
                        <p class="intro">
                            Ce site est un site fictif à accès restreint.
                            (Toutes les pages ne sont pas programmées)
                        </p>
                        <p>
                            Codes d'accès programmés pour test:
                            "AMELIE-c18A2ePt" & "LAURENT-n2Felg83"
                        </p>

                        <div class="langage">
                            <p>Langages utilisés:</p>
                            <p>CSS3 HTML5/ PHP/ Javascript</p>
                            <div class="logos">
                                <img src="htmlCss.png" alt="iconHTML-CSS" />
                                <img src="PHPVF.png" alt="iconPHP" />
                                <img src="JS.png" alt="iconJS" />
                            </div>
                        </div>
                        <div class="particul">
                            <p class="titre">Particularités du code:</p>
                            <br />
                            <p>PHP:</p>
                            <ul>
                                <li>
                                    - Gestion d'un accueil avec mot de passe
                                    (Accès restreint pré-programmés dans la
                                    base de données). Une interface d'administration a, par ailleurs, été développée
                                    (non visible ici) pour rajouter des "adhérents" dans la base de donnée.
                                </li>
                            </ul>
                            <br />
                            <p>Javascript:</p>
                            <ul>
                                <li>
                                    - Vérification du bon format des login
                                    et mots de passe à l'aide de REGEX
                                </li>
                                <li>
                                    - Animation "menu burger" (version
                                    mobile)
                                </li>
                            </ul>
                            <br />
                            <p>CSS:</p>
                            <ul>
                                <li>- Animation galerie photo "slide"</li>
                                <li>
                                    - Soulignement dynamique des liens au
                                    survol
                                </li>
                            </ul>
                            <br />
                            <ul>
                                <li>
                                    NB: Dans le cadre d'une mise en
                                    production , l'animation couleur en JS
                                    serait supprimée (elle donne de
                                    l'information pour forcer les codes...)
                                </li>
                            </ul>
                            <br />
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="iframeContainer">
                        <h3>
                            <a href="" target="_blank" rel="noopener noreferrer">Test des tables de multiplications</a>
                        </h3>
                        <iframe src="https://betadev.elphegeproisy.com/TestTabl/index.html" frameborder="0"
                            class="iframeContent">
                        </iframe>
                    </div>
                    <div class="textPres">
                        <p class="intro">
                            J'ai crée ce petit programme à l'aide de
                            Javascript pour essayer de
                        </p>
                        <p>
                            motiver mon fils à apprendre ses tables de
                            multiplications... ( mais ça n'a pas été efficace...)
                        </p>

                        <div class="langage">
                            <p>Langages utilisés:</p>
                            <p>Javascript/ CSS3 HTML5</p>
                            <div class="logos">
                                <img src="JS.png" alt="iconJS" />
                                <img src="htmlCss.png" alt="iconHTML-CSS" />
                            </div>
                        </div>
                        <div class="particul">
                            <p class="titre">Particularités du code:</p>
                            <br />

                            <p>Javascript:</p>
                            <ul>
                                <li>
                                    - Création et modifications d'éléments
                                    dans le DOM
                                </li>
                                <li>- Utilisation du LocalStorage</li>
                                <li>- Utilisation d'un "chronomètre"</li>
                            </ul>
                            <br />
                            <p>CSS:</p>
                            <ul>
                                <li>- Animation "Pulse"</li>
                            </ul>
                            <br />
                        </div>
                    </div>
                </div>
                <div id="mail">
                    <div class="center_div">Me contacter</div>

                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
                        <span class="<?php echo $color_mess ?>"><?php echo $mess_ok ?></span>
                        <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?php echo $name ?>" />
                        <span class="error"><?php echo $name_error ?></span>
                        <input type=" text" name="email" id="email" placeholder="Votre E-mail"
                            value="<?php echo $mail ?>" />
                        <span class="error"><?php echo $mail_error ?></span>

                        <input type=" text" name="website" id="website" placeholder="Ne rien écrire ici!" tabindex="-1"
                            autocomplete="off" value="<?php echo $website ?>" />
                        <span class="error"><?php echo $website_error ?></span>
                        <input type="text" name="sujet" id="sujet" placeholder="Objet" value="<?php echo $objet ?>" />

                        <textarea id=" mess" name="mess" rows="15"
                            placeholder=" Votre message ici"><?php echo $message ?></textarea>
                        <span class=" error"><?php echo $mess_error ?></span>
                        <input id="subForm" type="submit" name="submit" value=" Envoyer" />

                    </form>
                </div>
            </section>

            <footer>

            </footer>
        </main>
    </div>

    <script src="script.js"></script>
</body>

</html>