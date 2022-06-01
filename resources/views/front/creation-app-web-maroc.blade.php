@extends('front.master.layout')
@section('header_title')
<title>Création d'application web à Marrakech-Oneclick</title>
    
@endsection
@section('content')
 <!-- header-start -->
 <header class="header-transparent">
    <div class="top-bar d-none d-md-block">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 d-flex align-items-center">
                    <div class="header-info">
                        <p><i class="fa-solid fa-phone-flip"></i> <span>212 663 437 770</span></p>
                        <p><i class="fa-solid fa-envelope-open-text"></i> <span><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="590a2c2929362b2d193e34383035773a3634">contact@oneclick.ma</a></span></p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="header-btn f-right">
                        <a href="/demande-devis">Devis Gratuit</a>
                    </div>
                    <div class="header-social f-right">
                        <a href="https://web.facebook.com/Creationdessiteswebmarrakechmaroc/?_rdc=1&_rdr" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="https://twitter.com/Hamza_Kelvin" target="_blank"><i class="fab fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/in/site-web-marrakech-1a0894184/" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/creation.site.web.marrakech/" target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sticky-header" class="main-menu-area menu-area-2 menu-area-3">
        <div class="container">
            <div class="menu-bg p-0 menu-bg-3">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 d-flex align-items-center">
                        <div class="logo">
                            <a href="/"><img src="img/logo/logo-white.png" alt="" /></a>
                        </div>
                    </div>
                    <div class="col-xl-9 col-lg-9">
                        <div class="menu-bar info-bar text-right d-none d-md-none d-lg-block">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>

                        <div class="main-menu text-right">
                            <nav id="mobile-menu">
                                <ul>
                                    <li class="active"><a href="/">Accueil </a>

                                    </li>
                                    <li><a href="/A-propos-agence-web-maroc">A propos</a>

                                    </li>
                                    <li><a href="/fonctionnalites-logiciel-facturation-maroc">Fonctionnalités</a>
                                        <ul class="sub-menu text-left">
                                            <li><a href="/facture-logiciel-facturation-maroc">factures</a></li>
                                            <li><a href="/devis-logiciel-facturation-maroc">Devis</a></li>
                                            <li><a href="/gestion-stock-logiciel-facturation-maroc">Gestion de stock</a></li>
                                            <li><a href="/gestion-commerciale-logiciel-facturation-maroc">Gestion  commerciale</a></li>
                                            <li><a href="/multi-devis-langue-logiciel-facturation-maroc">Multi-devis/multi-langue</a></li>
                                            <li><a href="/gestion-achats-fournisseur-logiciel-facturation-maroc">Commande Fournisseur</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="/blog-agence-web-maroc">blog</a>

                                        <li>
                                            <a href="/services-agence-web-marrakech-maroc">Nos Services</a>
                                            <ul class="sub-menu text-left">
                                                <li><a href="/creation-site-web-maroc">Création Site Web Pro</a></li>
                                                <li><a href="/creation-app-web-maroc">Création Application Web </a></li>
                                                <li>
                                                    <a href="/creation-app-mobile-maroc">Création Application Mobile Android IOS</a>
                                                </li>
                                                <li>
                                                    <a href="/referencement-web-maroc">Referencement web</a>
                                                </li>
                                                <li><a href="/design-graphic-maroc">Création & Design Graphique</a></li>
                                                <li>
                                                    <a href="/publicite-sur-internet-marrakech-maroc">Publicite sur internet</a>
                                                </li>
                                                <li>
                                                    <a href="/offshore-web-marrakech-maroc">Offshore</a>
                                                </li>
                                                <li>
                                                    <a href="/formation-conseils-marrakech-maroc">Formation & Consulting</a>
                                                </li>

                                            </ul>
                                        </li>
                                        <li><a href="/offshore-web-marrakech-maroc">Offshore</a></li>
                                        <li><a href="/contact-agence-web-marrakech-maroc">contact</a></li>
                                </ul>
                            </nav>
                        </div>
                        <div class="mobile-menu"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="extra-info">
        <div class="close-icon">
            <button>
                <i class="far fa-window-close"></i>
            </button>
        </div>
        <div class="logo-side mb-30">
            <a href="/">
                <img src="img/logo/logo-white.png" alt="" />
            </a>
        </div>
        <div class="side-info mb-30">
            <div class="contact-list mb-30">
                <h4>Address</h4>
                <p>46 Résidence Youssef Bnou Tachfine, Avenue My Abdellah, Marrakech</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Téléphone</h4>
                <p>+212 615 284 405

                </p>
                <p>+212 663 437 770</p>
            </div>
            <div class="contact-list mb-30">
                <h4>Email</h4>
                <p><a href="http://bdevs.net/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="bdd4d3dbd2fdd8c5dcd0cdd1d893ded2d0">contact@oneclick.ma</a></p>

            </div>
        </div>
        <div class="instagram">
            <a href="/blog-details-1-agence-web-maroc">
                <img src="img/portfolio/p1.jpg" alt="">
            </a>
            <a href="/blog-details-2-agence-web-maroc">
                <img src="img/portfolio/p2.jpg" alt="">
            </a>
            <a href="/blog-details-3-agence-web-maroc">
                <img src="img/portfolio/p3.jpg" alt="">
            </a>
            <a href="/blog-details-4-agence-web-maroc">
                <img src="img/portfolio/p4.jpg" alt="">
            </a>
            <a href="/blog-details-5-agence-web-maroc">
                <img src="img/portfolio/p5.jpg" alt="">
            </a>
            <a href="/blog-details-6-agence-web-maroc">
                <img src="img/portfolio/p1.jpg" alt="">
            </a>
        </div>
        <div class="social-icon-right mt-20">
            <a href="https://web.facebook.com/Creationdessiteswebmarrakechmaroc/?_rdc=1&_rdr">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a href="https://twitter.com/Hamza_Kelvin">
                <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
                <i class="fab fa-google-plus-g"></i>
            </a>
            <a href="https://www.instagram.com/creation.site.web.marrakech/">
                <i class="fab fa-instagram"></i>
            </a>
        </div>
    </div>
</header>
<!-- header-end -->

<!-- page-title-area start -->
<section class="page-title-area pt-320 pb-140" data-background="img/bg/breadcumb.jpg">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="page-title page-title-white text-center">
                    <h2>Création Application Web</h2>
                    <div class="breadcrumb-list">
                        <ul>
                            <li><a href="#">Accuiel</a></li>
                            <li><a href="#">Nos services</a></li>
                            <li>Création Application Web</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-title-area end -->

<!-- promo-area-start -->
<div class="promo-area promo1-area pt-115 pb-75" style="background-image:url(img/bg/promo-bg.jpg); background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="single-promo mb-30">
                    <div class="promo-text promos-text">
                        <h1>AGENCE DE CRÉATION D’APPLICATION WEB À<br> PARIS<br> ET À MARRAKECH</h1>
                        <p>Vous avez un projet de développement web ? Vous souhaitez améliorer la fonctionnalité et les performances de votre sites web selon le fonctionnement de votre entreprise ? Notre équipe de développeurs / intégrateurs a toute
                            l’expertise pour concevoir et intégrer tous les développements dont vous aurez besoin , notre Chef de projet vous guidera et trouvera la meilleure option à votre problématique. </p>
                        <ul class="promos-link">
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Digitaliser vos services et expertises</span>

                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Conquérir un nouveau marché
                                    </span>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span> Créer une nouvelle verticale business</span>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Donner une nouvelle image à votre entreprise</span>
                                </div>
                            </li>
                        </ul>
                        <div class="agency-button mt-30">
                            <a class="btn btn-yellow active" href="/contact-agence-web-marrakech-maroc" title="devis agence web maroc">Contactez nous <i
                                                                class="fa-solid fa-arrow-right-long"></i></a>
                        </div><br>
                        <a href="https://wa.me/212663437770"><img style="width: 75%; height: auto;" src="img/brand/whatsapp.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promo-area-end -->

<!-- awesome-features-area-start -->
<div class="awesome-features-area pt-115 pb-90 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title text-center mb-75">
                    <span>LE DÉROULEMENT DU DÉVELOPPEMENT DE VOTRE PROJET</span>
                    <h1>De l'idée au projet</h1>
                    <div class="section-img">
                        <img src="img/shape/section.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper white-bg text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img src="img/features/fe1.png" alt="">
                    </div>
                    <div class="awesome-features-text">
                        <h3>Étude du projet</h3>
                        <p>Identification de vos besoins avec une définition des objectifs.</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper white-bg text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img src="img/features/fe2.png" alt="">
                    </div>
                    <div class="awesome-features-text">
                        <h3>Conception de la maquette</h3>
                        <p>Création graphique : couleurs, typographie, images …etc.</p>

                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper white-bg text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img src="img/features/fe3.png" alt="">
                    </div>
                    <div class="awesome-features-text">
                        <h3>Développement</h3>
                        <p>Création technique de l'application et des fonctionnalités et insertion du contenu.</p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- awesome-features-area-end -->


<!-- video-area-start -->
<div class="video-area pt-120 pb-90">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6">
                <div class="agency-video agency2-video mb-30">
                    <img src="img/creation-app-web/7.png" alt="">
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="agency-wrapper pl-70 mb-30">
                    <div class="section-title">
                        <span>CRÉATION D'APPLICATIONS WEB SUR MESURE</span>
                        <h1>DÉVELOPPEMENT WEB SUR MESURE ET SÉCURISÉ</h1>
                        <div class="section-img mb-15">
                            <img src="img/shape/section.png" alt="">
                        </div>
                        <p>Notre intérêt à accompagner nos clients a réaliser un site internet efficace afin de générer du business. Chaque client qui gràce à son site sur mesure va générer du business et ainsi développer son activité est une réussite
                            pour nous aussi !</p>
                    </div>
                    <div class="agency-button mt-30">
                        <a class="btn btn-yellow active" href="/demande-devis"> devis gratuit <i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- video-area-end -->
<!-- promo-area-start-mesure -->
<div class="promo-area promo1-area pt-115 pb-75" style="background-image:url(img/bg/promo-bg.jpg); background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="single-promo mb-30">
                    <div class="promo-text promos-text">
                        <h1>ENTREPRISE DE DÉVELOPPEMENT WEB SUR MESURE À MARRAKECH</h1>
                        <p>Vous avez un projet ? Vous cherchez une agence de développement de votre application web sur mesure au Maroc pour mettre en place un logiciel, une application web ou plateforme en ligne contenant des besoins spécifiques ? Une
                            solution sécurisée, élégante, performante et développée avec les nouvelles technologies ?<br><br> Oneclick.ma met à votre disposition ses experts web pour cerner les besoins digitaux de votre activité, développer votre
                            outil spécifique selon vos exigences et vous accompagner tout au long de la période de développement.<br> Nous créons des Applications Web Scalables, Performantes, et Sécurisées. Oneclick.ma est une agence de développement
                            des applications mobiles et web spécialisée dans la conception et le développement mobile sur Android et IOS, la création des sites web , et le développement des plateformes digitales. Notre équipe est composée de développeurs,
                            designers et chefs de projet, tous experts, et fiers par les applications mobiles et les sites web que nous réalisons pour nos clients, tels que :</p>
                        <ul class="promos-link">
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Le développement des applications web sur mesure</span>
                                </div>

                            </li>
                            <br>
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Le développement des sites web sur mesure</span>
                                </div>

                            </li>
                            <br>
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Marketing digital</span>
                                </div>

                            </li>
                            <br>
                            <li>
                                <div class="promos-info">
                                    <div class="promos-icon">
                                        <i class="fa-solid fa-check"></i>
                                    </div>
                                </div>
                                <div class="promos-text">
                                    <span>Support et maintenance</span>
                                </div>
                            </li>
                            <br>
                        </ul>

                        <div class="agency-button mt-30">
                            <a class="btn btn-yellow active" href="/contact-agence-web-marrakech-maroc" title="devis agence web maroc">Contactez nous <i
                                                            class="fa-solid fa-arrow-right-long"></i></a>
                        </div><br>
                        <a href="https://wa.me/212663437770"><img style="width: 75%; height: auto;" src="img/brand/whatsapp.png" /></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promo-area-end-mesure -->

<!--exemples start -->
<!-- awesome-features-area-start -->
<div class="awesome-features-area pt-115 pb-90 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title text-center mb-75">

                    <h1>Exemples des Applications Web sur-mesure</h1>
                    <div class="section-img">
                        <img src="img/shape/section.png" alt="">
                    </div>
                    <p class="parg-create-site">Nous réalisons une application web à votre image et assurons votre positionnement web</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper  text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img class="img-create-site" src="img/creation-app-web/gestion.png" alt="" />
                    </div>
                    <div class="awesome-features-text">
                        <h3>GESTION DES RESSOURCES HUMAINES</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper  text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img class="img-create-site" src="img/creation-app-web/ecommerce.jpg" alt="" />
                    </div>
                    <div class="awesome-features-text">
                        <h3>COMMERCE DIGITALE</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper  text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img class="img-create-site" src="img/creation-app-web/rentalcar.jpg" alt="" />
                    </div>
                    <div class="awesome-features-text">
                        <h3>LOCATION DES VOITURES</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- awesome-features-area-start -->

        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper  text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img class="img-create-site" src="img/creation-app-web/elearning.jpg" alt="" />
                    </div>
                    <div class="awesome-features-text">
                        <h3> E-LEARNING</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img class="img-create-site" src="img/creation-app-web/scolaire.png" alt="" />
                    </div>
                    <div class="awesome-features-text">
                        <h3>GESTION SCOLAIRE</h3>
                    </div>
                </div>
            </div>
            <div class="  col-xl-4 col-lg-4 col-md-6">
                <div class="  awesome-features-wrapper text-center mb-30">
                    <div class="awesome-features-icon-img">
                        <img class="img-create-site" src="img/creation-app-web/maison.jpg" alt="" />
                    </div>
                    <div class="awesome-features-text">
                        <h3>LOCATION RÉSIDENTIELLE</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection


   

   