<?php
$host="ec2-174-129-253-140.compute-1.amazonaws.com";
$user="scaxxhrsufmimy";
$password="b392d1dc923932b4e06ba1670808e75795176b4f04be8017be2ac06f5f075622";
$port="5432";
$dbname="d537pu4m7tm34j";
$ttd='0b5ba19ad3f77462b202e1088b6e9081';
 
$link= pg_connect("host=".$host." port=".$port." dbname=".$dbname." user=".$user." password=".$password) or die("Koneksi gagal");
?>