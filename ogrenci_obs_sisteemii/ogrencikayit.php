<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="ogrencikayit.css">
	<title>Öğrenci Obs Sistemi</title>
</head>
<body>
	<header>
		<h2>Öğrenci Obs Sistemi</h2>
	</header>
	<div class="tableOuter" >
		<h1>Öğrenci Bilgi Kayıt Formu</h1>
		<form action="islem.php" method="post">
			<div class="user">
				<input type="text" name="kayit_no" placeholder="Öğrenci No">
			</div>
			<div class="user">
				<input type="text" name="kayit_derskod" placeholder="Ders Kodu">
			</div>
			<div class="user">
				<input type="text" name="kayit_dersad" placeholder="Ders Adı">
			</div>
			<div class="user">
				<input type="text" name="kayit_vize" placeholder="Vize">
			</div>
			<div class="user">
				<input type="text" name="kayit_final" placeholder="Final">
			</div>
			<div class="user">
				<input type="text" name="kayit_but" placeholder="Bütünleme">
			</div>
			<div class="user">
				<input type="text" name="kayit_ort" readonly="yes" placeholder="Ortalama">
			</div>
			<div class="user">
				<input type="text" name="kayit_durum" readonly="yes" placeholder="Geçti/Kaldı">
			</div>
			<button type="submit" class="sub" id="giris" name="kayit_kaydet">Kaydet</button>
			<br>
		</form>
	</div>
</body>
</html>