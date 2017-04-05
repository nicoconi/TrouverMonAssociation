<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver Mon Association</title>
    <link rel="icon" type="image/png" href="./contenu/favicon/favicon-32x32.png" sizes="32x32" />
<link rel="icon" type="image/png" href="./contenu/favicon/favicon-16x16.png" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css"> </head>
<script src="https://use.fontawesome.com/8c5f616343.js"></script>

<body>
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand"> <a href="./"><img src="contenu/images/LogoV2.svg"></a></li>
                <li class="anim switch-list"> <a href="#second"><i class="fa fa-map" aria-hidden="true"></i> Carte</a> </li>
                <li class="anim switch-list"> <a href="#container-list"><i class="fa fa-list" aria-hidden="true"></i> Liste</a> </li>
                <li class="anim"> <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>
Statistiques</a> </li>
                <li class="anim"> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i>
Comment utiliser le site ?</a> </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <section id="page-content-wrapper">
             <button type="button" class="hamburger is-closed" data-toggle="offcanvas" id="hamburger"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
            <div class="container">
                <div class="row row-assoc">
                    <div class="col-md-8 col-xs-6" id="container-assoc">
                      <a href="#" onclick="history.go(-1)"><i class="fa fa-chevron-left" aria-hidden="true"></i>
Revenir aux associations</a>
                       <h1>Nom de l'association</h1>
                       <h2><i>Catégorie de l'association</i></h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni, possimus, aut. Consectetur qui esse at, obcaecati beatae quas expedita distinctio asperiores odio? Minima est, mollitia! Voluptates labore quidem quo officiis!</p>
                     <p><b>Adresse</b> : 130 IMP JEAN BRULLER (VERCORS), PARC DE LA GUIRLANDE D2, 34070 MONTPELLIER</p> 
<p><b>Téléphone</b> : 04.67.92.84.01</p>
<p><b>Courriel</b> : adomicileservices34@adh.aso.fr</p>
<p><b>Site web</b></p>
                    </div>
                    <div class="col-md-4 col-xs-6" id="container-icon">
                        <img src="contenu/icones/icon_test.png">
                    </div>
                </div>
                </div>
                <div class="container-fluid" id="container-similaire">
                <div class="container">
                <div class="row">
                <h2 style="color : white; padding : 0; margin : 0; padding-bottom : 20px;">Associations similaires :</h2>
                </div>
                <div class="row" >
                    <div class="col-md-4" style="padding-left:0px;">
                         <div class="assoc-container-similaire">
                            <h2 class="assoc-title">Nom de l'association</h2>
                            <img src="contenu/icones/icon_test.png" class="assoc-icon">
                            <h4 class="assoc-category"><i>Catégorie de l'association</i></h4>
                            <p class="assoc-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore cupiditate modi odit soluta, a aut eaque officia, pariatur ipsam incidunt, sint dolore fugiat assumenda sequi nesciunt velit dolorum suscipit culpa!</p>
                            
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>