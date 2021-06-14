<?php
ob_start();
session_start();
include 'baglan.php';
$kullanici_sor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc");
$kullanici_sor->execute([
	'kullanici_tc' => $_SESSION['userkullanici_tc']
]);
$say = $kullanici_sor->rowCount();
$kullanicicek = $kullanici_sor->fetch(PDO::FETCH_ASSOC);

if ($say==0) {
	header('location:index.php?izinsiz');
	exit;
}
?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="header.css">
	<title>Öğrenci Obs Sistemi</title>
</head>
<body>
	<div class="ust_bar">
		<a href="anasayfa.php"><h1>Öğrenci Obs Sistemi</h1></a>
		<div class="menu">
			<a href="hesap.php"><h5>Hesap Bilgileri</h5></a>
		</div>
	</div>
	<a href="logout.php"> <div class="cikis">
		Çıkış Yap
	</div></a>

	<div id="card">
		<div id="flip-card">
			<div id="flip-card-front"><a href="ogrenci.php">Öğrenci Bilgileri</a></div>
			<div id="flip-card-back"><a href="ogrenci.php">Öğrenci Bilgileri</a></div>
		</div>
	</div>
	<div id="card">
		<div id="flip-card">
			<div id="flip-card-front"><a href="akademisyen.php">Akademisyen Bilgileri</a></div> 
			<div id="flip-card-back"><a href="akademisyen.php">Akademisyen Bilgileri</a></div>
		</div>
	</div>
	<div id="card">
		<div id="flip-card">
			<div id="flip-card-front"><a href="fakulte.php">Fakülte ve Ders Bilgileri</a></div>
			<div id="flip-card-back"><a href="fakulte.php">Fakülte ve Ders Bilgileri</a></div>
		</div>
	</div>
	<div id="card">
		<div id="flip-card">
			<div id="flip-card-front"><a href="ogrencikayit.php">Öğrenci Bilgi Kayıt Ekranı</a></div>
			<div id="flip-card-back"><a href="ogrencikayit.php">Öğrenci Bilgi Kayıt Ekranı</a></div>
		</div>
	</div>
	<div id="card">
		<div id="flip-card">
			<div id="flip-card-front"><a href="transkript.php">Transkript Listele</a></div>
			<div id="flip-card-back"><a href="transkript.php">Transkript Listele</a></div>
		</div>
	</div>
</body>
</html>