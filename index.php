<!DOCTYPE html>
<html lang="en">
    <head>
        <style type="text/css">
            p span{
                display: block;
                height: 105px;
            }
        </style>
        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   
       
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
     
         <!-- Site Metas -->
        <title>GIS Photocopy</title>  
        <meta name="keywords" content="">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Font -->
        <script src="https://kit.fontawesome.com/a076d05399.js"></script>

        <!-- Site Icons -->
        <link rel="shortcut icon" href="images/icon.png" type="image/x-icon" />
        <link rel="apple-touch-icon" href="images/icon.png">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- Site CSS -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive CSS -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- Custom CSS -->
        <link rel="stylesheet" href="css/custom.css">
    	<script src="js/modernizr.js"></script> <!-- Modernizr -->
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA1TwYksj1uQg1V_5yPUZqwqYYtUIvidrY"></script>
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>
    <body id="page-top" class="politics_version">

        <!-- LOADER -->
        <div id="preloader">
            <div id="main-ld">
    			<div id="loader"></div>  
    		</div>
        </div><!-- end loader -->
        <!-- END LOADER -->
    	
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-image: linear-gradient(to right, #fd6f88, #ffd3db);">
          <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
    			<a class="nav-link js-scroll-trigger active" href="#home" style="padding: 0 8px;font-size: 24px;color: #ffe2e7;font-family: 'ink free';"><i style="font-size: 36px" class="far fa-kiss-wink-heart"></i> Kelompok <span style="font-size: 36px">2</span>"</a>
    		</a>
            <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
              Menu
              <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive" >
              <ul class="navbar-nav text-uppercase ml-auto">
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger active" href="#home" style="color: #fd3e60;font-family: 'Georgia', Georgia, Serif">Home</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link js-scroll-trigger" onclick="initialize()" href="#about" style="color: #fd3e60;font-family: 'Georgia', Georgia, Serif">Map</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
    	
        <!-- Home -->
    	<section id="home" class="main-banner parallaxie" style="background: url('uploads/22.jpg')">
    		<div class="heading" style="color: pink;font-family: 'Georgia', Georgia, Serif">
                <p style="font-size:87px;color: pink;font-family: 'ink free', Georgia, Serif">
                    <span style="font-family: 'candara';font-size: 100px">GIS</span>
                    <span>Photocopy</span>
                </p>
    			<p style="color: pink;font-family: 'ink free', Georgia, Serif;text-align: center;">Anggota Kelompok :</p>
    			<h3 class="cd-headline clip is-full-width">
    				<span></span>
    				<span class="cd-words-wrapper" style="color: pink;font-family: 'ink free', Georgia, Serif;text-align: center;">
    					<b class="is-visible"></b>
    					<b>Aulia Anshari Fathurrahman<br><br>1611522015</b>
    					<b>Annisa Atifa<br><br>1811522004</b>
    					<b>Fadhlullah Ahmad<br><br>1811522009</b>
                        <b>Rifa Maulina<br><br>1811522012</b>
                        <b>Ahmad Fauzan<br><br>1811522017</b>
    				</span>
    			</h3>
    		</div>
    	</section>

        <!-- Clouds -->
    	<svg id="clouds" class="hidden-xs" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 85 100" preserveAspectRatio="none">
            <path d="M-5 100 Q 0 20 5 100 Z
                M0 100 Q 5 0 10 100
                M5 100 Q 10 30 15 100
                M10 100 Q 15 10 20 100
                M15 100 Q 20 30 25 100
                M20 100 Q 25 -10 30 100
                M25 100 Q 30 10 35 100
                M30 100 Q 35 30 40 100
                M35 100 Q 40 10 45 100
                M40 100 Q 45 50 50 100
                M45 100 Q 50 20 55 100
                M50 100 Q 55 40 60 100
                M55 100 Q 60 60 65 100
                M60 100 Q 65 50 70 100
                M65 100 Q 70 20 75 100
                M70 100 Q 75 45 80 100
                M75 100 Q 80 30 85 100
                M80 100 Q 85 20 90 100
                M85 100 Q 90 50 95 100
                M90 100 Q 95 25 100 100
                M95 100 Q 100 15 105 100 Z">
            </path>
        </svg>


        <div id="about" class="section wb" style="padding: 50px 0">
            <div class="container" style="font-family: 'ink free';font-size: 16px ">
                <div class="row">
                    <div class="col-md-4">
                        <div style="max-height: 500px;overflow: auto;">
                            <table class="table table-bordered" id="list">
                                <thead>
                                    <tr align="center" style="background-color: #fd6f88;font-weight: bolder;color: black;font-size: 18px;">
                                        <th>Nama</th>
                                        <th>Get Direction</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php
                                    include ('config.php');
                                    $sql =pg_query("SELECT * FROM atribut order by nama asc");
                                    while($row = pg_fetch_array($sql)){
                                ?>
                                    <tr style="background-color: #ffd3db;font-weight: bolder;color: black">
                                        <td>
                                        <span onclick='<?php
                                          require("config.php");
                                          $caritext = $row['id'];
                                          $querysearch="SELECT row_to_json(fc) FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features FROM (SELECT 'Feature' As type , ST_AsGeoJSON(loc.geom)::json As geometry , row_to_json((SELECT l FROM (SELECT gid, id, nama, pemilik, fasilitas, buka_tutup, no_hp , alamat, gambar, row_to_json((SELECT k FROM (SELECT ST_X(ST_CENTROID(geom)) AS lng, ST_Y(ST_CENTROID(geom)) AS lat) AS k)) AS center) As l )) As properties FROM atribut As loc WHERE id='$caritext') As f ) As fc"; 

                                          $hasil=pg_query($querysearch);
                                            while($data=pg_fetch_array($hasil))
                                            {
                                              $load=$data['row_to_json'];
                                              $tulis="loaddata(".$load.");";
                                            }
                                            
                                            echo $tulis;
                                            
                                          ?>'> <?php echo $row['nama']; ?>                            
                                        </span>
                                        </td>
                                        <td align="center">
                                            <a role='button' onclick="load(<?php echo $caritext ?>, 'WALKING')" class="bgd_wlk btn btn-danger"><i class="fa fa-walking"></i></a>
                                            <a role='button' onclick="load(<?php echo $caritext ?>, 'DRIVING')" class='btn btn-danger bgd_drv'><i class="fa fa-car"></i></a>
                                            <a role='button' onclick="load(<?php echo $caritext ?>, 'BICYCLING')" class='btn btn-danger bgd_cyc'><i class="fa fa-biking"></i></a>
                                            <a role='button' onclick="load(<?php echo $caritext ?>, 'TRANSIT')" class='btn btn-danger bgd_trn'><i class="fa fa-subway"></i></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                        <div id="berita"></div>
                    </div><!-- end col -->

                    <div class="col-md-8">
                        <div id="map_canvas" style="width: 100%;height: 500px;align-items: center;">

                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </div><!-- end section -->
    	
        <div class="copyrights">
            <div class="container">
                <div class="footer-distributed">
                    <div class="footer-left">
                        <p class="footer-links">
                            <a href="#home">Home</a>
                            <a href="#about">Map</a>
                        </p>
                        <p class="footer-company-name">Praktikum GIS. &copy; 2019 <a href="#home">Kelompok 2.</a> Design by : 
    					<a href="https://www.instagram.com/aafathurr166/">Aulia.</a> Mentor : <a href="https://www.instagram.com/gpriyatnaf/">Gilang.</p>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copyrights -->

        <a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>

        <!-- Script Map -->
        <script type="text/javascript">
                var infowindow;
                var geomarker;
                var markerarray = [];
                var map;
                var objek;
                var directionsService;
                var directionDisplay;
                var usegeolocation;
                var server='http://tbgis.herokuapp.com/photocopy/';
                console.log(window.location.hostname);
                var markerarraygeo=[];
                var circlearray=[];
                var layernya;
          
                function initialize() {
                      geolocation();
                      basemap();
                  }
                function basemap() {
                      google.maps.visualRefresh = true;
                      map = new google.maps.Map(document.getElementById('map_canvas'), {
                            zoom: 16,
                            center: new google.maps.LatLng(-0.914813, 100.458801),
                            mapTypeId: google.maps.MapTypeId.ROADMAP
                      });
                      loadLayer();
                  };
          
                function loadLayer(){
                      layernya = new google.maps.Data();
                      layernya.loadGeoJson(server+'layer.php');
                      layernya.setMap(map);
          
                  }
                function load(id,travelMode){
                    $.ajax({
                        url:server+'caripeta.php?id='+id,
                        data: '',
                        dataType:'json',
                        success: function(rows){
                            for(var i in rows){
                                var row = rows[i];
                                var lat = row.lat;
                                var lng = row.lng;
                                var end = new google.maps.LatLng(lat, lng);
                                var origin = geomarker.getPosition();
                                calcRoute(origin, end, travelMode);
                                console.log(origin);
                                console.log(end);
                                console.log(server+'caripeta.php?id='+id);
                            }
                        }
                    })
                }

                function loaddata(results){
                      if(results.features === null)
                           {
                               alert("Data yang dicari tidak ada");
                           }
                           else

                           {
                              for (var i = 0; i < results.features.length; i++) {
                                  
                                  var data = results.features[i];
                                  var coords = data.geometry.coordinates;
                                  var id = data.properties.id;
                                  var nama = data.properties.nama;
                                  var alamat= data.properties.alamat;
                                  var fasilitas = data.properties.fasilitas;
                                  var buka_tutup= data.properties.buka_tutup;
                                  var pemilik=data.properties.pemilik;
                                  var titiktengah = data.properties.center;
                                  var latitude = titiktengah.lat;
                                  var longitude = titiktengah.lng;
                                  var no_hp = data.properties.no_hp;
                                  var latLng = new google.maps.LatLng(latitude,longitude);
 
                                  google.maps.visualRefresh = true;
                                  map = new google.maps.Map(document.getElementById('map_canvas'), {
                                        zoom: 16,
                                        center: new google.maps.LatLng(latitude, longitude),
                                        mapTypeId: google.maps.MapTypeId.ROADMAP
                                  });
                                  loadLayer();

                                  var gambar=data.properties.gambar; 
                                  
                                  $('.paneldirection').html('');
                                  $('#sidebar_route').html('');
                                  $('#sidebar_route').append('<li><a id="'+id+'" class="bgd_drv" >Driving</a></li>'+
                                    '<li><a id="'+id+'" class="bgd_wlk" >Walking</a></li>'+
                                    '<li><a id="'+id+'" class="bgd_cyc" >Cycling</a></li>'+
                                    '<li><a id="'+id+'" class="bgd_trn" >Transit</a></li>');
 
                                  var iconBase = 'https://maps.google.com/mapfiles/kml/shapes/';
                                  var marker = new google.maps.Marker({
                                      position: latLng,
                                      map: map,
                                      animation: google.maps.Animation.DROP,            
                                      icon: "https://cdn0.iconfinder.com/data/icons/small-n-flat/24/678111-map-marker-32.png",
                                      title: nama
                                    });
          
                                  markerarray.push(marker);
                                  var isiinfo="<div style='width:300px; min-height:100px;'><b><h2><center>"+nama+"</center></h2></b><center><img src='"+server+"/img/"+gambar+"' style='width:100%;'></center><br><center><p>"+alamat+"</p></center><center><p>Jam Operasional :"+buka_tutup+"</p></center><center><p>Contact Person : "+no_hp+"</p></center></div>";
                                  createInfoWindow(marker, isiinfo);
                                }
                            }

                    }
          
                var infowindow = new google.maps.InfoWindow();
                function createInfoWindow(marker, isiinfo) {
                      google.maps.event.addListener(marker, 'click', function() {
                          infowindow.setContent(isiinfo);
                          infowindow.open(map, this);
                        });
                  }
                  google.maps.event.addDomListener(window, 'load', initialize);
          
                function calcRoute(start, end, travelmode) {
                    directionsService = new google.maps.DirectionsService();
                    console.log(travelmode);
                    var request = {
                           origin:start,
                           destination:end,
                           travelMode: google.maps.TravelMode[travelmode],
                           unitSystem: google.maps.UnitSystem.METRIC,
                           provideRouteAlternatives: true
                      };
                    directionsService.route(request, function(response, status) {
                          if (status == google.maps.DirectionsStatus.OK) {
                            directionsDisplay.setDirections(response);
                          } else {
                            window.alert('Tidak ditemukan rute untuk mode ini!');
                          }
                      });
                    directionsDisplay = new google.maps.DirectionsRenderer({draggable: false});
                    directionsDisplay.setMap(map);
                    directionsDisplay.setPanel(document.getElementById('paneldirection'));
                  }
          
                function clearmarkergeo(){
                    for (var i = 0; i < markerarraygeo.length; i++) {
                         markerarraygeo[i].setMap(null);
                      }
                    markerarraygeo=[];
                  }
          
                function clearmarker(){
                    for (var i = 0; i < markerarray.length; i++) {
                          markerarray[i].setMap(null);
                      }
                    markerarray=[];
                  }
          
                function clearroute(){
                    directionsDisplay.setMap(null);
                  }
          
          
                function geolocation(){
                    navigator.geolocation.getCurrentPosition(geolocationSuccess, geolocationError);
                  }
          
                function geolocationSuccess(posisi){
                    var pos=new google.maps.LatLng(posisi.coords.latitude,posisi.coords.longitude);
                    var image = 'https://developers.google.com/maps/documentation/javascript/examples/full/images/beachflag.png';
                    geomarker = new google.maps.Marker({
                          map: map,
                          position: pos,
                          icon: "https://cdn1.iconfinder.com/data/icons/ui-navigation-1/152/marker-32.png",
                          animation: google.maps.Animation.DROP
                      });
                    map.panTo(pos);
                    infowindow = new google.maps.InfoWindow();
                    infowindow.setContent('Your Position');
                    infowindow.open(map, geomarker);
                    usegeolocation=true;
                  }
          
                function geolocationError(err){
                    usegeolocation=false;
          
                  }
          
            </script>

        <!-- ALL JS FILES -->
        <script src="js/all.js"></script>
    	<!-- Camera Slider -->
    	<script src="js/jquery.mobile.customized.min.js"></script>
    	<script src="js/jquery.easing.1.3.js"></script> 
    	<script src="js/parallaxie.js"></script>
    	<script src="js/headline.js"></script>
    	<!-- Contact form JavaScript -->
        <script src="js/jqBootstrapValidation.js"></script>
        <script src="js/contact_me.js"></script>
        <!-- ALL PLUGINS -->
        <script src="js/custom.js"></script>
        <script src="js/jquery.vide.js"></script>

    </body>
</html>