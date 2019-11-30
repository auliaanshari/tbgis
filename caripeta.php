<?php
require("config.php");
$caritext = $_GET["id"];

$querysearch="SELECT row_to_json(fc) FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features FROM (SELECT 'Feature' As type , ST_AsGeoJSON(loc.geom)::json As geometry , row_to_json((SELECT l FROM (SELECT gid, id, nama, pemilik, fasilitas, buka_tutup, no_hp , alamat, gambar, ST_X(ST_CENTROID(geom)) AS lng, ST_Y(ST_CENTROID(geom)) AS lat) As l )) As properties FROM atribut As loc WHERE id='$caritext') As f ) As fc"; 

$hasil=pg_query($querysearch);
  while($data=pg_fetch_array($hasil))
	 {
	  $load=$data['row_to_json'];
	  $tulis="loaddata(".$load.");";
	  }
	echo $load;
		

?>