<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" lang="fr" content="Valentin Jullien">
    <meta name="description" content="Portfolio de Valentin Jullien, designer polyvalent. Découvrez mes projets !">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://portfolio.jullien.butmmi.o2switch.site">
    <meta property="og:title" content="PORTFOLIO | VALENTIN JULLIEN">
    <meta property="og:description"
        content="Portfolio de Valentin Jullien, designer polyvalent. Découvrez mes projets !">
    <meta property="og:image" content="https://www.valentinjullien.fr/img/card.png">
    <title>PORTFOLIO | VALENTIN JULLIEN</title>

    <!-------- CSS -------->
    <link rel="stylesheet" href="enaccueil.css">
    <link rel="stylesheet" href="https://unpkg.com/kursor/dist/kursor.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="shortcut icon" href="img/favicon.png">
    <!--------...-------->

    <!------ les fonts --------->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,300;0,500;0,700;0,800;1,300&display=swap"
        rel="stylesheet">
    <!--------...-------->

    <!-------- SCRIPT -------->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/kursor"></script>
    <script src="https://cdn.jsdelivr.net/npm/kursor@0.0.14/dist/kursor.js"></script>
    <!--------...-------->

</head>

<body>

    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->

    <!----------------------- HEADER ----------------------->

    <header>
        <div id="logo" class="noise">
            VALENTIN
            <br>
            JULLIEN
        </div>

        <!----------------------- NAVIGATION ----------------------->

        <nav>
            <a href="enaccueil.php">Home</a>
            <a href="#about-home">About</a>
            <a href="#contacte">Contact</a>
            <a href="enmentions.html">Privacy policy</a>
        </nav>

        <!----------------------- FIN NAVIGATION ----------------------->

        <!----------------------- BURGER MENU ----------------------->

        <button type="button" aria-label="toggle curtain navigation" class="nav-toggler">
            <span class="line l1"></span>
            <span class="line l2"></span>
            <span class="line l3"></span>
        </button>

        <!----------------------- FIN BURGER MENU ----------------------->

        <!----------------------- BOUTON POUR CHANGER LA LANGUE ----------------------->

        <div id="language">
            <div class="fr">
                <a href="index.php" class="noise">
                    FR
                </a>
            </div>
            <div class="en">
                <a href="enaccueil.php" class="noise">
                    EN
                </a>
            </div>
        </div>

        <!----------------------- FIN BOUTON POUR CHANGER LA LANGUE ----------------------->

        <!----------------------- HEADER EN BAS A DROITE ----------------------->

        <div class="header-right">
            <div class="copyright">©VALENTINJULLIEN</div>
            <div id="social">
                <a href="https://instagram.com/dqmn_vj?igshid=YmMyMTA2M2Y=">
                    <img src="img/instagram.svg" alt target="_blank" id="instagram">
                </a>
                <a href="https://www.linkedin.com/in/valentin-jullien-78abb1221/">
                    <img src="img/linkedin.svg" alt target="_blank" id="linkedin">
                </a>
            </div>
        </div>

        <!----------------------- FIN HEADER EN BAS A DROITE ----------------------->

    </header>

    <!----------------------- FIN HEADER ----------------------->
    <!----------------------- ACCUEIL ----------------------->

    <div class="circle">
        <div class="text">
            <p>Webdesign • Audio-visual • Graphics •</p>
        </div>
    </div>

    <section class="home">
        <div class="content-home">
            <div class="title">
                <h1 class="title-filled noise">Hi ! I'm Valentin</h1>
                <h1 class="title-outline">Hi ! I'm Valentin</h1>
                <div id="job">
                    <p><span class="typing"></span></p>
                </div>
            </div>
            <div id="planet">
                <img src="img/planet.png" alt draggable="false"
                    oncontextmenu="if (!window.__cfRLUnblockHandlers) return false; return false;">
            </div>
            <div class="field">
                <div class="mouse"></div>
            </div>
        </div>
    </section>

    <!----------------------- FIN ACCUEIL ----------------------->

    <!----------------------- A PROPOS ----------------------->

    <section id="about-home">
        <div class="about">
            <h1 data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                data-aos-once="true">ABOUT</h1>
            <div class="about-wrapper">
                <img src="img/moi.png" alt draggable="false" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-anchor-placement="top-bottom" data-aos-once="true" data-aos-delay="200">
                <div class="wrapper-para">
                    <p data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                        data-aos-once="true" data-aos-delay="200"> I am Valentin jullien, a student passionate about web
                        and design. I am currently studying in Champs sur Marne in the second year of an BUT MMI, it is
                        a versatile training related to the fields of multimedia. During the training, you acquire many
                        skills in areas such as project management, web development, communication, networks or
                        audiovisual production.
                        <br>
                        <br>
                        I try to learn more about these topics every day. I want to continue my
                        studies next year in web development.
                        <br>
                        <br>
                        Always motivated and invested in the projects I undertake. I pay attention to detail and
                        prioritize quality over quantity!
                    </p>
                    <div data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                        data-aos-once="true" data-aos-delay="500">
                        <a href="img/CV EN.pdf" target="_blank">VIEW MY RESUME ➔</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------------- FIN A PROPOS ----------------------->

    <!----------------------- PROJETS ----------------------->

    <?php
    include("connexion.php");
    $requete = "SELECT * FROM enprojet";
    $stmt = $db->query($requete);
    $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
    ?>

    <?php
    $counter = 1;
    foreach ($resultat as $enprojet) {
        $counter++;
        if ($counter % 2 == 0) {
            echo '
                  <section id="projet">
                    <div class="project-left" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                      <div class="project-visual">
                        <div class="type noise">' . $enprojet["categorie_projet"] . '</div>
                        <div class="num-line">
                          <div class="vert-line"></div>
                          <div class="num noise">' . $enprojet["num_projet"] . '</div>
                        </div>
                        <a href="enprojet.php?id=' . $enprojet["id_projet"] . '" class="project-img">
                          <img src="' . $enprojet["image1_projet"] . '"alt="" id="slyde-img" class="hover1" draggable="false">
                        </a>
                      </div>
                      <div class="project-title">
                        <div class="project-title-filled">
                          <a href="enprojet.php?id=' . $enprojet["id_projet"] . '">
                            <h2 class="noise slyde-title">' . $enprojet["nom1_projet"] . '</h2>
                            <h2 class="noise slyde-title">' . $enprojet["nom2_projet"] . '</h2>
                          </a>
                        </div>
                        <div class="project-title-outline">
                          <a href="enprojet.php?id=' . $enprojet["id_projet"] . '">
                            <h2 class="slyde slyde-title">' . $enprojet["nom1_projet"] . '</h2>
                            <h2 class="slyde slyde-title">' . $enprojet["nom2_projet"] . '</h2>
                          </a>
                        </div>
                      </div>
                    </div>
                  </section>';
        } else {
            echo '
                    <section id="projet">
                    <div class="project-right" data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <div class="project-visual">
                    <div class="type-right noise">' . $enprojet["categorie_projet"] . '</div>
                    <div class="num-line-right">
                        <div class="vert-line"></div>
                        <div class="num-right noise">' . $enprojet["num_projet"] . '</div>
                    </div>
                    <a href="enprojet.php?id=' . $enprojet["id_projet"] . '" class="project-img-right darker">
                        <img src="' . $enprojet["image1_projet"] . '" alt="" id="slyde-img" class="hover1" draggable="false">
                    </a>
                </div>
                <div class="project-title">
                    <div class="project-title-filled-right">
                        <a href="enprojet.php?id=' . $enprojet["id_projet"] . '">
                            <h2 class="noise slyde-title">' . $enprojet["nom1_projet"] . '</h2>
                            <h2 class="noise slyde-title">' . $enprojet["nom2_projet"] . '</h2>
                        </a>
                    </div>
                    <div class="project-title-outline-right">
                        <a href="enprojet.php?id=' . $enprojet["id_projet"] . '">
                            <h2 class="slyde slyde-title">' . $enprojet["nom1_projet"] . '</h2>
                            <h2 class="slyde slyde-title">' . $enprojet["nom2_projet"] . '</h2>
                        </a>
                    </div>
                </div>
            </div>
            </section>';
        }
    }
    ?>

    <!----------------------- FIN PROJETS ----------------------->

    <!----------------------- CONTACTE ----------------------->

    <section id="contacte">
        <h1 data-aos="zoom-in-down" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">Contact me</h1>
        <div class="socials" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">
            <div class="box">
                <img src="img/gmail.svg" class="logo" alt="Logo Gmail">
                <a href="mailto:vdtcsjullien@gmail.com" target="_blank"
                    title="mail - Valentin Jullien">vdtcsjullien@gmail.com</a>
            </div>
            <div class="autres">
                <a class="click" href="https://www.linkedin.com/in/valentin-jullien-78abb1221/" target="_blank">
                    <img src="img/linkedin.svg" alt="">LinkedIn</a>
                <a class="click" href="https://www.linkedin.com/in/valentin-jullien-78abb1221/" target="_blank">
                    <img src="img/instagram.svg" alt="">Instagram</a>
            </div>
            <div class="mentions">
                <a class="click" href="enmentions.html">Privacy policy</a>
            </div>
        </div>
    </section>

    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->

    <!----------------------- FIN CONTACTE ----------------------->

    <!----------------------- SCRIPT ----------------------->

    <script src="js/script.js"></script>

    <!----------------------- SCRIPT QUI PERMET DE FAIRE LES ANIMATIONS ----------------------->

    <script>
    AOS.init();
    </script>

    <!----------------------- FIN SCRIPT QUI PERMET DE FAIRE LES ANIMATIONS ----------------------->

    <!----------------------- SCRIPT QUI PERMET DE FAIRE LE TEXTE EN ROND SUR LA PAGE D'ACCUEIL ----------------------->

    <script>
    const text = document.querySelector('.text p');
    text.innerHTML = text.innerText.split('').map(
        (char, i) =>
        `<span style="transform:rotate(${i * 9.3}deg)">${char}</span>`
    ).join('');
    </script>

    <!----------------------- FIN SCRIPT QUI PERMET DE FAIRE LE TEXTE EN ROND SUR LA PAGE D'ACCUEIL ----------------------->

    <!----------------------- SCRIPT QUI FAIT L'ANIMATION D'ECRITURE SUR LA PAGE D'ACCUEIL  ----------------------->

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>

    <script>
    var typed = new Typed(".typing", {
        strings: ["Student in BUT MMI", "Web developer"],
        typeSpeed: 100,
        backSpeed: 50,
        loop: true
    })
    </script>

    <!----------------------- FIN SCRIPT QUI FAIT L'ANIMATION D'ECRITURE SUR LA PAGE D'ACCUEIL  ----------------------->

    <!----------------------- FIN SCRIPT ----------------------->

</body>

</html>