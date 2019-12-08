<?php
require("config.php");
$caritext = $_GET['id'];

$querysearch="SELECT gid, id, nama, pemilik, fasilitas, buka_tutup, no_hp , alamat, gambar, ST_X(ST_CENTROID(geom)) AS lng, ST_Y(ST_CENTROID(geom)) AS lat FROM atribut WHERE id='$caritext'";	

// $querysearch="SELECT row_to_json(fc) FROM ( SELECT 'FeatureCollection' As type, array_to_json(array_agg(f)) As features FROM (SELECT 'Feature' As type , ST_AsGeoJSON(loc.geom)::json As geometry , row_to_json((SELECT l FROM (SELECT gid, id, nama, pemilik, fasilitas, buka_tutup, no_hp , alamat, gambar, ST_X(ST_CENTROID(geom)) AS lng, ST_Y(ST_CENTROID(geom)) AS lat) As l )) As properties FROM atribut As loc WHERE id='$caritext') As f ) As fc"; 

$hasil=pg_query($querysearch);
  while($data=pg_fetch_array($hasil))
	 {
	 	$id=$data['id'];
	 	$lat=$data['lat'];
	 	$lng=$data['lng'];
	 	$dataArray[]=array('id'=>$id,'lat'=>$lat,'lng'=>$lng);
	 }
	echo json_encode($dataArray);
		

?>