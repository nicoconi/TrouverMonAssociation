
               

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
        <button type="button" class="btn santé" data-color="primary">Santé</button>
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
        <script src="./js/filters.js"></script>

