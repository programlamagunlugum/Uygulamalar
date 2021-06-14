<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Öğrenci Obs Sistemi</title>
</head>
<body>
	<header>
		<h2>Öğrenci Obs Sistemi</h2>
	</header>
	<div class="tableOuter">
		<h1>Öğrenci Bilgi Formu</h1>
		<form action="islem.php" method="post">
			<div class="user">
				<input type="text" name="ogrenci_ad" placeholder="Adınız">
			</div>
			<div class="user">
				<input type="text" name="ogrenci_soyad" placeholder="Soyadınız">
			</div>
			<div class="user">
				<textarea name="ogrenci_adres" placeholder="Adresiniz"></textarea>
			</div>
			<div class="user">
				<input type="text" name="ogrenci_bolum" placeholder="Bölümünüz">
			</div>
			<div class="user">
				<input type="tel" name="ogrenci_phone" placeholder="GSM">
			</div>
			<button type="submit" class="sub" id="giris" name="kaydet">Kaydet</button>
			<br>
		</form>
	</div>
</body>
</html>