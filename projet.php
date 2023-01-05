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
    <link rel="stylesheet" href="projet.css">
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
            <a href="index.php">Accueil</a>
            <a href="index.php#about-home">A propos</a>
            <a href="index.php#contacte">Contacte</a>
            <a href="mentions.html">Mentions Légales</a>
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
    $requete = "SELECT * FROM projet WHERE id_projet={$_GET["id"]}";
    $stmt = $db->query($requete);
    $projet = $stmt->fetch(PDO::FETCH_ASSOC);
    ?>

    <section class="home2">
        <div class="content-present aos-init aos-animate">
            <div class="project-present" data-aos="fade-right" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <div class="left-col">
                    <div class="year"><?= $projet["annee_projet"] ?></div>
                </div>
                <div class="type-present noise"><?= $projet["categorie_projet"] ?></div>
                <div class="project-img-present">
                    <img src="<?= $projet["image1_projet"] ?> " alt id="resaweb-img" draggable="false">
                </div>
            </div>
            <div class="flex-title" data-aos="fade-right" data-aos-duration="1500"
                data-aos-anchor-placement="top-bottom" data-aos-once="true">
                <div class="project-title-present">
                    <div class="project-title-filled-present">
                        <h2 class="noise">
                            <?= $projet["nom1_projet"] ?>
                            <br>
                            <?= $projet["nom2_projet"] ?>
                        </h2>
                    </div>
                    <div class="project-title-outline-present">
                        <h2>
                            <?= $projet["nom1_projet"] ?>
                            <br>
                            <?= $projet["nom2_projet"] ?>
                        </h2>
                    </div>
                </div>
                <div class="num-line-present">
                    <div class="line-present"></div>
                    <div class="num-present noise"><?= $projet["num_projet"] ?></div>
                </div>
                <a class="project-link" href="<?= $projet["voir_projet"] ?>" target="_blank">VOIR LE PROJET</a>
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

    <?php
    include("connexion.php");
    $requete = "SELECT * FROM projet";
    $stmt = $db->query($requete);
    $resultat = $stmt->fetchall(PDO::FETCH_ASSOC);
    ?>

    <section class="project">
        <div class="description">
            <div class="project-desc">
                <div class="role" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">
                    <div class="role-title"> RÔLE </div>
                    <div class="role-list">
                        <?= $projet["role1_projet"] ?>
                        <br>
                        <?= $projet["role2_projet"] ?>
                    </div>
                </div>
                <div class="outils" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-anchor-placement="top-bottom" data-aos-once="true">
                    <div class="outils-title noise"> OUTILS </div>
                    <div class="outils-list">
                        <?= $projet["outil1_projet"] ?>
                        <br>
                        <?= $projet["outil2_projet"] ?>
                        <br>
                        <?= $projet["outil3_projet"] ?>
                        <br>
                        <?= $projet["outil4_projet"] ?>
                    </div>
                </div>
                <div class="desc" data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">
                    <?= $projet["description_projet"] ?>
                    <!-- <br>
                    J’ai essayé de le rendre le plus responsive possible bien que cela ne soit pas obligatoire. -->
                </div>
            </div>
        </div>
        <div class="project-gallery">
            <img src="<?= $projet["image1_projet"] ?> " alt draggable="false" class="portrait-chinois"
                data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                data-aos-once="true">

            <img src="<?= $projet["image2_projet"] ?> " alt alt draggable="false" class="portrait-chinois"
                data-aos="zoom-out" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                data-aos-once="true">

            <div class="portrait-chinois-wrapper">

                <img src="<?= $projet["image3_projet"] ?> " alt draggable="false" class="accueil-mobile"
                    data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

                <img src="<?= $projet["image4_projet"] ?> " alt draggable="false" class="page-mobile"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

            </div>

            <div class="portrait-chinois-wrapper">

                <img src="<?= $projet["image5_projet"] ?> " alt draggable="false" class="accueil-mobile"
                    data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

                <img src="<?= $projet["image6_projet"] ?> " alt draggable="false" class="page-mobile"
                    data-aos="fade-left" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
                    data-aos-once="true">

            </div>
        </div>
        <div class="credits" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">
            <div class="credits-container">
                <div class="credits-title noise"><?= $projet["credits_projet"] ?></div>
                <div class="credits-list">
                    <div class="credits-role">
                        <?= $projet["creditsrole1_projet"] ?>
                        <br>
                        <?= $projet["creditsrole2_projet"] ?>
                        <br>
                        <?= $projet["creditsrole3_projet"] ?>
                        <br>
                        <?= $projet["creditsrole4_projet"] ?>
                        <br>
                    </div>
                    <div class="credits-name">
                        <a href="<?= $projet["site1_projet"] ?>" target="_blank">
                            <?= $projet["creditsnom1_projet"] ?>
                        </a>
                        <br>
                        <a href="<?= $projet["site2_projet"] ?>" target="_blank">
                            <?= $projet["creditsnom2_projet"] ?>
                        </a>
                        <br>
                        <a href="<?= $projet["site3_projet"] ?>" target="_blank">
                            <?= $projet["creditsnom3_projet"] ?>
                        </a>
                        <br>
                        <a href="<?= $projet["site4_projet"] ?>" target="_blank">
                            <?= $projet["creditsnom4_projet"] ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="next-project" data-aos="fade-right" data-aos-duration="1500" data-aos-anchor-placement="top-bottom"
            data-aos-once="true">
            <a href="<?= $projet["lien_projet"] ?>" class="project-link"><?= $projet["next_projet"] ?>
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