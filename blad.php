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
      <h2>Wystąpił błąd, spróbuj ponownie wysłać formularz</h2><br>
	  <a href="kontakt.php"><h2>Powrót</h2></a>
</div>

<div><?php include 'stopka.php';?></div>
</body>
</html>