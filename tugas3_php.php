<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
	
	$jarak= 360;
	$kecepatan= 90;

	$waktu_menit=($jarak/$kecepatan);
	$waktu=$waktu_menit*60;

	?>
	<p>Jarak kota A - Z = 360 Km</p>
	<p>Kecepatan motor = 90 Km/Jam</p>
	<p>Waktu Tempuh = ?</p>
	<p>Jawaban : <?php echo $waktu; ?> Menit</p>

</body>
</html>