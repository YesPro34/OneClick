@extends('front.master.layout')
@section('header_title')
<title> Création d'application mobile à Marrakech-Oneclick</title>
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
<section class="page-title-area pt-320 pb-140 " data-background="img/bg/breadcumb.jpg ">
    <div class="container ">
        <div class="row ">
            <div class="col-xl-12 ">
                <div class="page-title page-title-white text-center ">
                    <h2>Création Applications Mobile Android / IOS</h2>
                    <div class="breadcrumb-list ">
                        <ul>
                            <li><a href="# ">Acceuil</a></li>
                            <li><a href="# ">Nos Services</a></li>
                            <li>Création Applications Mobile</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- page-title-area end -->

<!-- why-choose-area-start -->
<div class="why-choose-area pt-120 pb-85 ">
    <div class="container ">
        <div class="row ">
            <div class="col-xl-6 col-lg-6 ">
                <div class="choose1-img mb-30 ">
                    <img src="img/creation-app-mobile/applications-mobile-marrakech-paris.png " alt=" " />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 ">
                <div class="why-choose-wrapper mb-30 ">
                    <div class="section-title mb-75 ">
                        <span>ONCLICK</span>
                        <h1>Créez une application mobile au service de votre performance</h1>
                        <div class="section-img ">
                            <img src="img/shape/section.png " alt=" ">
                        </div>

                    </div>
                    <div>
                        <p>Vous aurez une solution de conception d'applications mobiles sous Android et IOS, Tablettes et Smartphones, afin d'obtenir le maximum d'impact possible en termes d'utilisateurs et de déploiement de l'application. Nous gérons
                            le déploiement et la mise à jour sur les stores des nouvelles versions.</p>
                    </div>

                    <div class="agency-button mt-30">
                        <a class="btn btn-yellow active" href="/contact-agence-web-marrakech-maroc">contactez-nous<i class="fa-solid fa-arrow-right-long"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- why-choose-area-end -->

<!-- video-area start -->
<div class="video-area pt-120 pb-90 " style="background-image:url(img/bg/bg8.jpg) ">
    <div class="container ">
        <div class="row ">
            <div class="col-xl-5 col-lg-6 ">
                <div class="agency-wrapper mb-30 ">
                    <div class="section-title ">

                        <h1>NOTRE APPROCHE </h1>
                        <div class="section-img mb-15 ">
                            <img src="img/shape/section.png " alt=" ">
                        </div>
                        <p>Besoin d’une agence de développement d’application mobile ? </p>
                        <p>OneClick , agence web créative, met à votre</p>
                        <p>disposition son équipe d’experts en technologies React Native, Laravel ou encore Symfony.</p>
                        <p>Développez votre marque grâce à nos superbes apps intuitives, 100% personnalisées, conçues pour iOS et Android.</p>

                    </div>
                    <div class="agency-button mt-30 ">
                        <a class="btn btn-yellow active " href="/demande-devis"> DEVIS GRATUIT <i
                                    class="fa-solid fa-arrow-right-long "></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6 ">
                <div class="agency-video mb-30 ">
                    <img style="height:350px ;" src="img/creation-app-mobile/1.png" alt=" ">
                </div>
            </div>
        </div>
    </div>
</div>

<!-- faq-area start -->
<div class="faq-area pt-115 pb-90 ">
    <div class="container ">
        <div class="row ">
            <div class="col-xl-5 col-lg-6 ">
                <div class="faq-img mb-30 ">
                    <img src="img/bg/appmobd.png " alt=" ">
                </div>
            </div>
            <div class="col-xl-6 offset-xl-1 col-lg-6 ">
                <div class="faq-box mb-30 ">
                    <div class="section-title ">
                        <span>Avanatges </span>
                        <h1>Ensemble, nous créons l’avenir numérique de votre entreprise </h1>
                        <div class="section-img ">
                            <img src="img/shape/section.png " alt=" ">
                        </div>
                    </div>

                    <br>
                    <p>Le coût de la création d’applications mobiles et web peut s’avérer très élevé. Chez OneClick, nous comprenons la nécessité des entreprises à concevoir des projets innovants et à assurer la numérisation de leur gestion interne ainsi
                        qu’externe dans le contexte actuel d’hyper-connectivité. En effet, l’accélération digitale propre à notre époque rend la numérisation de votre entreprise indispensable pour la croissance de ses performances.</p>

                    <p>Ainsi, nous vous proposons un rapport qualité prix intéressant et une assistance en développement durant tout le processus de création de votre application web ou mobile.</p>
                </div>
                <div class="agency-button mt-30 ">
                    <a class="btn btn-yellow active " href="/contact-agence-web-marrakech-maroc" title="devis agence web maroc ">Contactez nous <i
                                class="fa-solid fa-arrow-right-long "></i></a>
                </div><br>
                <a href="https://wa.me/212663437770 "><img style="width: 75%; height: auto; " src="img/brand/whatsapp.png " /></a>
            </div>
        </div>

    </div>
</div>
<!-- faq-area end -->

<!-- awesome-features-area-start -->
<div class="awesome-features-area pt-115 pb-90 gray-bg">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title text-center mb-75">
                    <span>Création Site Web Pro</span>
                    <h1>LES ETAPES DE RÉALISATION</h1>
                    <div class="section-img">
                        <img src="img/shape/section.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper white-bg text-center mb-30">
                    <div class="awesome-features-icon-img creation-site-web">
                        <img src="img/features/feat1.jpg" alt="">
                    </div>
                    <div class="awesome-features-text">
                        <h3>CRÉATION OU ANALYSE DU CAHIER DES CHARGES</h3>
                        <p>
                            CRÉATION OU ANALYSE DU CAHIER DES CHARGES La rédaction du cahier des charges est la première étape de conception d’un site. Ce document de référence liste l’ensemble des objectifs à atteindre ainsi que les contraintes techniques, esthétiques et fonctionnelles
                            du projet.</p>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper white-bg text-center mb-30">
                    <div class="awesome-features-icon-img creation-site-web">
                        <img src="img/features/feat2.jpg" alt="">
                    </div>
                    <div class="awesome-features-text">
                        <h3>UX / UI DESIGN</h3>
                        <p>Cette étape permet de définir les profils types de vos utilisateurs (qui ils sont, leurs besoins, leurs attentes), mais aussi toute l’identité visuelle de votre site. L’objectif est de créer un site intuitif et une navigation
                            fluide pour les visiteurs.
                            <br>
                            <br> <br>

                        </p>
                    </div>

                </div>

            </div>

            <div class="col-xl-4 col-lg-4 col-md-6">
                <div class="awesome-features-wrapper white-bg text-center mb-30">
                    <div class="awesome-features-icon-img creation-site-web">
                        <img src="img/features/feat3.jpg" alt="">
                    </div>
                    <div class="awesome-features-text">
                        <h3>
                            DÉVELOPPEMENT BACKEND/FRONTEND ET BACK OFFICE</h3>
                        <p>Développement de toutes les spécificités techniques en fonction des technologies choisies. Cette étape permet également de configurer le back-office (CMS) et de créer l’arborescence du site.</p>
                    </div>
                    <br>

                </div>
            </div>

        </div>
        <div class="row">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2">
                <div class="section-title text-center mb-75">
                    <a href="/demande-devis"><button class="btn btn-primary"> Demandez un devis</button></a>

                </div>
            </div>
        </div>

    </div>

</div>

<!-- awesome-features-area-end -->

<!-- promo-area-start	 -->
<div class="promo-area pt-120 pb-90 ">
    <div class="container ">
        <div class="row ">
            <div class="col-xl-6 col-lg-6 ">
                <div class="promo2-img mb-30 ">
                    <img src="img/creation-app-mobile/Smartphone.png " alt=" " />
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 ">
                <div class="single-promo mb-30 ">
                    <div class="promo-text promos-text ">
                        <h1>Design - Conception</h1>

                        <ul class="promos-link ">
                            <li>
                                <div class="promos-info ">
                                    <div class="promos-icon ">
                                        <i class="fa-solid fa-check "></i>
                                    </div>
                                </div>
                                <div class="promos-text ">
                                    <h5>
                                        Design</h5>

                                    <span> Un utilisateur sur un smartphone se retrouve avec un petit écran, il faut donc que l’information soit visible sans difficulté. C’est pourquoi nous attachons une grande importance au design et à l’ergonomie de votre application mobile. </span>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="promos-info ">
                                    <div class="promos-icon ">
                                        <i class="fa-solid fa-check "></i>
                                    </div>
                                </div>
                                <div class="promos-text ">
                                    <h5>Conception</h5>
                                    <span>    Notre équipe développe vos applications avec les nouvelles technologies mobiles Apple (iPhone, Ipad, Apple Watch) et Android, mobiles et tablettes.
                                    </span>
                                </div>
                            </li>
                            <br>
                            <li>
                                <div class="promos-info ">
                                    <div class="promos-icon ">
                                        <i class="fa-solid fa-check "></i>
                                    </div>
                                </div>
                                <div class="promos-text ">
                                    <h5>Maintenance</h5>
                                    <span>Nous pouvons vous proposer un service de maintenance et de mise à jour de votre application</span>
                                </div>

                            </li>
                            <br>


                            <div class="agency-button mt-30 ml-5 ">
                                <a class="btn btn-yellow active " href="/demande-devis">Devis Gratuit <i class="fa-solid fa-arrow-right-long "></i></a>
                            </div>
                            <div class="col-md-6 mt-30 ml-4 ">
                                <ul class="xs-list list-inline text-right ">

                                    <a href="https://wa.me/212663437770 "><img style="width:100%; height: auto; margin-left:2px; " class="responsive " src="img/brand/whatsapp.png " alt="Whatsapp Création site web marrakech "></a>

                                </ul>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- promo-area-end	 -->

<!--exemples start -->
<!-- awesome-features-area-start -->
<div class="awesome-features-area pt-115 pb-90 gray-bg ">
    <div class="container ">
        <div class="row ">
            <div class="col-xl-8 col-lg-8 offset-lg-2 offset-xl-2 ">
                <div class="section-title text-center mb-75 ">

                    <h1>Exemples des Applications Mobile sur-mesure</h1>
                    <div class="section-img ">
                        <img src="img/shape/section.png " alt=" ">
                    </div>
                    <p class="parg-create-site ">Nous réalisons une application mobile à votre image</p>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="col-xl-4 col-lg-4 col-md-6 ">
                <div class="awesome-features-wrapper text-center mb-30 ">
                    <div class="awesome-features-icon-img ">
                        <img class="img-create-site " src="img/creation-app-mobile/Healthapp.jpg " alt=" " />
                    </div>
                    <div class="awesome-features-text ">
                        <h3>SANTÉ</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 ">
                <div class="awesome-features-wrapper text-center mb-30 ">
                    <div class="awesome-features-icon-img ">
                        <img class="img-create-site " src="img/creation-app-mobile/banking app.jpg " alt=" " />
                    </div>
                    <div class="awesome-features-text ">
                        <h3>BANKING</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 ">
                <div class="awesome-features-wrapper text-center mb-30 ">
                    <div class="awesome-features-icon-img ">
                        <img class="img-create-site " src="img/creation-app-mobile/rentalcar.jpg " alt=" " />
                    </div>
                    <div class="awesome-features-text ">
                        <h3>LOCATION DE VOITURE</h3>
                    </div>
                </div>
            </div>
        </div>

        <!-- awesome-features-area-start -->

        <div class="row ">
            <div class="col-xl-4 col-lg-4 col-md-6 ">
                <div class="awesome-features-wrapper text-center mb-30 ">
                    <div class="awesome-features-icon-img ">
                        <img class="img-create-site " src="img/creation-app-mobile/training.jpg " alt=" " />
                    </div>
                    <div class="awesome-features-text ">
                        <h3> SPORT</h3>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 ">
                <div class="awesome-features-wrapper text-center mb-30 ">
                    <div class="awesome-features-icon-img ">
                        <img class="img-create-site " src="img/creation-app-mobile/infos.jpeg " alt=" " />
                    </div>
                    <div class="awesome-features-text ">
                        <h3>JOURNALE</h3>
                    </div>
                </div>
            </div>
            <div class=" col-xl-4 col-lg-4 col-md-6 ">
                <div class=" awesome-features-wrapper text-center mb-30 ">
                    <div class="awesome-features-icon-img ">
                        <img style="height: 200px; " class="img-create-site " src="img/creation-app-mobile/restaurants.png " alt=" " />
                    </div>
                    <div class="awesome-features-text ">
                        <h3>RESTAURATION</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


    
@endsection


    

   