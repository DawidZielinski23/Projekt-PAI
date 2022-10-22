<!DOCTYPE html>
<html lang="pl">
<head>
  	<?php include 'head.php';?>
</head>
<body onload="odlczanie();" data-spy="scrollspy" data-target=".navbar" data-offset="0">

<?php 
	session_start();
	include "naglowek.php";
	include "menu.php";
	$kat_id = isset($_GET['kat_id']) ? (int)$_GET['kat_id'] : 2;
?>
<div class="container">
<h2>Czołgi obce</h2><br>
    <p>Na tej stronie zamieszczono czołgi wyprodukwoane przez inne państwa, które były używane przez poslkich żółnierzy na różnych frontach II wojny światowej. Znajdują się wśród nich maszyny z USA, Wielkiej Brytanii oraz ZSRR.</p>
	<p>Są tu opisane:</p>
	<?php include "lista.php"?>
</div>
<?php
	
    include 'wyswietlanie.php';
?>

<div><?php include 'stopka.php';?></div>

</body>
</html>