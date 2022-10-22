<!DOCTYPE html>
<html lang="pl">
<head>
  	<?php include 'head.php';?>
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="10">

<?php 
	session_start();
	include "naglowek.php";
	include "menu.php";
	$kat_id = isset($_GET['kat_id']) ? (int)$_GET['kat_id'] : 3;
?>
<div class="container">
<h2>Prototypy</h2><br>
    <p>Na tej stronie zamieszczono projekty prototypowe poslkich inżynierów, które nie zostały wdrożone do produkcji seryjnej. Niektóre z nich powstały i były testowane, inne instaniły tylko na papierze Wojna pokrzyżowała plany polskiego przemysłu zbrojeniowego i nie było możliwości, aby wyprodukować te czołgi.</p>
	<p>Są tu opisane:</p>
	<?php include "lista.php"?>
</div>
<?php
    include 'wyswietlanie.php';
?>

<div><?php include 'stopka.php';?></div>

</body>
</html>