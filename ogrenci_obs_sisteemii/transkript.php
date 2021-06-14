<?php 
include 'baglan.php'; ?>
<!DOCTYPE html>
<html lang="tr">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="transkript.css">
	<title>Öğrenci Obs Sistemi</title>
</head>
<body>
	<header>
		<h2>Öğrenci Obs Sistemi</h2>
	</header>
	<div class="tableOuter" >
		<h1>Öğrenci Bilgi Kayıt Formu</h1>
		<div style="overflow-x:auto;">
  <table >
    <tr>
      <th>Id</th>
      <th>No</th>
      <th>Ders Kodu</th>
      <th>Ders Adı</th>
      <th>Vize</th>
      <th>Final</th>
      <th>Bütünleme</th>
      <th>Ortalama</th>
      <th>Geçti/Kaldı</th>
    </tr>
    <?php 
		 $icerik=$db->query("SELECT * FROM ogrencikayit");
		 $icerik->execute();
     while($row=$icerik->fetch(PDO::FETCH_ASSOC))
		 {
		 	$kayitid=$row['kayit_id'];
			$kayitno=$row['kayit_no'];
			$kayitderskod=$row['kayit_derskod'];
			$kayitdersad=$row['kayit_dersad'];
			$kayitvize=$row['kayit_vize'];
			$kayitfinal=$row['kayit_final'];
			$kayitbut=$row['kayit_but'];
			$kayitort=$row['kayit_ort'];
			$kayitdurum=$row['kayit_durum'];
		?>
    <tr>
     <b> <td><?php echo $kayitid;?></td>
      <td><?php echo $kayitno;?></td>
      <td><?php echo $kayitderskod;?></td>
      <td><?php echo $kayitdersad;?></td>
      <td><?php echo $kayitvize;?></td>
      <td><?php echo $kayitfinal;?></td>
      <td><?php echo $kayitbut;?></td>
      <td><?php echo $kayitort;?></td>
      <td><?php echo $kayitdurum;?></td></b>
  <?php } ?>
    </tr>
  </table>
</div>
</div>
</body>
</html>