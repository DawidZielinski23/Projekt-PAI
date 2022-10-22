<!DOCTYPE html>
<html lang="pl">
<head>
	<?php include 'head.php';?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script>
	$(document).ready(function() {
	("html").on("submit","#contact_form",function(e){
		e.preventDefault();
		$("#send_form_status").html('').hide();
		var data=$("#contact_form").serialize();
		$.post("/send_form.php",data,function(res){
		$("#send_form_status").html(res.msg).show();
		if(res.status==1){ 
			$("#contact_form")[0].reset();
		} 
		});
	});
	});
	</script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
<?php 
	session_start();
	include "naglowek.php";
	include "menu.php";
?>

<div class="container">
	<h2>Wiadomość została wysłana.</h2>
</div>

<div class="container">
  <div class="row">
    <div class="col-sm-4">
      <h2>O autorze</h2><br>
      <p>Student 5 roku kierunku Autoamtyka, Robotyka i Systemy Sterowania na Politechnice Gdańskiej.</p>
      <hr class="d-sm-none">
    </div>
    <div class="col-sm-8">
      <h2>Kontakt</h2><br>
      <p>Poniżej znajdują się dane ktonatkowe, social media oraz formularz, w którym można przesłać zapytanie.</p>
      <br>
      </div>
  </div>
</div>

<div class="container">
<h2>Social media</h2><br>
  <div class="row">
  <div class="col-sm-3"></div>
  <div class="col-sm-7">
	<a href="http://www.facebook.com" target="_blank"><img class="miniaturka" src="photos/facebook.png" width="100px" height="100px"></a>
	<a href="http://www.twitter.com" target="_blank"><img class="miniaturka" src="photos/twitter.png" width="100px" height="100px"></a>
	<a href="http://www.instagram.com" target="_blank"><img class="miniaturka" src="photos/instagram.png" width="100px" height="100px"></a>
	<a href="http://www.youtube.com" target="_blank"><img class="miniaturka" src="photos/youtube.png" width="100px" height="100px"></a>
	<a href="http://www.linkedin.com" target="_blank"><img class="miniaturka" src="photos/linkedin.png" width="100px" height="100px"></a>
</div>
<div class="col-sm-2"></div>
</div>
</div>
<div class="container">
<h2>Formularz kontaktowy</h2><br>
<div id="send_form_status"></div>
<form method="post" action="send_form.php" id="contact_form">
     <div class="formularz">
	 <div>Imię i nazwisko</div>
     <div><input type="text" name="name" id="name" class="formField" /></div>
     <div>Adres email</div>
     <div><input type="text" name="email" id="email" class="formField" /></div>
     <div>Treść wiadomości</div>
     <div><textarea name="message" id="message" class="formField"></textarea></div>
     <div><button id="sendBtn">Wyślij</button></div>
	 </div>
</form>
</div>

<div><?php include 'stopka.php';?></div>
</body>
</html>