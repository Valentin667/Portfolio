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
    <link rel="stylesheet" href="enprojet.css">
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
            <a href="enaccueil.php#about-home">About</a>
            <a href="enaccueil.php#contacte">Contact</a>
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
                <a href="projet.php" class="noise">
                    FR
                </a>
            </div>
            <div class="en">
                <a href="enprojet.php" class="noise">
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

    <!----------------------- ACCUEIL PROJETS ----------------------->

    <?php
    include("connexion.php");
    $requete = "SELECT * FROM enprojet WHERE id_projet={$_GET["id"]}";
    $stmt = $db->query($requete);
    $enprojet = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

    <section class="home2">
        <div class="content-present aos-init aos-animate">
            <div class="project-present" data-aos="fade-right" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <div class="left-col">
                    <div class="year"><?= $enprojet["annee_projet"] ?></div>
                </div>
                <div class="type-present noise"><?= $enprojet["categorie_projet"] ?></div>
                <div class="project-img-present">
                    <img src="<?= $enprojet["image1_projet"] ?> " alt id="resaweb-img" draggable="false">
                </div>
            </div>
            <div class="flex-title" data-aos="fade-right" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <div class="project-title-present">
                    <div class="project-title-filled-present">
                        <h2 class="noise">
                            <?= $enprojet["nom1_projet"] ?>
                            <br>
                            <?= $enprojet["nom2_projet"] ?>
                        </h2>
                    </div>
                    <div class="project-title-outline-present">
                        <h2>
                            <?= $enprojet["nom1_projet"] ?>
                            <br>
                            <?= $enprojet["nom2_projet"] ?>
                        </h2>
                    </div>
                </div>
                <div class="num-line-present">
                    <div class="line-present"></div>
                    <div class="num-present noise"><?= $enprojet["num_projet"] ?></div>
                </div>
                <a class="project-link" href="<?= $enprojet["voir_projet"] ?>" target="_blank">SEE THE PROJECT</a>
            </div>
        </div>
        </div>
        <div class="field" data-aos="zoom-in-up" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">
            <div class="mouse"></div>
        </div>
    </section>

    <!----------------------- FIN ACCUEIL PROJETS ----------------------->

    <!----------------------- PRESENTATION PROJETS ----------------------->

    <section class="project">
        <div class="description">
            <div class="project-desc">
                <div class="role" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">
                    <div class="role-title"> ROLE </div>
                    <div class="role-list">
                        <?= $enprojet["role1_projet"] ?>
                        <br>
                        <?= $enprojet["role2_projet"] ?>
                    </div>
                </div>
                <div class="outils" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-anchor-placement="top-bottom" data-aos-once="true">
                    <div class="outils-title noise"> TOOLS </div>
                    <div class="outils-list">
                        <?= $enprojet["outil1_projet"] ?>
                        <br>
                        <?= $enprojet["outil2_projet"] ?>
                        <br>
                        <?= $enprojet["outil3_projet"] ?>
                        <br>
                        <?= $enprojet["outil4_projet"] ?>
                    </div>
                </div>
                <div class="desc" data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">
                    <?= $enprojet["description_projet"] ?>
                    <!-- <br>
                    J’ai essayé de le rendre le plus responsive possible bien que cela ne soit pas obligatoire. -->
                </div>
            </div>
        </div>
        <div class="project-gallery">
            <img src="<?= $enprojet["image1_projet"] ?> " alt draggable="false" class="portrait-chinois"
                data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                data-aos-once="true">

            <img src="<?= $enprojet["image2_projet"] ?> " alt alt draggable="false" class="portrait-chinois"
                data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                data-aos-once="true">

            <div class="portrait-chinois-wrapper">

                <img src="<?= $enprojet["image3_projet"] ?> " alt draggable="false" class="accueil-mobile"
                    data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

                <img src="<?= $enprojet["image4_projet"] ?> " alt draggable="false" class="page-mobile"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

            </div>

            <div class="portrait-chinois-wrapper">

                <img src="<?= $enprojet["image5_projet"] ?> " alt draggable="false" class="accueil-mobile"
                    data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

                <img src="<?= $enprojet["image6_projet"] ?> " alt draggable="false" class="page-mobile"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

            </div>
        </div>
        <div class="credits" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">
            <div class="credits-container">
                <div class="credits-title noise"><?= $enprojet["credits_projet"] ?></div>
                <div class="credits-list">
                    <div class="credits-role">
                        <?= $enprojet["creditsrole1_projet"] ?>
                        <br>
                        <?= $enprojet["creditsrole2_projet"] ?>
                        <br>
                        <?= $enprojet["creditsrole3_projet"] ?>
                        <br>
                        <?= $enprojet["creditsrole4_projet"] ?>
                        <br>
                    </div>
                    <div class="credits-name">
                        <a href="<?= $enprojet["site1_projet"] ?>" target="_blank">
                            <?= $enprojet["creditsnom1_projet"] ?>
                        </a>
                        <br>
                        <a href="<?= $enprojet["site2_projet"] ?>" target="_blank">
                            <?= $enprojet["creditsnom2_projet"] ?>
                        </a>
                        <br>
                        <a href="<?= $enprojet["site3_projet"] ?>" target="_blank">
                            <?= $enprojet["creditsnom3_projet"] ?>
                        </a>
                        <br>
                        <a href="<?= $enprojet["site4_projet"] ?>" target="_blank">
                            <?= $enprojet["creditsnom4_projet"] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="next-project" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">
            <a href="<?= $enprojet["lien_projet"] ?>" class="project-link"><?= $enprojet["next_projet"] ?>
                ➔</a>
        </div>
    </section>
    <!----------------------- FIN PRESENTATION PROJETS ----------------------->

    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->
    <!------ ................................................................................. --------->

    <!----------------------- SCRIPT ----------------------->

    <script src="js/script.js"></script>

    <!----------------------- SCRIPT QUI PERMET DE FAIRE LES ANIMATIONS ----------------------->

    <script>
    AOS.init();
    </script>

    <!----------------------- FIN SCRIPT QUI PERMET DE FAIRE LES ANIMATIONS ----------------------->

    <!----------------------- FIN SCRIPT ----------------------->

</body>

</html>