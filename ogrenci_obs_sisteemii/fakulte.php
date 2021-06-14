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
		<h1>Fakülte ve Dersler</h1>
		<form action="islem.php" method="post">
			<div class="user">
				<input type="text" name="fakulte_ad" placeholder="Fakülte Adı">
			</div>
			<div class="user">
				<input type="text" name="fakulte_dersad" placeholder="Ders Adı">
			</div>
			<div class="user">
				<input type="text" name="fakulte_derskredi" placeholder="Ders Kredisi">
			</div>
			<div class="user">
				<input type="text" name="fakulte_dersaat" placeholder="Ders Saati">
			</div>
			<div class="user">
				<input type="text" name="fakulte_dersdönem" placeholder="Ders Dönemi">
			</div>
			<div class="user">
				<input type="text" name="fakulte_derskodu" placeholder="Ders Kodu">
			</div>
			<button type="submit" class="sub" id="giris" name="fakulte_kaydet">Kaydet</button>
			<br>
		</form>
	</div>
</body>
</html>