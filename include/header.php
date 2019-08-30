<?php include_once('include/config.php')  ?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?> - BE-ETC - Bureau d'études thermiques</title>
    <meta name="description" content="Maisons individuelles, logements collectifs, bâtiments tertiaires, de l’étude au suivi de travaux, ETC s’engage à toutes les étapes liées à la performance énergétique et acoustique du bâtiment, en neuf et en rénovation.">
    <meta name="robots" content="index,follow" />
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.default.css">
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">
    <link rel="mask-icon" href="favicon/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    
</head>
<body>
<header class="header" role="banner">
    <div class="wrap">
        <a href="index.php">
        <?php if($index==true){?>
            <img src="img/LogoBleu.png" alt="Logo de l'entreprise ETC">
        <?php }
            else{?>
            <img src="img/LogoBlanc.png" alt="Logo de l'entreprise ETC">
            <?php }?>
        </a>
        <?php if($index==true){?>
        <button class="navicon">
            <span></span>
            <span></span>
            <span class="text-uppercase"></span>
        </button>
        <?php }
            else{?>
        <button class="navicon white">
            <span class="white"></span>
            <span class="white"></span>
            <span class="text-uppercase"></span>
        </button>
            <?php }?>
        <nav class="navigation" role="navigation">
            <ul class="list-unstyled navbar-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Nos services</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <a href="etudethermique.php" class="dropdown-item">Etude thermique et <br />environnementale</a>
                        <a href="audit.php" class="dropdown-item">Audit énergetique</a>
                        <a href="acoustique.php" class="dropdown-item">Acoustique</a>
                        <a href="ingenierie.php" class="dropdown-item">Ingénierie</a>
                        <a href="numerisation.php" class="dropdown-item">Numérisation 3D</a>
                    </div>
                </li>
                <li>
                    <a href="apropos.php">Qui sommes nous?</a>
                </li>
                <li>
                    <a href="contactPage.php">Contactez-nous</a>
                </li>
                <li>
                    <a href="actualites.php">Nos actualités</a>
                </li>
            </ul>
            <div class="customerArea">
                <a href="http://www.private-etc.com" target="_blank" rel="nofollow noopener">Espace client</a>
            </div>
        </nav>
    </div>
</header>
<main>
    <div class="container-fluid">