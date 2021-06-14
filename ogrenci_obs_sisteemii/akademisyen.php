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

	<div class="ogrencikayit">
		<h1>Akademisyen Bilgi Formu</h1>
		<form style="height: 700px;" action="islem.php" method="post">
			<div class="user">
				<input type="text" name="akademisyen_adsoyad" placeholder="Adınız">
			</div>
			<div class="user">
				<input type="text" name="akademisyen_bolum" placeholder="Bölümünüz">
			</div>
			<div class="user">
				<input type="text" name="akademisyen_ders" placeholder="Vermiş Olduğunuz Dersler">
			</div>
			<button type="submit" class="sub" id="giris" name="akademisyen_kaydet">Kaydet</button>
			<br>
		</form>
	</div>

</body>
</html>