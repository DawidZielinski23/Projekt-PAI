<?php
  echo '<title>Czołgi polskich sił zbrojnych</title>';
  echo '<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">';
  echo '<meta name="viewport" content="width=device-width, initial-scale=1">';
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
  echo '<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>';
  echo '<script src="lightbox-plus-jquery.js"></script>';
  echo '<link href="lightbox.css" rel="stylesheet"/>';
  #echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>';
  echo '<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">';
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>';
  echo '<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>';
  echo '<link rel="stylesheet" href="plik1234.css" type="text/css">';
  echo '<script src="http://code.jquery.com/jquery-1.12.2.min.js" ></script>';
  echo '<script text="text/javascript">';
        echo 'function odliczanie(){';
		echo 'var today = new Date();';
		
		echo 'var day = today.getDate();';
		echo 'var month = today.getMonth()+1;';
		echo 'if (month<10) month = "0"+month;';
		echo 'var year = today.getFullYear();';
		echo 'var hour = today.getHours();';
		echo 'if (hour<10) hour = "0"+hour;';
		echo 'var minute = today.getMinutes();';
		echo 'if (minute<10) minute = "0"+minute;';
		echo 'var second = today.getSeconds();';
		echo 'if (second<10) second = "0"+second;';
		echo 'document.getElementById("czas").innerHTML = day+"/"+month+"/"+year+"   "+hour+":"+minute+":"+second;';
		echo 'setTimeout("odliczanie()",1000);}';
   echo '</script>';
?>