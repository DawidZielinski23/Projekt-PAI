<?php
// Include config file
include "config.php";

// Define variables and initialize with empty values
$kategoria_id = $nazwa = $opis = $img = $img_tn = "";
$kategoria_id_err = $nazwa_err = $opis_err = $img_err = $img_tn_err = "";

// Processing form data when form is submitted
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $input_kategoria_id = trim($_POST["kategoria_id"]);
    if(empty($input_kategoria_id)){
        $kategoria_id_err = "Proszę podać kategorię.";
    } else{
        $kategoria_id = $input_kategoria_id;
    }
	
    $input_nazwa = trim($_POST["nazwa"]);
    if(empty($input_nazwa)){
        $nazwa_err = "Proszę podać nazwę.";
    } else{
        $nazwa = $input_nazwa;
    }
    
    $input_opis = trim($_POST["opis"]);
    if(empty($input_opis)){
        $address_err = "Podaj opis";     
    } else{
        $opis = $input_opis;
    }
    
    $input_img = trim($_POST["img"]);
    if(empty($input_img)){
        $img_err = "Podaj nazwę pliku.";     
    } else{
        $img = $input_img;
    }
	
	$input_img_tn = trim($_POST["img_tn"]);
    if(empty($input_img_tn)){
        $img_tn_err = "Podaj nazwę pliku.";     
    } else{
        $img_tn = $input_img_tn;
    }
    
    // Check input errors before inserting in database
    if(empty($kategoria_id_err) && empty($nazwa_err) && empty($opis_err) && empty($img_err) && empty($img_tn_err)){
        @mysqli_query($link, 'SET NAMES utf8');
		// Prepare an insert statement
        $sql = "INSERT INTO elementy (kategoria_id, nazwa, opis, img, img_tn) VALUES (?, ?, ?, ?, ?)";
         
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssss", $param_kategoria_id, $param_nazwa, $param_opis, $param_img, $param_ing_tn);
            
            // Set parameters
			$param_kategoria_id = $kategoria_id;
            $param_nazwa = $nazwa;
            $param_opis = $opis;
            $param_img = $img;
			$param_ing_tn = $img_tn;
            
            // Attempt to execute the prepared statement
            if(mysqli_stmt_execute($stmt)){
                // Records created successfully. Redirect to panel page
                header("location: panel.php");
                exit();
            } else{
                echo "Coś poszło nie tak, spróbuj ponownie.";
            }
        }
         
        // Close statement
        mysqli_stmt_close($stmt);
    }
    
    // Close connection
    mysqli_close($link);
}
?>
 
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Dodaj element</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
			background-color:#333333;
        }
    </style>
	<link rel="stylesheet" href="plik123.css" type="text/css">
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header">
                        <h2>Dodaj element</h2>
                    </div>
                    <p>Wypełnij pola, aby dodać nowy element do tablicy.</p>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="form-group <?php echo (!empty($kategoria_id_err)) ? 'has-error' : ''; ?>">
                            <label>Kategoria</label>
							<select id="kategoria_id" name="kategoria_id" class="form-control" value="<?php echo $kategoria_id; ?>">
                            <?php
								include "config.php";
								@mysqli_query($link, 'SET NAMES utf8');							
								$sql = 'SELECT id, nazwa FROM kategorie ORDER BY nazwa';
								$wynik = mysqli_query($link, $sql);
								if (mysqli_num_rows($wynik) > 0) {
								while ($wartosc = @mysqli_fetch_array($wynik)){
									echo '<option value="'. $wartosc['id'] . '">'. $wartosc['nazwa'].'</option>'.PHP_EOL;
									
								}}?>
							</select>
                            <span class="help-block"><?php echo $kategoria_id_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($nazwa_err)) ? 'has-error' : ''; ?>">
                            <label>Nazwa</label>
                            <input type="text" name="nazwa" class="form-control" value="<?php echo $nazwa; ?>">
                            <span class="help-block"><?php echo $nazwa_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($opis_err)) ? 'has-error' : ''; ?>">
                            <label>Opis</label>
                            <textarea name="opis" class="form-control"><?php echo $opis; ?></textarea>
                            <span class="help-block"><?php echo $opis_err;?></span>
                        </div>
                        <div class="form-group <?php echo (!empty($img_err)) ? 'has-error' : ''; ?>">
                            <label>Zdjęcie</label>
                            <input type="text" name="img" class="form-control" value="<?php echo $img; ?>">
                            <span class="help-block"><?php echo $img_err;?></span>
                        </div>
						<div class="form-group <?php echo (!empty($img_tn_err)) ? 'has-error' : ''; ?>">
                            <label>Miniaturka zdjęcia</label>
                            <input type="text" name="img_tn" class="form-control" value="<?php echo $img_tn; ?>">
                            <span class="help-block"><?php echo $img_tn_err;?></span>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Zatwierdź">
                        <a href="panel.php" class="btn btn-default">Anuluj</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>