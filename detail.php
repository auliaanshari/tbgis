<?php
require 'config.php';
$caritext = $_GET["id"];
$querysearch="SELECT gid, id, nama, pemilik, fasilitas, buka_tutup, no_hp , alamat, gambar, ST_X(ST_CENTROID(geom)) AS lng, ST_Y(ST_CENTROID(geom)) AS lat FROM atribut WHERE id='$caritext'"; 

$hasil=pg_query($querysearch);
while($row = pg_fetch_array($hasil))
	{
		  $id=$row['id'];
		  $nama=$row['nama'];
		  $pemilik=$row['pemilik'];
		  $fasilitas=$row['fasilitas'];
		  $buka_tutup=$row['buka_tutup'];
		  $no_hp=$row['no_hp'];
		  $alamat=$row['alamat'];
		  $gambar=$row['gambar'];
		  $longitude=$row['lng'];
		  $latitude=$row['lat'];
		  $dataarray[]=array('id'=>$id,'nama'=>$nama,'pemilik'=>$pemilik, 'fasilitas'=>$fasilitas, 'buka_tutup'=>$buka_tutup, 'no_hp'=>$no_hp,'alamat'=>$alamat,'gambar'=>$gambar,'longitude'=>$longitude,'latitude'=>$latitude);

	}
echo json_encode ($dataarray);
?>
