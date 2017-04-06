<!DOCTYPE html>
<html lang="fr" ng-app="statsApp">

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

<body ng-controller="statsController">
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand">
                    <a href="index.php"><img src="contenu/images/LogoV2.svg"></a>
                </li>
                <li class="anim switch-list"> <a href="index.php#container-map"><i class="fa fa-map" aria-hidden="true"></i> Carte</a> </li>
                <li class="anim switch-list"> <a href="list.php#container-list"><i class="fa fa-list" aria-hidden="true"></i> Liste</a> </li>
                <li class="anim"> <a href="stat.php"><i class="fa fa-bar-chart" aria-hidden="true"></i>
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
                <div class="row">
                   
                        <div class="switcher-stats">
                            <a id="stat1" href="#stat1">STAT 1</a>
                             <a id="stat2" href="#stat2">STAT 2</a>
                           <a id="stat3" href="#stat3">STAT 3</a>                          <a id="stat4" href="#stat4">STAT 4</a>
                            <a id="stat5" href="#stat5">STAT 5</a>                       </div>
    
                </div>
                <div class="row">
                    <div class="{{ pageClass }}" ng-view> </div>
                </div>
            </div>
            <!-- /#page-content-wrapper -->
        </section>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <script type="text/javascript" src="./js/jquery.canvasjs.min.js"></script>
    <script type="text/javascript" src="./js/d3.min.js"></script>
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