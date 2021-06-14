<?php

try {
	$db = new PDO("mysql:host=localhost; dbname=ogrenci_obs; charest=utf8", 'root', '');
	$db->query("SET NAMES 'UTF8'");
	//echo 'Veritabanı Bağlantısı Başarılı';
} catch (Exception $e) {
	echo $e->getMessage(); 
}

?>