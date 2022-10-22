<!DOCTYPE html>
<html lang="pl">
<head>
  	<?php include 'head.php';?>
</head>
<body  onload="odlczanie();" data-spy="scrollspy" data-target=".navbar" data-offset="50">

<?php 
	session_start();
	include "naglowek.php";
	include "menu.php";
	$kat_id = isset($_GET['kat_id']) ? (int)$_GET['kat_id'] : 1;
?>
<div class="container">
<h2>Czołgi polskie</h2><br>
    <p>Na tej stronie zamieszczono czołgi wyprodukwoane w Polsce, które były używane przez poslkich żólnierzy w czasie dwudziestolecia międzywojennego oraz podaczas kampanii wrześniowej.</p><br>
	<p>Są tu opisane:</p>
	<?php include "lista.php"?>
</div>
<?php
    $kat_id = isset($_GET['kat_id']) ? (int)$_GET['kat_id'] : 1;
    include 'wyswietlanie.php';
 ?>
 
<div><?php include 'stopka.php';?></div>

</body>
</html>