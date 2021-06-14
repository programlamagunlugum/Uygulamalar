<?php
ob_start();
session_start();
include 'baglan.php';
if (isset($_POST['kullanicikaydet'])) {
	$kullanici_tc = isset($_POST['kullanici_tc']) ? $_POST['kullanici_tc'] : null;
	$kullanici_adsoyad = isset($_POST['kullanici_adsoyad']) ? $_POST['kullanici_adsoyad'] : null;
	$kullanici_password = isset($_POST['kullanici_password']) ? $_POST['kullanici_password'] : null;
	//veritabanı ekleme işlemi
	$sorgu = $db->prepare('INSERT INTO kullanici SET
		kullanici_tc = ?,
		kullanici_adsoyad = ?,
		kullanici_password = ?
	');
	$ekle = $sorgu->execute([
		$kullanici_tc, $kullanici_adsoyad, $kullanici_password
	]);
	if ($ekle) {
		header('location:index.php?durum=basarili');
	}
	else {
		$hata = $sorgu->errorInfo();
		echo 'mysql hatası'. $hata[2];
	}
}

if (isset($_POST['giris_yap'])) {
	$kullanici_tc = $_POST['kullanici_tc'];
	$kullanici_password = $_POST['kullanici_password'];

	$kullanici_sor = $db->prepare("SELECT * FROM kullanici WHERE kullanici_tc=:kullanici_tc and kullanici_password=:kullanici_password");
	$kullanici_sor->execute([
		'kullanici_tc' => $kullanici_tc,
		'kullanici_password' => $kullanici_password
	]);

	$say = $kullanici_sor->rowCount();
	if ($say==1) {
		$_SESSION['userkullanici_tc'] = $kullanici_tc;
		header('location:anasayfa.php?durum=girisbasarili');
		exit;
	}
	else {
		header('location:index.php?durum=basarisizgiris');
		exit;
	}
}

if (isset($_POST['kaydet'])) {
	$ogrenci_ad = isset($_POST['ogrenci_ad']) ? $_POST['ogrenci_ad'] : null;
	$ogrenci_soyad = isset($_POST['ogrenci_soyad']) ? $_POST['ogrenci_soyad'] : null;
	$ogrenci_adres = isset($_POST['ogrenci_adres']) ? $_POST['ogrenci_adres'] : null;
	$ogrenci_bolum = isset($_POST['ogrenci_bolum']) ? $_POST['ogrenci_bolum'] : null;
	$ogrenci_phone = isset($_POST['ogrenci_phone']) ? $_POST['ogrenci_phone'] : null;

	//veritabanı ekleme işlemi
	$sorgu = $db->prepare('INSERT INTO ogrenci SET
		ogrenci_ad = ?,
		ogrenci_soyad = ?,
		ogrenci_adres = ?,
		ogrenci_bolum = ?,
		ogrenci_phone = ?
	');
	$ekle = $sorgu->execute([
		$ogrenci_ad, $ogrenci_soyad, $ogrenci_adres, $ogrenci_bolum, $ogrenci_phone
	]);
	if ($ekle) {
		header('location:anasayfa.php?durum=basarili');
	}
	else {
		$hata = $sorgu->errorInfo();
		echo 'mysql hatası'. $hata[2];
	}

}

if (isset($_POST['fakulte_kaydet'])) {
	$fakulte_ad = isset($_POST['fakulte_ad']) ? $_POST['fakulte_ad'] : null;
	$fakulte_dersad = isset($_POST['fakulte_dersad']) ? $_POST['fakulte_dersad'] : null;
	$fakulte_derskredi = isset($_POST['fakulte_derskredi']) ? $_POST['fakulte_derskredi'] : null;
	$fakulte_dersaat = isset($_POST['fakulte_dersaat']) ? $_POST['fakulte_dersaat'] : null;
	$fakulte_dersdönem = isset($_POST['fakulte_dersdönem']) ? $_POST['fakulte_dersdönem'] : null;
	$fakulte_derskodu = isset($_POST['fakulte_derskodu']) ? $_POST['fakulte_derskodu'] : null;

	//veritabanı ekleme işlemi
	$sorgu = $db->prepare('INSERT INTO fakulte SET
		fakulte_ad = ?,
		fakulte_dersad = ?,
		fakulte_derskredi = ?,
		fakulte_dersaat=?,
		fakulte_dersdönem=?,
		fakulte_derskodu=?

	');
	$ekle = $sorgu->execute([
		$fakulte_ad, $fakulte_dersad, $fakulte_derskredi,$fakulte_dersaat,$fakulte_dersdönem,$fakulte_derskodu
	]);
	if ($ekle) {
		header('location:anasayfa.php?durum=basarili');
	}
	else {
		$hata = $sorgu->errorInfo();
		echo 'mysql hatası'. $hata[2];
	}

}


if (isset($_POST['akademisyen_kaydet'])) {
	$akademisyen_adsoyad = isset($_POST['akademisyen_adsoyad']) ? $_POST['akademisyen_adsoyad'] : null;
	$akademisyen_bolum= isset($_POST['akademisyen_bolum']) ? $_POST['akademisyen_bolum'] : null;
	$akademisyen_ders = isset($_POST['akademisyen_ders']) ? $_POST['akademisyen_ders'] : null;
	

	//veritabanı ekleme işlemi
	$sorgu = $db->prepare('INSERT INTO akademisyen SET
		akademisyen_adsoyad = ?,
		akademisyen_bolum = ?,
		akademisyen_ders = ?
		
	');
	$ekle = $sorgu->execute([
		$akademisyen_adsoyad, $akademisyen_bolum, $akademisyen_ders
	]);
	if ($ekle) {
		header('location:anasayfa.php?durum=basarili');
	}
	else {
		$hata = $sorgu->errorInfo();
		echo 'mysql hatası'. $hata[2];
	}

}


if (isset($_POST['kayit_kaydet'])) {
	$kayit_no = isset($_POST['kayit_no']) ? $_POST['kayit_no'] : null;
	$kayit_derskod= isset($_POST['kayit_derskod']) ? $_POST['kayit_derskod'] : null;
	$kayit_dersad = isset($_POST['kayit_dersad']) ? $_POST['kayit_dersad'] : null;
	$kayit_vize = isset($_POST['kayit_vize']) ? $_POST['kayit_vize'] : null;
	$kayit_final = isset($_POST['kayit_final']) ? $_POST['kayit_final'] : null;
	$kayit_but = isset($_POST['kayit_but']) ? $_POST['kayit_but'] : null;
	$kayit_ort = isset($_POST['kayit_ort']) ? $_POST['kayit_ort'] : null;
	$kayit_durum = isset($_POST['kayit_durum']) ? $_POST['kayit_durum'] : null;

	$kayit_ort = $kayit_vize * 0.4 + $kayit_final * 0.6;

	if ($kayit_ort <= 50) {
		echo $kayit_durum = "Kaldı.";
	}
	else if ($kayit_ort > 50) {
		echo $kayit_durum = "Geçti.";
	}
	else {
		echo "Sınavınız geçersizdir.";
	}
 
	//veritabanı ekleme işlemi
	$sorgu = $db->prepare('INSERT INTO ogrencikayit SET
		kayit_no = ?,
		kayit_derskod = ?,
		kayit_dersad=?,
		kayit_vize = ?,
		kayit_final = ?,
		kayit_ort = ?,
		kayit_durum = ?
		
		
	');
	$ekle = $sorgu->execute([
		$kayit_no, $kayit_derskod, $kayit_dersad,$kayit_vize, $kayit_final, $kayit_ort, $kayit_durum
	]);
	if ($ekle) {
		header('location:anasayfa.php?durum=basarili');
	}
	else {
		$hata = $sorgu->errorInfo();
		echo 'mysql hatası'. $hata[2];
	}
}
?>