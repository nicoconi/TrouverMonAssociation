<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="./css/bootstrap.min.css"> </head>
	<link rel="stylesheet" href="./css/style.css"> </head>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
	<script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
	<script src="./js/leaflet-providers.js"></script>

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
						
						var marker = L.marker([43.611266, 3.87924]).addTo(mymap);
				
					</script>
				</div>
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