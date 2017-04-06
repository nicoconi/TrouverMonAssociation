<!DOCTYPE html>
<html lang="fr">

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

<body>
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
                <li class="anim"> <a href="stat.php"><i class="fa fa-bar-chart" aria-hidden="true"></i> Statistiques</a> </li>
                 <li class="anim"> <a href="about.php"><i class="fa fa-question-circle-o" aria-hidden="true"></i> Qui sommes-nous ?</a></li>
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
                    <div class="switch-icon icon-map"><a href="index.php#container-map"><i class="fa fa-map fa-2x" aria-hidden="true"></i></a> </div>
                </a>
                <a href="#list">
                    <div class="switch-icon icon-list"><a href="list.php#container-list"><i class="fa fa-list fa-2x" aria-hidden="true"></i> </a></div>
                </a>
            </div>
         
            
               

               <div class="container" id="container-map">
                <div class="row">
                    <div class="col-md-6 topmap">
                        <h2 class="h2map">Trouver Mon Association :</h2> </div>
                    <div class="col-md-6 search-container topmap">
                        <form class="navbar-form navbar-search" role="search">
                            <div class="input-group add-on">
                                <input class="form-control" placeholder="Rechercher..." name="srch-term" id="srch-term" type="text">
                                <div class="input-group-btn">
                                    <button class="btn btn-default btnsrc" type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div id="mapid">
                        <form method="post" action="index.php">
                            <div class="input-group" id="group-dropd-top">
                                <div class="input-group-btn" id="input-btn">
                                    <button tabindex="-1" class="btn btn-default" data-toggle="dropdown" type="button">Recherche par quartiers</button>
                                    <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> <span class="caret"></span> </button>
                                    <ul role="menu" class="dropdown-menu" id="dropdown-menu-map">
                                        <li>
                                            <a href="#">
                                                <input type="checkbox" id="checkAll" checked><span class="lbl"> Sélectionner/Déselectionner tout</span> </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked> <span class="lbl"> Les Cévennes</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked><span class="lbl">
								Port Marianne</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked><span class="lbl">
								Mosson</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked><span class="lbl">
								Près d'Arènes</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked><span class="lbl">
								Croix d'Argent</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked><span class="lbl">
								Montpellier Centre</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="check" checked><span class="lbl">
								Hôpitaux Facultés</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="input-group" id="group-dropd">
                                <div class="input-group-btn" id="input-btn">
                                    <button tabindex="-1" class="btn btn-default" data-toggle="dropdown" type="button">Recherche par tranche d'âge</button>
                                    <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> <span class="caret"></span> </button>
                                    <ul role="menu" class="dropdown-menu" id="dropdown-menu-map">
                                        <li>
                                            <a href="#">
                                                <input type="checkbox" id="checkAllAge" checked><span class="lbl"> Sélectionner/Déselectionner tout</span> </a>
                                        </li>
                                        <li class="divider"></li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="checkAge" checked> <span class="lbl">Tout petits</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="checkAge" checked><span class="lbl"> Enfants</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="checkAge" checked><span class="lbl">
								Ados</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="checkAge" checked><span class="lbl">
								Adultes</span> </a>
                                        </li>
                                        <li>
                                            <a>
                                                <input type="checkbox" class="checkAge" checked><span class="lbl">
								Séniors</span> </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </form>
                        <div id="map-container">
                            <script>
                                var mymap = L.map('map-container').setView([43.610999, 3.87924], 14);
                                L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', {
                                    attribution: '© <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
                                }).addTo(mymap);
                            </script>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div id="filters-container" class="col-md-11">
                        <!-- Example single danger button -->
                    
    <span class="button-checkbox">
        <button type="button" class="btn agri" data-color="primary">Agriculture et Viticulture</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn agri" data-color="primary">Animaux</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn art" data-color="primary">Communication et Médias</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn art" data-color="primary">Culture</button>
        <input type="checkbox" class="hidden"  />
    </span>
                        <span class="button-checkbox">
        <button type="button" class="btn educ" data-color="primary">Éducation</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn agri" data-color="primary">Entreprise et Travail</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn agri" data-color="primary">Environnement et cadre de vie</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn internat" data-color="primary">International</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn loisirs" data-color="primary">Loisirs</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                        <span class="button-checkbox">
        <button type="button" class="btn sociale" data-color="primary">Militaires Anciens Combattants</button>
        <input type="checkbox" class="hidden"  />
    </span>
                       
                   <span class="button-checkbox">
        <button type="button" class="btn sociale" data-color="primary">Rapatriés</button>
        <input type="checkbox" class="hidden"  />
    </span>     
          <span class="button-checkbox">
          
        <button type="button" class="btn religion" data-color="primary">Religions et Philosophies</button>
        <input type="checkbox" class="hidden"  />
    </span>
                                  
                                       <span class="button-checkbox">
        <button type="button" class="btn sante" data-color="primary">Santé</button>
        <input type="checkbox" class="hidden"  />
    </span>    
                                  
                                   <span class="button-checkbox">
        <button type="button" class="btn educ" data-color="primary">Sciences</button>
        <input type="checkbox" class="hidden"  />
    </span>
                                  
                                   <span class="button-checkbox">
        <button type="button" class="btn sociale" data-color="primary">Social et Citoyenneté</button>
        <input type="checkbox" class="hidden"  />
    </span>
                                  
                                   <span class="button-checkbox">
        <button type="button" class="btn sports" data-color="primary">Sports</button>
        <input type="checkbox" class="hidden"  />
    </span>
                                  
                                   <span class="button-checkbox">
        <button type="button" class="btn sociale" data-color="primary">Vie des quartiers</button>
        <input type="checkbox" class="hidden" />
    </span>
                                   
                    </div>
                    <div class="col-md-1" style="margin-top:25px;"><button class="valider">Valider</button></div>
                </div>
            </div>


       
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
        <script src="./js/filters.js"></script>

    <script src="./js/script.js"></script>
</body>

</html>