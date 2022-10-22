<?php
// Check existence of id parameter before processing further
if(isset($_GET["id"]) && !empty(trim($_GET["id"]))){
    // Include config file
    require_once "config.php";
    @mysqli_query($link, 'SET NAMES utf8');
    // Prepare a select statement
    $sql = "SELECT * FROM elementy WHERE id = ?";
    
    if($stmt = mysqli_prepare($link, $sql)){
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "i", $param_id);
        
        // Set parameters
        $param_id = trim($_GET["id"]);
        
        // Attempt to execute the prepared statement
        if(mysqli_stmt_execute($stmt)){
            $result = mysqli_stmt_get_result($stmt);
    
            if(mysqli_num_rows($result) == 1){
                /* Fetch result row as an associative array. Since the result set contains only one row, we don't need to use while loop */
                $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
                
                // Retrieve individual field value
				$kategoria_id=$row["kategoria_id"];
                $nazwa = $row["nazwa"];
                $opis = $row["opis"];
                $img = $row["img"];
				$img = $row["img_tn"];
            } else{
                // URL doesn't contain valid id parameter. Redirect to error page
                header("location: error.php");
                exit();
            }
            
        } else{
            echo "Coś poszło nie tak, spróbuj jeszcze raz.";
        }
    }
     
    // Close statement
    mysqli_stmt_close($stmt);
    
    // Close connection
    mysqli_close($link);
} else{
    // URL doesn't contain id parameter. Redirect to error page
    header("location: error.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zobacz element</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
	<script src="lightbox-plus-jquery.js"></script>';
    <link href="lightbox.css" rel="stylesheet"/>';
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
                        <h1>Zobacz element</h1>
                    </div>
					<div class="form-group">
                        <label>Kategoria</label>
                        <p class="form-control-static"><?php echo $row["kategoria_id"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Nazwa</label>
                        <p class="form-control-static"><?php echo $row["nazwa"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Opis</label>
                        <p class="form-control-static"><?php echo $row["opis"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Zdjęcie</label>
                        <p class="form-control-static"><?php echo $row["img"]; ?></p>
                    </div>
                    <div class="form-group">
                        <label>Miniaturka zdjęcia</label>
                        <p class="form-control-static"><?php echo $row["img_tn"]; ?></p>
                    </div>
					<div>
						<a href="<?php echo $row["img"]; ?>" data-lightbox="<?php echo $row["img"]; ?>" data-title="<?php echo $row["img"]; ?>"><img class="example-image" src="photos/<?php echo $row["img_tn"]; ?>" alt="image-1" /></a>
					</div>
					</div>
                    <br><p><a href="panel.php" class="btn btn-primary" style="margin-top:20px;" >Cofnij</a></p>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
