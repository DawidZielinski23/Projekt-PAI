<?php
	echo '<nav class="navbar navbar-expand-sm bg-dark navbar-dark" data-spy="affix" data-offset-top="197">';
    echo '<a class="navbar-brand" href="#">Menu strony</a>';
	echo '<ul class="navbar-nav">';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="index.php">Strona główna</a></li>';
    echo '<li class="nav-item">';
    echo '<a class="nav-link" data-toggle="dropdown" href="#">Kategorie<span class="caret"></span></a>';
	echo '<ul class="dropdown-menu">';
	include "config.php";
	@mysqli_query($link, 'SET NAMES utf8');
	$sql = 'SELECT `id`, `nazwa` FROM `kategorie` ORDER BY `id`';
	$wynik = mysqli_query($link, $sql);
	if ($wynik) {
    while ($kategoria = @mysqli_fetch_array($wynik)) {
		echo '<li class="nav-item"><a class="pozycja"  href="'.$kategoria['nazwa'].'.php'.'">'.$kategoria['nazwa'].PHP_EOL;
	}
	echo '</a></li>';		
	echo '</li>';
	echo '</ul>';
	} else {
		echo 'wyników 0';
	}			
    echo '<li class="nav-item">';
    echo '<a class="nav-link" href="kontakt.php">Kontakt</a>';
    echo '</li>';

	if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true):
		echo '<li class="nav-item">';
		echo '<a class="nav-link" href="panel.php">Panel</a>';
		echo '</li>';
		echo '<li class="nav-item">';
        echo '<a class="nav-link" href="wyloguj.php">Wyloguj</a>';
		echo '</li>';
	else: 
		echo '<li class="nav-item">';
        echo '<a class="nav-link" href="logowanie.php">Logowanie</a>';
		echo '</li>';
	endif; 
    echo '</ul>';
	echo '</div>';
	echo '</nav>';
?>