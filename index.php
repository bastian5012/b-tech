<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
  <head>
    <meta charset="UTF-8">
    <title></title>
    <meta name = "viewport" content = "width=device-width, initial-scale = 1, user-scalable = no">
    <meta http-equiv="X-UA-Compatible" content="Edge" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" type="text/css" media="all" href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="all" href="style.css" />
    <link type="image/ico" rel="icon" href="/images/favicon.ico" />
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link rel="stylesheet" type="text/css" media="all" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" />

    <script>
      var num = 370; //number of pixels before modifying styles

      $(window).bind('scroll', function() {
        if ($(window).scrollTop() > num) {
          $('header').addClass('fixed');
          $('header').find("img").attr("src", "images/logo2.png");
        } else {
          $('header').removeClass('fixed');
          $('header').find("img").attr("src", "images/logo.png");
        }
      });
    </script>
  </head>
  <body>
    <header class="">
      <div class="container">
        <div class="col-md-3">
          <img class="logo" src="images/logo.png" class="img-responsive" />
        </div>
        <nav class="col-md-9">
          <ul class="menuPrincipal">
            <a href="index.php"><li><!--<i class="fa fa-home fa-2x"></i>-->Accueil</li></a>
            <a href=""><li><!--<i class="fa fa-gavel fa-2x"></i>-->Nos services</li></a>
            <a href=""><li><!--<i class="fa fa-desktop fa-2x"></i>-->Portfolio</li></a>
            <a href=""><li><!--<i class="fa fa-slideshare fa-2x"></i>-->Contact</li></a>
          </ul>

        </nav>
      </div>
    </header>
    <div class="slider">
      <img src="images/slider.jpg" class="img-responsive" />


    </div>
  <main>
    <div class="container">
      <div class="row globalContent">
        <div class="col-md-8 content">
          <h1>B-Tech Informatique</h1>
          <p>Fondée en 2009 par Bastian Nyffeler, B-tech informatique est spécialisé dans la création de site internet, le dépannage informatique et le développement d'application.</p>
          <p>Que se soit pour un client privé ou une entreprise, nous sommes à même de répondre à vos besoins.</p>
          <p>Pour plus d'informations sur les travaux réalisés, rendez-vous dans le portfolio.</p>
          <p>Que se soit pour un client privé ou une entreprise, nous sommes à même de répondre à vos besoins.</p>
          <p>Pour plus d'informations sur les travaux réalisés, rendez-vous dans le portfolio.</p>

          <!--          <h2>Notre palette de services</h2>
                    
                    <ul class="services-accueil">
                      <li>Dépannage à domicile ou à distance</li>
                      <li>Installation de logiciels</li>
                      <li>Installation de PC, MAC, Linux</li>
                      <li>Vente de matériel informatique</li>
                      <li>Création de site internet pour un privé ou une entreprise</li>
                      <li>Création de flyers</li>
                      <li>Création de cartes de visite</li>
                      <li>Développement d'applications</li>
                    </ul>
                    
                    Pour plus de détails, consulter le menu « Services »-->


        </div>

        <div class="col-md-4 page-right">
          <h2>Dépannage à distance</h2>
          <p>
            Nous effectuons des dépannages à distance à l'aide du logiciel TeamViewer.</p>
          <p>Pour toute demande de dépannage à distance, faites une demande via notre formulaire.
          </p>
          <form class="form-inline">
            <div class="input-group">
              <span class="input-group-addon">@</span><input type="email" class="form-control" placeholder="Email" id="inputGroupSuccess1" aria-describedby="inputGroupSuccess1Status">
            </div>
            <input type="submit" placeholder="Suivant" class="btn btn-default" value="Suivant >"/>

          </form>

          <!--          <h2>Contact</h2>
                    <p>
                      B-Tech Informatique<br/>
                      Basian Nyffeler<br/>
                      Rouges Champs 100<br/>
                      2742 Perrefitte<br/>
                      <a href="mailto:info@btechinfo.ch">info@btechinfo.ch</a>
                    </p>-->
        </div>


      </div>
      <hr>
      <div class="row service1">
        <div class="col-md-4 box">
          <h3><i class="fa fa-connectdevelop"></i> Développement logiciel</h3>
          <p>
            Nous développons des logiciels sur mesures pour vous.
          </p>
        </div>

        <div class="col-md-4 box">
          <h3><i class="fa fa-wrench"></i> Dépannage</h3>
          <p>
            Dépannage à domicile ou à distance. with an easy drag and drop admin interface.
            Set up new sites in no time!
          </p>
        </div>

        <div class="col-md-4 box">
          <h3><i class="fa fa-connectdevelop"></i> Applications smartphone</h3>
          <p>
            Enfold is a powerful Theme that comes with an easy drag and drop admin interface.
            Set up new sites in no time!
          </p>
        </div>
      </div>
      <div class="row service2">
        <div class="col-md-4 box">
          <h3><i class="fa fa-desktop"></i> Vente de matériel informatique</h3>
          <p>
            Enfold is a powerful Theme that comes with an easy drag and drop admin interface.
            Set up new sites in no time!
          </p>
        </div>

        <div class="col-md-4 box">
          <h3><i class="fa fa-wrench"></i> Dépannage</h3>
          <p>
            Dépannage à domicile ou à distance. with an easy drag and drop admin interface.
            Set up new sites in no time!
          </p>
        </div>

        <div class="col-md-4 box">
          <h3><i class="fa fa-photo"></i> Flyers</h3>
          <p>
            Enfold is a powerful Theme that comes with an easy drag and drop admin interface.
            Set up new sites in no time!
          </p>
        </div>
      </div>



      <!--<div class="row">     
        <div class="col-md-3 case">
          <i class="fa fa-sitemap fa-fw"></i>
          <p>Création de site web pour une entreprise ou un privé.</p>
        </div>
        <div class="col-md-3 case">
          <i class="fa fa-desktop fa-fw"></i>

          <p>Installation, configuration et réparation de votre ordinateur.</p>
        </div>
        <div class="col-md-3 case">
          <i class="fa fa-area-chart fa-fw"></i>
          <p>Faites votre publicité avec des flyers personnalisés.</p>
        </div>
      </div>

      <div class="row">
        <div class="col-md-3 case">
          <i class="fa fa-video-camera fa-fw"></i>
          <p>Montage vidéo, photo pour une entreprise ou un anniversaire.</p>
        </div>
        <div class="col-md-3 case">
          <i class="fa fa-terminal fa-fw"></i>
          <p>Conception d'application web pour votre smartphone.</p>
        </div>
        <div class="col-md-3 case">
          <i class="fa fa-mobile fa-fw"></i>
          <p>Configuration, sauvegarde, synchronisation de votre smartphone.</p>
        </div>
      </div>-->
    </div>
  </main>
  <footer>
    <div class="container">
      <div class="col-md-4">
        B-tech informatique<br/>
        Rue de la Courtine 8<br/>
        2740 Moutier<br/>
        <a href="mailto:info@btechinfo.ch">info@btechinfo.ch</a>
      </div>
      <div class="col-md-4">
        <!--<a href="https://www.facebook.com/pages/B-Tech-Informatique/145186218887342?ref=ts&fref=ts"><img src="images/facebook.png"/></a>-->
      </div>
      <div class="col-md-4">
        © Copyright B-tech Informatique<br/>
        Allons ensemble vers l'excellence
      </div>
    </div>
  </footer>
</body>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.1.1/js/bootstrap.min.js"></script>
</html>
