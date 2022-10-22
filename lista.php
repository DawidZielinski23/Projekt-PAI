<?php
$sql = 'SELECT `nazwa`
               FROM `elementy`
               WHERE `kategoria_id` = ' . $kat_id .
               ' ORDER BY `nazwa`';
$wynik = mysqli_query($link, $sql);
if (mysqli_num_rows($wynik) > 0) {
	echo '<ul>';
    while ($produkt = @mysqli_fetch_array($wynik)) {
		echo '<li><a href="#'. $produkt['nazwa'] .'">' . $produkt['nazwa'] . '</a></li>';		
    }
	echo '</ul>';
} else {
    echo 'wyników 0';
}
 ?>