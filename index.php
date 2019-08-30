<?php 
$index = true;
$title = "Accueil";
include_once("include/header.php");
?>
<div class="bg-container">
    <div class="bg"></div>
</div>
<section class="hero">
    <div class="hero-text">
        <div class="row">
            <div class="hero-text-container ml-lg-5 ml-md-4 ml-3 col-xl-7 col-lg-6 col-11">
                <div class="heroH1">
                    <h1>Le bureau d'études au coeur de vos projets !</h1>
                </div>
                <div class="heroP">
                    <p>ETC est spécialiste dans les domaines thermique, environnementale, acoustique et ingénierie.</p>
                </div>
                <div class="heroBtn">
                    <a href="#main" class="btn btn-lg btn-primary" role="button" title="Aller rapidement au contenu">En savoir plus</a>
                </div>
            </div>
        </div>
        <div class="carouselContainer d-none d-md-block d-lg-none">
            <div class="owl-carousel">
                <div> <img src="img/photo/maisonmoderne.jpg" alt="Maison moderne"> </div>
                <div> <img src="img/photo/maisonmoderne_2.jpg" alt="Maison morderne"> </div>
                <div> <img src="img/photo/bureau.JPG" alt="Bureau de l'entreprise ETC"> </div>
                <div> <img src="img/photo/plan_travail.jpg" alt="Plan de travail avec plan d'étude"> </div>
                <div> <img src="img/photo/autoroute.jpg" alt="Autoroute lors d'un couché de soleil"> </div>
            </div>
        </div>
    </div>
</section>
<section class="main" id="main">
    <div class="row">
        <div class="wrapContent col-12 col-md-10">
            <div class="row">
                <div class="wrapContentP-High offset-xs-3 col-xs-6 offset-lg-3 col-lg-6">
                    <p>ETC vous conseille pour améliorer votre confort au quotidien, que vous soyez professionnel ou particulier.</p>
                </div>
            </div>
            <div class="row">
                <div class="cards col-xs-10 col-lg-4">
                    <div class="cardPicto">
                        <a href="etudethermique.php" title="Allez vers la page étude thermique">
                            <img src="img/ETC_Picto_Orange_Site.png" alt="Pictogramme étude thermique">
                        </a>
                    </div>
                    <div class="cardH2">
                        <h2>Étude thermique et environnementale</h2>
                    </div>
                    <div class="cardStrong">
                        <p><b>Améliorer les modes de consommations énergétiques et préserver l'environnement est notre priorité.</b></p>
                    </div>
                    <div class="cardP">
                        <p>ETC réalise des études thermiques et environnementales pour vous permettre d'optimiser la maitrise de vos consommations énergétiques durablement. Nos expertises s’effectuent aussi bien sur des bâtiments neufs et existants, en respectant les réglementations actuelles (RT 2012, RT EX). ETC vous permet également de préparer l’avenir et les futures réglementations (E+C-, RE 2020).</p>
                    </div>
                </div>
                <div class="cards col-xs-10 col-lg-4">
                    <div class="cardPicto">
                        <a href="acoustique.php" title="Allez vers la page Acoustique">
                            <img src="img/ETC_Picto_Vert_Site.png" alt="Pictogramme étude acoustique">
                        </a>
                    </div>
                    <div class="cardH2">
                        <h2>Étude Acoustique</h2>
                    </div>
                    <div class="cardStrong">
                        <p><b>Proposer une analyse acoustique et/ou des mesures du bâtiment pour améliorer votre bien être intérieur.</b></p>
                    </div>
                    <div class="cardP">
                        <p>ETC vous propose de réaliser une étude acoustique pour vous permettre de trouver une solution optimale quant à la pollution sonore de votre bâtiment. ETC intervient également pour des mesures de fin de chantier, pour assurer une isolation acoustique performante.</p>
                    </div>
                </div>
                <div class="cards mx-lg-auto col-xs-10 col-lg-4">
                    <div class="cardPicto">
                        <a href="ingenierie.php" title="Allez vers la page Ingénierie">
                            <img src="img/ETC_Picto_Bleu_Site.png" alt="Pictogramme ingénierie">
                        </a>
                    </div>
                    <div class="cardH2">
                        <h2>Ingénierie</h2>
                    </div>
                    <div class="cardStrong">
                        <p><b>Vous accompagner dans votre projet en trouvant la meilleure solution dans le respect des normes environnementales.</b></p>
                    </div>
                    <div class="cardP">
                        <p>Avec leur équipe d'experts, ETC réalise un cahier des charges, un audit ainsi qu’une identification poussée de votre projet. Dans le respect des normes environnementales, ETC trouve la meilleure solution en proposant des scénarios post-étude adaptés à vos besoins. Nos domaines de compétences portent sur le chauffage, la ventilation, les courants forts et faibles, le désenfumage…</p>
                    </div>
                </div>
            </div>
            <div class="row numRow justify-content-center">
                <div class="numbers col-xs-10 col-md-5 col-lg-3">
                    <div class="number" id="1st">
                        <p>0</p>
                    </div>
                    <div class="textNumber">
                        <p>années d'expertise</p>
                    </div>
                </div>
                <div class="numbers col-xs-10 col-md-5 col-lg-3">
                    <div class="number" id="2nd">
                        <p>0</p>
                    </div>
                    <div class="textNumber">
                        <p>études réalisées par années</p>
                    </div>
                </div>
                <div class="numbers col-xs-10 col-md-5 col-lg-3">
                    <div class="number" id="3rd">
                        <p>0</p>
                    </div>
                    <div class="textNumber">
                        <p>professionnels à votre écoute</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="customerArea col-2 d-none d-md-block">
            <a href="http://www.private-etc.com" target="_blank" rel="nofollow noopener">Espace client</a>
        </div>
    </div>
</section>
<?php include_once("include/contact.php");?>
<?php include_once("include/footer.php");?>