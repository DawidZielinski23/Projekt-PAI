<!DOCTYPE html>
<html lang="pl">
<head>
	<?php include 'head.php';?>
</head>
<body onload="odlczanie();" data-spy="scroll" data-target=".navbar" data-offset="50">
<?php 
	session_start();
	include "naglowek.php";
	include "menu.php";
?>

<div class="container">
	<h2>Tematyka strony</h2><br>
      <p>Strona przedstawia informacje o czołgach używanych przez polskie siły zbrojne podczas drugiej wojny światowej. Znajdują się na niej maszyny polskiej produkcji, jak i pojazdy obcej produkcji, które były używane przez polskich żólnierzy na różnych frontach II wojny światowej.
	  Dodatkowo na stronie znajdują się prototypy, które nie zostały skierowane do produkcji seryjnej lub nigdy nie zostały zbudowane.</p>
      <br>
</div>
 
<div class="container">
	<h2>Jakie kategorie znajdują się na stronie?</h2><br>
      <p>Na straonie zamieszono czołgi, które zostały podzielone na trzy kategorie:</p>
		<?php
		echo '<ul>';		
		mysqli_query($link, 'SET NAMES utf8');
		$sql1 = 'SELECT `id`, `nazwa` FROM `kategorie` ORDER BY `id`';
		$wynik = mysqli_query($link, $sql1);
		if ($wynik) {
		while ($kategoria = @mysqli_fetch_array($wynik)) {
			echo '<li><a href="'.$kategoria['nazwa'].'.php'.'">'.$kategoria['nazwa'].PHP_EOL;
		}}
		echo '</a></li>';
		echo '</ul>';
		?>
		<h2>
		</h2>
</div>



<div class="container">
<h2 style="text-align:center">Film przedstawiający wybrane polskie czołgi z okresu 2 wojny światowej</h2><br>
<iframe src="https://www.youtube.com/embed/-MFUckxiq1A" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture allowfullscreen"></iframe>
</div>


<div class="container">
<h2 style="text-align:center">Zdjecia wybranych czołgów</h2><br>
<div class="row">
  <div class="col-sm-2"></div>
  <div class="col-sm-1">
    <img src="photos/Cromwell_tn.jpg" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-1">
    <img src="photos/M4_tn.jpg"  onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-1">
    <img src="photos/t34_tn.jpg" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-1">
    <img src="photos/Armored_car_pattern_34_tn.jpg" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-1">
    <img src="photos/Js2_tn.jpg" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
    <div class="col-sm-1">
    <img src="photos/tks_tn.jpg" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-1">
    <img src="photos/2025TP_tn.jpg" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-1">
    <img src="photos/t3485_tn.jpg" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  <div class="col-sm-2"></div>
</div>

<div class="row1">
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 8</div>
      <img src="photos/Cromwell.jpg" width="1200px" height="743px">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 8</div>
      <img src="photos/M4.jpg" width="1200px" height="743px">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">3 / 8</div>
      <img src="photos/t34.jpg" width="1200px" height="743px">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">4 / 8</div>
      <img src="photos/Armored_car_pattern_34.jpg" width="1200px" height="743px">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">5 / 8</div>
      <img src="photos/Js2.jpg" width="1200px" height="743px">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">6 / 8</div>
      <img src="photos/tks.jpg" width="1200px" height="743px">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">7 / 8</div>
      <img src="photos/2025TP.jpg" width="1200px" height="743px">
    </div>
	
	<div class="mySlides">
      <div class="numbertext">8 / 8</div>
      <img src="photos/t3485.jpg" width="1200px" height="743px">
    </div>
    
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <div class="caption-container">
      <p id="caption"></p>
    </div>

<div class="row">
    <div class="column1">
      <img class="demo cursor" src="photos/Cromwell_tn.jpg" onclick="currentSlide(1)" alt="Cromwell">
    </div>
    <div class="column1">
      <img class="demo cursor" src="photos/M4_tn.jpg"  onclick="currentSlide(2)" alt="M4 Sherman">
    </div>
    <div class="column1">
      <img class="demo cursor" src="photos/t34_TN.jpg"  onclick="currentSlide(3)" alt="T-34">
  </div>
  <div class="column1">
      <img class="demo cursor" src="photos/Armored_car_pattern_34_tn.jpg"  onclick="currentSlide(4)" alt="Samochód pancerny wz. 34">
  </div>
  <div class="column1">
      <img class="demo cursor" src="photos/Js2_tn.jpg"  onclick="currentSlide(5)" alt="IS-2">
  </div>
    <div class="column1">
      <img class="demo cursor" src="photos/tks_tn.jpg"  onclick="currentSlide(6)" alt="TKS">
  </div>
  <div class="column1">
      <img class="demo cursor" src="photos/2025TP_tn.jpg"  onclick="currentSlide(7)" alt="20/25TP">
  </div>
  <div class="column1">
      <img class="demo cursor" src="photos/t3485_tn.jpg"  onclick="currentSlide(8)" alt="T-34-85">
  </div>
</div>
</div>
</div>
</div>
</div>
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<br>
<div><?php include 'stopka.php';?></div>

</body>
</html>