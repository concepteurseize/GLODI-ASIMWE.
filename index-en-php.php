<?php 
include ("connexion/connexion.php");
// Récupération du nom de la page
$page = $_SERVER['REQUEST_URI'];

// Enregistrement de la vue dans la base de données
$sql = 'INSERT INTO vues (page, nombre_vues) VALUES (:page, :nombre_vues)';
$stmt = $cnx_bdd->prepare($sql);
$stmt->bindParam(':page', $page);
$stmt->bindParam(':nombre_vues', $nombre_vues);
$nombre_vues = 1;
$stmt->execute();

// Fermeture de la connexion à la base de données
$cnx_bdd = null;
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GLODI ASIMWE MINISTRIES - Accueil</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">
  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/nice-select/nice-select.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <!--================ Start Header Menu Area =================-->
	<header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <h1 style="font-size: 200%;">GLODI ASIMWE MINISTRIES</h1>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav ml-auto mr-auto">
              <li class="nav-item active"><a class="nav-link" href="#accueil">Accueil</a></li>
              <li class="nav-item"><a class="nav-link" href="#mission">Mission</a></li>
              <li class="nav-item"><a class="nav-link" href="#voyage">Voyages</a></li>
              <li class="nav-item"><a class="nav-link" href="#activités">Activités</a></li>
              <li class="nav-item"><a class="nav-link" href="#contact">Contact</a></li>
            </ul>

            <ul class="nav-shop">
              <li class="nav-item"><a class="button button-header" href="#">Faire un don</a></li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>
	<!--================ End Header Menu Area =================-->

  <main class="site-main">
    
    <!--================ Hero banner start =================-->
    <section class="hero-banner" id="accueil">
      <div class="container">
        <div class="row no-gutters align-items-center pt-60px">
          <div class="col-5 d-none d-sm-block">
            <div class="hero-banner__img">
              <img class="img-fluid" src="img/home/hero-bannerNew.jpg" alt="">
            </div>
          </div>
          <div class="col-sm-7 col-lg-6 offset-lg-1 pl-4 pl-md-5 pl-lg-0">
            <div class="hero-banner__content">
              <h4>Missionaire</h4>
              <h1>GLODI ASIMWE</h1>
              <p>En 2016, un lundi 16 mars à 19 heures, le Seigneur m'ouvrit les yeux et je vis du sang couler des semelles de mes chaussures pour se répandre sur toute la RDC. Et un dimanche 31 décembre 2017, de 8 heures à 11 heures, il me parla dans une vision qu'il m'enverrait dans le monde entier pour prêcher l'Évangile de vie avec la puissance des miracles de guérison. C'est pourquoi je me suis engagé avec toute mon équipe à y aller avec son aide, et la vôtre bien sûr.</p>
              <a class="button button-hero" href="https://wa.me/+243844590521">WhatsApp</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--================ Hero banner start =================-->
      <section class="blog_area single-post-area py-80px section-margin--small" id="mission">
      <div class="container">
          <div class="row">
              <div class="col-lg-8 posts-list">
                  <div class="single-post row">
                      <div class="col-lg-12">
                          <div class="feature-img">
                              <img class="img-fluid" src="img/blog/feature-img1.jpg" alt="">
                          </div>
                      </div>
                      <div class="col-lg-3  col-md-3">
                          <div class="blog_info text-right">
                              <div class="post_tag">
                                  <a href="#">#vision,</a>
                                  <a class="active" href="#">#appeldedieu,</a>
                                  <a href="#">#évangile,</a>
                                  <a href="#">#guérison</a>
                              </div>
                              <ul class="blog_meta list">
                                  <li>
                                      <a href="#">Mbandaka
                                          <i class="lnr lnr-user"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="#">Aout, 2021
                                          <i class="lnr lnr-calendar-full"></i>
                                      </a>
                                  </li>
                              </ul>
                              <ul class="social-links">
                                  <li>
                                      <a href="https://www.facebook.com/profile.php?id=100064343371452">
                                          <i class="fab fa-facebook-f"></i>
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://x.com/glodiasimwe25?s=20">
                                        <i class="fab fa-twitter"></i>                                        
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://wa.me/+243844590521">
                                        <i class="fab fa-whatsapp"></i>                                       
                                      </a>
                                  </li>
                                  <li>
                                      <a href="http://www.youtube.com/@asimwetv5877">
                                        <i class="fab fa-youtube"></i>                                        
                                      </a>
                                  </li>
                                  <li>
                                      <a href="https://instagram.com/asimwe2021?igshid=OGY3MTU3OGY1Mw==">
                                        <i class="fab fa-instagram"></i>                                        
                                      </a>
                                  </li>
                              </ul>
                          </div>
                      </div>
                      <div class="col-lg-9 col-md-9 blog_details">
                          <h2>Une Mission pour la RDC et le Monde</h2>
                          <p class="excert">
                              En 2016, un lundi 16 mars à 19 heures, le Seigneur m'ouvrit les yeux et je vis du sang couler des semelles de mes chaussures pour se répandre sur toute la RDC. Et un dimanche 31 décembre 2017, de 8 heures à 11 heures, il me parla dans une vision qu'il m'enverrait dans le monde entier pour prêcher l'Évangile de vie avec la puissance des miracles de guérison.
                          </p>
                          <p>
                              C'est ainsi que j'ai commencé ma mission pour la RDC et le monde. J'ai tenu quelques croisades d'évangélisation dans les villes et villages du pays. J'ai également effectué des descentes dans les rues et autres places publiques, ainsi que dans les hôpitaux, pour annoncer l'Évangile aux personnes qui n'ont pas la chance d'aller à l'église.
                          </p>
                          <p>
                              Grâce à ces activités, j'ai enregistré plus d'une centaine de décisions pour Christ. J'ai également vu de nombreux miracles de guérison, de délivrance et autres, pour la gloire de Dieu.
                          </p>
                      </div>
                      <div class="col-lg-12">
                          <div class="row">
                              <div class="col-6">
                                  <img class="img-fluid" src="img/blog/post-img1.jpg" alt="">
                              </div>
                              <div class="col-6">
                                  <img class="img-fluid" src="img/blog/post-img2.jpg" alt="">
                              </div>
                              <div class="col-lg-12 mt-4">
                                <div class="quotes">
                              J'ai appris que la mission est une aventure passionnante. Elle demande de la foi, de la persévérance et de la collaboration avec le Saint-Esprit. Mais elle est aussi très gratifiante, car elle permet de toucher des vies et de partager l'amour de Dieu.
                          </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="comments-area">
                      <div class="comment-list">
                          <div class="single-comment justify-content-between d-flex">
                              <div class="user justify-content-between d-flex">
                                  <div class="thumb">
                                      <img src="img/blog/alame.jpg" alt="">
                                  </div>
                                  <div class="desc">
                                      <h5>
                                          <a href="#">ADAM ALAME</a>
                                      </h5>
                                      <p class="date">November 4, 2023 at 5:15 pm</p>
                                      <p class="comment">
                                          Lorsque le Frère Glody me parlait de ses projets de voyages Missionnaire, je ne voyais pas comment il allait faire pour quitter Kinshasa et aller à l’aventure, sans les garanties de logement et nourriture et je voyais cela comme des projets à long terme <br>

Mais j’ai été marqué par sa dévotion, sa foi et sa détermination lorsque j’ai vu sur facebook des images de lui quelque part en terre qui m’est inconnu, Nous sommes dans une génération dans laquelle plusieurs jeunes ont des rêves et des aspirations mais il est extrêmement rare de voir ceux qui sont prêt à emboiter le pas, certains attendent le bon moment, quand la vie sera toute rose et que les moyens seront sur table mais heureusement que Dieu inspire encore des jeunes qui soient capable d’avancer par la foi et non par la vue <br>

Que Dieu bénisse ce ministère pour le salut des Ames et parce que les enfants de Dieu ont besoin de s’inspirer de ceux qui accepte de servir Dieu dans le faible commencement
                                      </p>
                                  </div>
                              </div>
                              <div class="reply-btn">
                                  <p>Développeur</p>
                              </div>
                          </div>
                      </div>
                      <div class="comment-list">
                          <div class="single-comment justify-content-between d-flex">
                              <div class="user justify-content-between d-flex">
                                  <div class="thumb">
                                      <img src="img/blog/joseph.jpeg" alt="">
                                  </div>
                                  <div class="desc">
                                      <h5>
                                          <a href="#">Joseph Ngoy</a>
                                      </h5>
                                      <p class="date">November 4, 2023 at 5:15 pm</p>
                                      <p class="comment">
                                          Né de nouveau, il a le cœur pour la moisson des âmes.
                                      </p>
                                  </div>
                              </div>
                              <div class="reply-btn">
                                  <p>Designer graphique</p>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4">
                  <div class="blog_right_sidebar">
                      <aside class="single_sidebar_widget search_widget">
                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget author_widget">
                          <img class="author_img rounded-circle" src="img/blog/author.jpg" alt="">
                          <h4>Gedeon Khonde</h4>
                          <p>Evangéliste de l'Equipe Christ Au Quotidien</p>
                          <div class="social_icon">
                              <a href="#">
                                  <i class="fab fa-facebook-f"></i>
                              </a>
                              <a href="#">
                                  <i class="fab fa-twitter"></i>
                              </a>
                              <a href="#">
                                  <i class="fab fa-github"></i>
                              </a>
                              <a href="#">
                                <i class="fab fa-behance"></i>
                              </a>
                          </div>
                          <p>Après ma conversion de l'islam au christianisme, j'avais besoin de trouver un groupe de personnes passionnées pour le Seigneur, grandissant dans la parole et dans la prière. Le Seigneur m'a permis de faire partie de l'équipe du Christ au Quotidien en 2019. Depuis lors, j'ai voyagé avec le frère Glodi, prêchant la bonne nouvelle avec des signes et des prodiges. Ce que j'ai appris dans ce ministère va au-delà d'une théorie : c'était une expérience inoubliable de voir les démons quitter les gens, des malades être miraculeusement guéris, et une vieille dame recouvrer la vue après 12 ans. Cela prouve que Jésus est vivant !
                          </p>
                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget popular_post_widget">
                          <h3 class="widget_title">Nos Réseaux Sociaux</h3>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post5.jpg" alt="post">
                              <div class="media-body">
                                  <a href="https://www.facebook.com/profile.php?id=100064343371452">
                                      <h3>Facebook</h3>
                                  </a>
                                  <p>02 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post2.jpeg" alt="post">
                              <div class="media-body">
                                  <a href="http://www.youtube.com/@asimwetv5877">
                                      <h3>Youtube</h3>
                                  </a>
                                  <p>02 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post3.jpeg" alt="post">
                              <div class="media-body">
                                  <a href="https://x.com/glodiasimwe25?s=20">
                                      <h3>X (Twitter)</h3>
                                  </a>
                                  <p>03 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post1.jpeg" alt="post">
                              <div class="media-body">
                                  <a href="https://wa.me/+243844590521">
                                      <h3>WhatsApp</h3>
                                  </a>
                                  <p>03 Hours ago</p>
                              </div>
                          </div>
                          <div class="media post_item">
                              <img src="img/blog/popular-post/post4.png" alt="post">
                              <div class="media-body">
                                  <a href="https://instagram.com/asimwe2021?igshid=OGY3MTU3OGY1Mw==">
                                      <h3>Instagram</h3>
                                  </a>
                                  <p>01 Hours ago</p>
                              </div>
                          </div>
                          <div class="br"></div>
                      </aside>
                      <aside class="single_sidebar_widget author_widget">
                          <img class="author_img rounded-circle" src="img/blog/add.jpg" alt="">
                          <h4>Emmanuel Boiswe</h4>
                          <p>Chargé de la Logistique de l'Equipe Christ Au Quotidien</p>
                          <div class="social_icon">
                              <a href="#">
                                  <i class="fab fa-facebook-f"></i>
                              </a>
                              <a href="#">
                                  <i class="fab fa-twitter"></i>
                              </a>
                              <a href="#">
                                  <i class="fab fa-github"></i>
                              </a>
                              <a href="#">
                                <i class="fab fa-behance"></i>
                              </a>
                          </div>
                          <p>Je me suis connecté au frère Glodi et au "Christ au Quotidien" en 2020, alors qu'il préparait sa première croisade d'évangélisation qui a eu lieu à Kinshasa en octobre de la même année. Avant cette rencontre, j'évangélisais, mais je ne connaissais pas l'évangélisation sous l'aspect de la puissance avec des miracles, comme je l'ai appris dans ce ministère. Aujourd'hui, je vois des miracles et des guérisons se produire non seulement lorsque le frère Glodi prêche, mais aussi lorsque j'impose mes mains aux malades. Pour moi, c'est tout simplement merveilleux de servir à la gloire de Dieu avec ces merveilleux hommes de Dieu !
                          </p>
                          <div class="br"></div>
                      </aside>
                      <aside class="single-sidebar-widget tag_cloud_widget">
                          <ul class="list">
                              <li>
                                  <a href="#">Christ Au Quotidien</a>
                              </li>
                              <li>
                                  <a href="#">Appel de Dieu</a>
                              </li>
                              <li>
                                  <a href="#">Evangile</a>
                              </li>
                              <li>
                                  <a href="#">Guérison</a>
                              </li>
                          </ul>
                      </aside>
                  </div>
              </div>
          </div>
      </div>
  </section>
    <!--================ Hero Carousel start =================-->
    <section class="section-margin mt-0">
      <div class="owl-carousel owl-theme hero-carousel">
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide1.jpg" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>GLODI ASIMWE</h3>
            <p>Visionnaire de l'Equipe Evangélique dénommée <strong>Christ Au Quotidien</strong></p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide2.jpg" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>GEDEON KHONDE</h3>
            <p>Evangéliste de l'Equipe Evangélique dénommée <strong>Christ Au Quotidien</strong></p>
          </a>
        </div>
        <div class="hero-carousel__slide">
          <img src="img/home/hero-slide3.jpg" alt="" class="img-fluid">
          <a href="#" class="hero-carousel__slideOverlay">
            <h3>EMMANUEL BOISWE</h3>
            <p>Chargé de la Logistique de l'Equipe Evangélique dénommée <strong>Christ Au Quotidien</strong></p>
          </a>
        </div>
      </div>
    </section>
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    <section class="section-margin calc-60px" id="voyage">
      <div class="container">
        <div class="section-intro pb-60px">
          <h2>Voyage vers la Province <br><span class="section-intro__style">du Nord-Kivu</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product1.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                <p>En Avion, Quittant de la Ville de Bunia vers la Ville de Beni </p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product2.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                <p>Evangélisation sur un Parking à la Ville de Beni</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product3.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
               <p>Evangélisation à l'Ecole Primaire de l'Eglise CECA 20 (Communauté des Eglises du Christ en Afrique)  MABAKANGA à Beni</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product4.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                <p>Evangélisation sur un Parking à la Ville de Beni</p>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </section>
    
     <section style="margin-top: -6%;" class="section-margin calc-60px">
      <div class="container">
        <div class="section-intro pb-60px">
          <h2>Voyage vers la Province <br><span class="section-intro__style">de l'Equateur</span></h2>
        </div>
        <div class="row">
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product7.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                <p>Village de Bomongo - Sensibilisation pour la croisade "Il est Venu libérer les Captifs"</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product6.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                <p>Mbandaka - Plus d'une Centaine d'Ames sauvées et des malades guéris</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product5.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
               <p>Mbandaka - Troisième Jour de la Croisade "L'Evangile est une puissance de Dieu, Romain 1:16"</p>
              </div>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-3">
            <div class="card text-center card-product">
              <div class="card-product__img">
                <img class="card-img" src="img/product/product8.jpg" alt="">
                <ul class="card-product__imgOverlay">
                  
                </ul>
              </div>
              <div class="card-body">
                <p>Bomongo - Evangélisation de Rue</p>
              </div>
            </div>
           </div>
          </div>
        </div>
      </div>
    </section>
    

    <!-- ================ Blog section start ================= -->  
    <section class="blog" id="activités">
      <div class="container">
        <div class="section-intro pb-60px">
          <h2>Les Activités</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="img/blog/blog1.jpg" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Admin</a></li>
                  <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                </ul>
                <h4 class="card-blog__title"><a href="single-blog.html">Le Saint-Esprit, un guide fidèle</a></h4>
                <p>Sans beaucoup d'argent, mais avec la puissance du Saint-Esprit, j'ai prêché l'Évangile aux familles militaires. Les résultats sont gravés dans les annales de l'éternité.</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="img/blog/blog2.jpg" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Admin</a></li>
                  <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                </ul>
                <h4 class="card-blog__title"><a href="single-blog.html">La vague puissante du Saint-Esprit touche une église</a></h4>
                <p>Cette église a reçu une parole prophétique une ou deux années avant notre arrivée, annonçant que le Seigneur enverrait une vague puissante du Saint-Esprit sur elle. Et ceci s'est avéré être le cas lors de notre tournée missionnaire en 2021. Le quatrième jour de la croisade, j'ai prêché sur le baptême du Saint-Esprit et, comme résultat, l'église a été plongée dans le fleuve du Saint-Esprit, avec des signes du parler en langues, des guérisons et des délivrances. <br>

                Par exemple, une jeune femme qui était au fond de la salle souffrait depuis 25 ans d'écoulements purulents des oreilles et n'entendait pas clairement. Alors que la gloire de Dieu remplissait la salle, elle a ressenti une main la toucher sur les épaules et a été guérie. Une autre femme, rentrant chez elle sans être baptisée du Saint-Esprit, a été remplie de la gloire de Dieu dès qu'elle est arrivée chez elle. Elle est tombée par terre et a été baptisée du Saint-Esprit. Un magicien a également été délivré..</p>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-4 mb-lg-0">
            <div class="card card-blog">
              <div class="card-blog__img">
                <img class="card-img rounded-0" src="img/blog/blog3.jpg" alt="">
              </div>
              <div class="card-body">
                <ul class="card-blog__info">
                  <li><a href="#">By Admin</a></li>
                  <li><a href="#"><i class="ti-comments-smiley"></i> 2 Comments</a></li>
                </ul>
                <h4 class="card-blog__title"><a href="single-blog.html">Les merveilles de Dieu à Mbandaka</a></h4>
                <p>Après la croisade de Bomongo, en Équateur, nous sommes rentrés à Mbandaka, en Équateur, pour une plus grande. Et là, nous avons eu une bonne récolte avec plus d'une centaine de personnes sauvées, des malades guéris, des captifs libérés, et plus de cent personnes baptisées dans le Saint-Esprit. Un jeune homme va retrouver l'usage de ses jambes, une vieille dame va recouvrir la vue après 12 ans dans le noir, et d'autres vies ont changé. <br>
                Je me souviens juste qu'à notre arrivée à Mbandaka, un ange du Seigneur m'a parlé dans un songe pour m'avertir qu'il se ferait des merveilles sur cette terre car elle appartenait à Dieu. Encore une preuve que Jésus est vivant !</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- ================ Blog section end ================= -->  

    <!-- ================ Subscribe section start ================= --> 
    <section class="subscribe-position" id="contact">
      <div class="container">
        <div class="subscribe text-center">
          <h3 class="subscribe__title">Abonnez-Vous à Notre Newsletter</h3>
          <p>Vous Recevrez des Mails et des Annonces de notre part pour vous tenir au courant de nos différentes activités et voyages Missionaire</p>
          <div id="mc_embed_signup">
            <form target="_blank" action="#" method="post" class="subscribe-form form-inline mt-5 pt-1">
              <div class="form-group ml-sm-auto">
                <input class="form-control mb-1" type="email" id="email" name="email" placeholder="Entrez Votre Adresse Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Entrez Votre Adresse Email '" >
                <div class="info"></div>
              </div>
              <button class="button button-subscribe mr-auto mb-1" name="btnenregistrer" id="btnenregistrer">Souscrivez</button>
              <div style="position: absolute; left: -5000px;">
                <input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="Yes" type="text">
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>
    <!-- ================ Subscribe section end ================= --> 

    

  </main>


  <!--================ Start footer Area  =================-->	
	<footer class="footer">
		<div class="footer-area">
			<div class="container">
				<div class="row section_gap">
					<div class="col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title large_title">Notre Mission</h4>
							<p>
								Notre mission est d'apporter l'Évangile sur toute la terre et emmener le plus grand nombre de cette génération à dire Oui à Jésus.
							</p>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Les Liens</h4>
							<ul class="list">
								<li><a href="https://www.facebook.com/profile.php?id=100064343371452">Facebook</a></li>
								<li><a href="https://x.com/glodiasimwe25?s=20">X (Twitter) </a></li>
								<li><a href="https://instagram.com/asimwe2021?igshid=OGY3MTU3OGY1Mw==">Instagram</a></li>
								<li><a href="http://www.youtube.com/@asimwetv5877">Youtube</a></li>
                <li><a href="https://wa.me/+243844590521">WhatsApp</a></li>
							</ul>
						</div>
					</div>
					<div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
						<div class="single-footer-widget tp_widgets">
							<h4 class="footer_title">Contactez-Nous</h4>
							<div class="ml-40">
								<p class="sm-head">
									<span class="fa fa-location-arrow"></span>
									Kinshasa-RDC
								</p>
					   <br>
								<p class="sm-head">
									<span class="fa fa-phone"></span>
									Numéro de Téléphone
								</p>
								<p>
									+243 844 590 521 <br>
									+243 814 165 833
								</p>
	
								<p class="sm-head">
									<span class="fa fa-envelope"></span>
									Email
								</p>
								<p>
									glodiasimwe25@gmail.com
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="footer-bottom">
			<div class="container">
				<div class="row d-flex">
					<p class="col-lg-12 footer-text text-center">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Glodi Asimwe Ministries <i class="fa fa-church" aria-hidden="true"></i> Personnalisé Par <a href="https://wa.me/+243976187614" target="_blank">Adam Alame</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				</div>
        <?php 
    // Connexion à la base de données
      include ("connexion/connexion.php");
    // Récupération du nom de la page
    $page = $_SERVER['REQUEST_URI'];

    // Récupération du nombre de vues de la page
    $sql = 'SELECT COUNT(*) AS nombre_vues FROM vues WHERE page = :page';
    $stmt = $cnx_bdd->prepare($sql);
    $stmt->bindParam(':page', $page);
    $stmt->execute();
    $nombre_vues = $stmt->fetchColumn();
    ?>
        <h5 class="card-title" style="color: white; font-size: 100%; margin-top: 5%; font-family: tahoma;">
              Nombre de vues:
              <p class="card-text">
                Cette Page a recu <?php 
                echo $nombre_vues; ?> Visites
              </p>
          </h5>
			</div>
		</div>
	</footer>
	

  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/skrollr.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/jquery.ajaxchimp.min.js"></script>
  <script src="vendors/mail-script.js"></script>
  <script src="js/main.js"></script>


  <script type="text/javascript">
  function enregistrerDirecteur(email) {
  // Génération du code de confirmation
  var code = Math.floor(Math.random() * (9999 - 1000 + 1)) + 1000;
  
  // Enregistrement de l'utilisateur
  $.ajax({
    url: 'ajaxdirecteur.php',
    type: 'POST',
    data: {
      'action_enregistrer_directeur': 1,
      'email': email,
      'code_confirmation': code,
      'statut_mail': 1
    },
    success: function(data) {
      // Le code à exécuter après la réponse du serveur
      if (data === "Adresse Email envoyée Final") {
        // Faites quelque chose en cas de succès, par exemple afficher un message
        alert("Nous avons sauvegardé votre Adresse Email, Merci de votre Courtoisie");
      } else {
        // Faites quelque chose en cas d'échec, par exemple afficher un message d'erreur
        alert("Erreur lors de l'enregistrement.");
      }
    },
    error: function() {
      // Gérer les erreurs de la requête AJAX
      alert("Erreur de communication avec le serveur.");
     }
   });
  }


$(document).ready(function() {
  // Événement onclick du bouton "Enregistrer"
  $('#btnenregistrer').click(function() {
    // Affectation des variables
    var email = $("#email").val();

    // Test si le champ est vide
    if (email == '') {
      alert("Veuillez renseigner l'Email");
      return false;
    }
  
    // Test si la valeur entrée est admin
    if (email == "admin") {
      // Redirection vers la page de connexion
      window.location.href = "operateur_et_securite/login.php";
      return false;
    } else {
      // Test si l'adresse email est valide
      if (/[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}?/.test(email)) {
        // Enregistrement de l'utilisateur
        enregistrerDirecteur(email);
      } else {
        alert("Veuillez renseigner une Adresse Email Valide");
        return false;
      }
    }
  });
});
  </script>
</body>
</html>