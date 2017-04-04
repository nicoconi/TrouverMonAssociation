<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trouver Mon Association</title>
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
                <li class="sidebar-brand"> <img src="contenu/images/LogoV2.svg"></li>
                
                
                
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
        <div class="homepage-background"></div>
        <section id="page-content-wrapper" class="homepage">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas" id="hamburger"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
            <div class="container">
               <div class="row">
                   <img class="logo" src="contenu/images/LogoV2.svg">
               </div>
                <div class="row">
                    <div>
                        <h1>Trouver mon association</h1> </div>
                </div>
                <div class="row">
                    <div class="col-md-6 col-md-offset-3">
                        <div class="input-group" >
                            <input type="text" class="form-control" placeholder="Rechercher quelque chose..." id="input-home" > <span class="input-group-btn" id="homeform">
        <button class="btn btn-default" id="btn-animate" type="button">Go !</button>
      </span> </div>
                        <!--
                        <!-- /input-group -->
                    </div>
                </div>
            </div> <a class="toggle-down" id="linkto"><i class="fa fa-angle-down fa-5x" aria-hidden="true"></i>
</a>
            <!-- /#page-content-wrapper -->
        </section>
        <section class="map" id="second">
            <div class="switcher">
                <div class="switch-icon icon-map"><i class="fa fa-map fa-2x" aria-hidden="true"></i> </div>
                <div class="switch-icon icon-list"><i class="fa fa-list fa-2x" aria-hidden="true"></i> </div>
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
                        <div class="input-group" id="group-dropd">
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-default" data-toggle="dropdown" type="button">Recherche par quartiers</button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> <span class="caret"></span> </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <input type="checkbox" id="checkAll"><span class="lbl"> Sélectionner/Déselectionner tout</span> </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"> <span class="lbl"> Les Cévennes</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"><span class="lbl">
								Port Marianne</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"><span class="lbl">
								Mosson</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"><span class="lbl">
								Près d'Arènes</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"><span class="lbl">
								Croix d'Argent</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"><span class="lbl">
								Montpellier Centre</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="check"><span class="lbl">
								Hôpitaux Facultés</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-group" id="group-dropd">
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-default" data-toggle="dropdown" type="button">Recherche par tranche d'âge</button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> <span class="caret"></span> </button>
                                <ul role="menu" class="dropdown-menu">
                                    <li>
                                        <a href="#">
                                            <input type="checkbox" id="checkAllAge"><span class="lbl"> Sélectionner/Déselectionner tout</span> </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkAge"> <span class="lbl">Tout petits</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkAge"><span class="lbl"> Enfants</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkAge"><span class="lbl">
								Ados</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkAge"><span class="lbl">
								Adultes</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkAge"><span class="lbl">
								Séniors</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <script>
                            //Ton script ici
                        </script>
                    </div>
                </div>
            </div>
            <div class="container" id="container-list">
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
                    <div class="col-md-6"></div>
                    <div class="col-md-6" id="list-dropdown">
                        <div class="input-group col-md-6" id="group-dropd-list">
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-default" data-toggle="dropdown" type="button">Recherche par quartiers</button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> <span class="caret"></span> </button>
                                <ul role="menu" class="dropdown-menu"  id="dropdown-menu-list">
                                    <li>
                                        <a href="#">
                                            <input type="checkbox" id="checkAllList"><span class="lbl"> Sélectionner/Déselectionner tout</span> </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"> <span class="lbl"> Les Cévennes</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"><span class="lbl">
								Port Marianne</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"><span class="lbl">
								Mosson</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"><span class="lbl">
								Près d'Arènes</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"><span class="lbl">
								Croix d'Argent</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"><span class="lbl">
								Montpellier Centre</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkList"><span class="lbl">
								Hôpitaux Facultés</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="input-group col-md-6" id="group-dropd-list">
                            <div class="input-group-btn">
                                <button tabindex="-1" class="btn btn-default" data-toggle="dropdown" type="button">Recherche par tranche d'âge</button>
                                <button tabindex="-1" data-toggle="dropdown" class="btn btn-default dropdown-toggle" type="button"> <span class="caret"></span> </button>
                                <ul role="menu" class="dropdown-menu" id="dropdown-menu-list">
                                    <li>
                                        <a>
                                            <input type="checkbox" id="checkAllListAge"><span class="lbl"> Sélectionner/Déselectionner tout</span> </a>
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkListAge"> <span class="lbl">Tout petits</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkListAge"><span class="lbl"> Enfants</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkListAge"><span class="lbl">
								Ados</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkListAge"><span class="lbl">
								Adultes</span> </a>
                                    </li>
                                    <li>
                                        <a>
                                            <input type="checkbox" class="checkListAge"><span class="lbl">
								Séniors</span> </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="padding-top:50px;">
                    <div class="col-md-4">
                        <div class="assoc-container">
                            <h2 class="assoc-title">Nom de l'association</h2>
                            <img src="contenu/icones/icon_test.png" class="assoc-icon">
                            <h4 class="assoc-category"><i>Catégorie de l'association</i></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Labore cupiditate modi odit soluta, a aut eaque officia, pariatur ipsam incidunt, sint dolore fugiat assumenda sequi nesciunt velit dolorum suscipit culpa!</p>
                            <p><b>Adresse</b> : 130 IMP JEAN BRULLER (VERCORS), PARC DE LA GUIRLANDE D2, 34070 MONTPELLIER</p> 
<p><b>Téléphone</b> : 04.67.92.84.01</p>
<p><b>Courriel</b> : adomicileservices34@adh.aso.fr</p>
                        </div>
                    </div>
                    
                    
                </div>
                
            </div>
        </section>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
        <script src="./js/bootstrap.js"></script>
        <script src="./js/script.js"></script>
</body>

</html>