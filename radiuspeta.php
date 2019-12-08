<?php
include('config.php');
$latit=$_GET["lat"];
$longi=$_GET["lng"];
$rad=$_GET["rad"];

$querysearch="SELECT id, nama,st_x(st_centroid(geom)) as lng,st_y(st_centroid(geom)) as lat,
	CAST(ST_DistanceSpheroid(ST_GeomFromText('POINT($longi $latit)',-1),ST_Centroid(atribut.geom),'SPHEROID[\"WGS 84\",6378137,298.257223563]') As numeric) as jarak
	FROM atribut where CAST(ST_DistanceSpheroid(ST_GeomFromText('POINT($longi $latit)',-1),ST_Centroid(atribut.geom),'SPHEROID[\"WGS 84\",6378137,298.257223563]') As numeric) <= ".$rad." ORDER BY jarak
			 ";
$hasil=pg_query($querysearch);
while($row = pg_fetch_array($hasil))
	{
		  $id=$row['id'];
		  $nama=$row['nama'];
		  $longitude=$row['lng'];
		  $latitude=$row['lat'];
		  $dataarray[]=array('id'=>$id,'nama'=>$nama,
		  'longitude'=>$longitude,'latitude'=>$latitude);
	}
echo json_encode ($dataarray);
?>
