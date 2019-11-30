<?php
include("config.php");
$sql = "select ST_asgeojson(geom) AS geometry, gid, id, nama, pemilik, fasilitas, buka_tutup, no_hp , alamat, gambar FROM atribut";
$result = pg_query($sql);
$hasil = array(
	'type'	=> 'FeatureCollection',
	'features' => array()
	);

while ($isinya = pg_fetch_assoc($result)) {
	$features = array(
		'type' => 'Feature',
		'geometry' => json_decode($isinya['geometry']),
		'properties' => array(
			'gid' => $isinya['gid'],
			'id' => $isinya['id'],
			'nama' => $isinya['nama'],
			'pemilik' => $isinya['pemilik'],
			'fasilitas' => $isinya['fasilitas'],
			'buka_tutup' => $isinya['buka_tutup'],
			'no_hp' => $isinya['no_hp'],
			'alamat' => $isinya['alamat'],
			'gambar' => $isinya['gambar']
			)
		);
	array_push($hasil['features'], $features);
}
echo json_encode($hasil);
?>