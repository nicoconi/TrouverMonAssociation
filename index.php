<!DOCTYPE html>
<html lang="fr" ng-app="mainApp">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver Mon Association</title>
    <link rel="icon" type="image/png" href="./contenu/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="./contenu/favicon/favicon-16x16.png" sizes="16x16" />
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/font-awesome.min.css">
    <link rel="stylesheet" href="./css/style.css"> </head>

<body ng-controller="mainController">
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#/"><img src="contenu/images/LogoV2.svg"></a>
                </li>
                <li class="anim switch-list"> <a href="#map"><i class="fa fa-map" aria-hidden="true"></i> Carte</a> </li>
                <li class="anim switch-list"> <a href="#list"><i class="fa fa-list" aria-hidden="true"></i> Liste</a> </li>
                <li class="anim"> <a href="#"><i class="fa fa-bar-chart" aria-hidden="true"></i>
Statistiques</a> </li>
                <li class="anim"> <a href="#"><i class="fa fa-question-circle-o" aria-hidden="true"></i>
Comment utiliser le site ?</a> </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div class="homepage-background"></div>
        <section id="page-content-wrapper" class="homepage">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas" id="hamburger"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
            <div class="container">
                <div class="row"> <img class="logo" src="contenu/images/LogoV2.svg"> </div>
                <div class="row">
                    <div class="slogan">
                        <h1>Trouver mon association</h1> </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                       <form>
                        <div class="input-group">
                           
                            <input type="text" class="form-control" placeholder="Rechercher quelque chose..." id="input-home"> <span class="input-group-btn" id="homeform">
        <button class="btn btn-default" id="btn-animate" type="button">Go !</button>
      </span> </div></form>
                        <!--
                        <!-- /input-group -->
                    </div>
                </div>
            </div> <a class="toggle-down" id="linkto"><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
</a>
            <!-- /#page-content-wrapper -->
        </section>
        <section class="container-both" id="second">
            <div class="switcher">
                <a href="#map">
                    <div class="switch-icon icon-map"><i class="fa fa-map fa-2x" aria-hidden="true"></i> </div>
                </a>
                <a href="#list">
                    <div class="switch-icon icon-list"><i class="fa fa-list fa-2x" aria-hidden="true"></i> </div>
                </a>
            </div>
            <section class="{{ pageClass }}" ng-view> </section>
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <!-- Load Leaflet from CDN-->
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js"></script>
    <!-- Load Esri Leaflet from CDN -->
    <script src="https://unpkg.com/esri-leaflet@2.0.8"></script>
    <script src="https://use.fontawesome.com/8c5f616343.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.6/angular.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.7/angular-route.min.js"></script>
    <script src="./js/app.js"></script>
        <script src="./js/bootstrap.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>