<?php
$sql = 'SELECT *
               FROM `elementy`
               WHERE `kategoria_id` = ' . $kat_id .
               ' ORDER BY `nazwa`';
$wynik = mysqli_query($link, $sql);
if (mysqli_num_rows($wynik) > 0) {
    while ($produkt = @mysqli_fetch_array($wynik)) {
		echo '<div id="'. $produkt['nazwa'] . '" class="container-fluid">';
		echo '<div class="row"><br><br></div>';
		echo '<div class="container">';
		echo '<h2>' . $produkt['nazwa'] . '</h2>';
		echo '<div class="row">';
	    echo '<div class="col-sm-2">';
        echo '<div>';
	    echo '<a href="' . $produkt['img'] . '" data-lightbox="' . $produkt['nazwa'] . '" data-title="' . $produkt['nazwa'] . '"><img class="example-img" src="photos/' . $produkt['img_tn'] . '" alt="image-1" /></a>';
        echo '</div>';
	    echo '</div>';
		echo '<div class="col-sm-9">';
        echo '<br><p align="justify"></br> ' . $produkt['opis'] . '</p>' . PHP_EOL;
		echo '</div></div>';
		echo '<br><a href="#"><h4 align="center">Powróć na górę</h4></a><br>';
		echo '</div></div>';
		
    }
} else {
    echo 'wyników 0';
}
mysqli_close($link);
 ?>