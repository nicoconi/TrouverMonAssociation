<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ALASSO </title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"> 
	<link rel="stylesheet" href="./css/style.css"> 
	
	<!-- Load Leaflet from CDN-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet-src.js"></script>
	
	<!-- Load Esri Leaflet from CDN -->
	<script src="https://unpkg.com/esri-leaflet@2.0.8"></script>
	<script src="./js/leaflet-providers.js"></script>

</head>

<body>
    <div id="wrapper">
        <div class="overlay"></div>
        <!-- Sidebar -->
        <nav class="navbar navbar-inverse navbar-fixed-top" id="sidebar-wrapper" role="navigation">
            <ul class="nav sidebar-nav">
                <li class="sidebar-brand"> <a href="#">
                       Trouver mon association
                    </a> </li>
                <li> <a href="#">Home</a> </li>
                <li> <a href="#">About</a> </li>
                <li> <a href="#">Events</a> </li>
                <li> <a href="#">Team</a> </li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Works <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu">
                        <li class="dropdown-header">Dropdown heading</li>
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li><a href="#">Separated link</a></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
                <li> <a href="#">Services</a> </li>
                <li> <a href="#">Contact</a> </li>
                <li> <a href="https://twitter.com/maridlcrmn">Follow me</a> </li>
            </ul>
        </nav>
        <!-- /#sidebar-wrapper -->
        <!-- Page Content -->
        <div id="page-content-wrapper">
            <button type="button" class="hamburger is-closed" data-toggle="offcanvas"> <span class="hamb-top"></span> <span class="hamb-middle"></span> <span class="hamb-bottom"></span> </button>
            <div class="container">
                <div class="row">
                    <div>
                        <h1>Trouver mon association</h1> </div>
                </div>
				
				<div id="mapid">
					<script> 
						var mymap = L.map('mapid').setView([43.610999, 3.87924], 14);
				
						L.tileLayer('http://{s}.tile.openstreetmap.se/hydda/full/{z}/{x}/{y}.png', {
						attribution: '© <a href="http://osm.org/copyright">OpenStreetMap</a> contributors'
						}).addTo(mymap);
						
						var greenIcon = new L.Icon({
						  iconUrl: 'https://cdn.rawgit.com/pointhi/leaflet-color-markers/master/img/marker-icon-2x-green.png',
						  shadowUrl: 'https://cdnjs.cloudflare.com/ajax/libs/leaflet/0.7.7/images/marker-shadow.png',
						  iconSize: [25, 41],
						  iconAnchor: [12, 41],
						  popupAnchor: [1, -34],
						  shadowSize: [41, 41]
						});
				
					</script>
				</div>
				
				<div id="filtre">
						<form method="post" action="index.php">
							<div id="themes">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
								<input type="checkbox" name="domaine" value="Bike">
							</div>
							
							<div id="query" class="leaflet-bar">
								<input type="checkbox" name="quartier" value="Bike">
								<input type="checkbox" name="quartier" value="Bike">
								<input type="checkbox" name="quartier" value="Bike">
								<input type="checkbox" name="quartier" value="Bike">
								<input type="checkbox" name="quartier" value="Bike">
								<input type="checkbox" name="quartier" value="Bike">
								<input type="checkbox" name="quartier" value="Bike">	
							</div>
							
							<div id="query" class="leaflet-bar">
								<input type="checkbox" name="public1" value="Bike">
								<input type="checkbox" name="public2" value="Bike">
								<input type="checkbox" name="public3" value="Bike">	
							</div>
						</form>
				</div>
				
<?php

	function Affiche_Marker(){
		
		$domaine = $_POST['domaine']
		$quartier = $_POST['quartier']
		
		$bdd = new PDO('mysql:host=localhost;dbname=projetrni','root',''); 
		
			foreach ($domaine as $filtre1) {
				foreach ($quartier as $filtre2) {
		
					$sql = "SELECT *  FROM assos2017 WHERE Domaine =".$filtre1."AND Code_Quartier =".$filtre2."";
					$req = $bdd->query($sql);
					
					echo "<script>";
					
					foreach ($req as $line) {
						if($line['Domaine'] == "" OR $line['Domaine'] == "" OR $line['Domaine'] == ""){
							echo "var marker = L.marker([".$line[''].", ".$line['']."],{icon: greenIcon}).addTo(mymap);";
							echo 'marker.bindPopup("<b>'.$line[''].'</b><br>'.$line[''].'");';
						}
						elseif($line['Domaine'] == "" OR $line['Domaine'] == "" OR $line['Domaine'] == ""){
							echo "var marker = L.marker([".$line[''].", ".$line[''].").addTo(mymap);";
							echo 'marker.bindPopup("<b>'.$line[''].'</b><br>'.$line[''].'");';
						}
						else{
							echo "var marker = L.marker([".$line[''].", ".$line[''].").addTo(mymap);";
							echo 'marker.bindPopup("<b>'.$line[''].'</b><br>'.$line[''].'");';
						}
					}
					
					echo "</script>";
					
				}
			}
	}
	
	function Affiche_Liste(){
		
		$domaine = $_POST['domaine']
		$quartier = $_POST['quartier']
		
		$bdd = new PDO('mysql:host=localhost;dbname=projetrni','root',''); 
		
			foreach ($domaine as $filtre1) {
				foreach ($quartier as $filtre2) {
		
					$sql = "SELECT *  FROM assos2017 WHERE Domaine =".$filtre1."AND Code_Quartier =".$filtre2."";
					$req = $bdd->query($sql);
					
					foreach ($req as $line) {
						
						echo"<p>ID ASSO :".$line['CSASSO']."<br>";
						echo"<b>NOM :".$line['Nom_Asso']."<br>";
						echo"TEL :".$line['Tel_Asso']."<br>";
						echo"MAIL :".$line['Mail_Asso']."<br>";
						echo"SITE :".$line['Int_Asso']."<br>";
						
					}
				}
			}				

?>
				
            </div>
        </div>
        <!-- /#page-content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="./js/bootstrap.js"></script>
    <script src="./js/script.js"></script>
</body>

</html>