<?php
//$valid_formats = array("jpg", "png", "gif", "zip", "bmp","doc","pdf");
include 'dbConfig.php';
$valid_formats = array("pdf");
$max_file_size = 1024*1000; //100 kb
$path ="views/app/images/archivos/resultados/";

$count = 0;

if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST"){
	// Loop $_FILES to execute all files
	foreach ($_FILES['files']['name'] as $f => $name) { 
		//echo pathinfo($name, PATHINFO_EXTENSION), "\n";
	    if ($_FILES['files']['error'][$f] == 4) {
			
	        continue; // Skip file if any error found
	    }	       
	    if ($_FILES['files']['error'][$f] == 0) {	           
	        if ($_FILES['files']['size'][$f] > $max_file_size) {
	            $message[] = "$name is too large!.";
	            continue; // Skip large files
	        }
			elseif( ! in_array(pathinfo($name, PATHINFO_EXTENSION), $valid_formats) ){
				echo pathinfo($name, PATHINFO_EXTENSION);
				$message[] = "$name is not a valid format";
				continue; // Skip invalid file formats
			}
	        else{ // No error found! Move uploaded files 
				$codigo_extraido=strstr("$name", '- ', true);
				$query_1=$db->query("SELECT * FROM recepcion WHERE codigo='$codigo_extraido'");
				$filas_devueltas=$query_1->num_rows;
				
				if($filas_devueltas >0){
					$query=$db->query("UPDATE recepcion SET resultados = '$name' WHERE codigo = '$codigo_extraido'");
					move_uploaded_file($_FILES["files"]["tmp_name"][$f], $path.$name);
					echo "$name"." Archivo cargado con exito<br>";
				}else{
					echo "<font color='red'>$name</font>"."<font color='red'> Archivo no fue cargado</font><br>";
				}
	            $count++; // Number of successfully uploaded file
	        }
	    }
	}
}
//redirect to the listing page
//header("Location: http://localhost/app/?view=recepcion&mode=add");
//header("Location: http://www.sgiltda.com/app/?view=recepcion&mode=add");
?>