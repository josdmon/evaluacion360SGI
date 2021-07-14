<?php
//load the database configuration file
include 'dbConfig.php';

if(isset($_POST['importSubmit'])){
    
    //validate whether uploaded file is a csv file
    //$csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
	$csvMimes = array('text/x-semicolon-separated-values', 'text/semicolon-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'],$csvMimes)){
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            //open uploaded csv file with read only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            //skip first line
            fgetcsv($csvFile);
            
            //parse data from csv file line by line
			
            while(($line = fgetcsv($csvFile)) !== FALSE){
                //check whether member already exists in database with same email
                $prevQuery = "SELECT * FROM recepcion WHERE codigo = '".$line[0]."'";
                $prevResult = $db->query($prevQuery);
                if($prevResult->num_rows > 0){
                    //update member data
                    $db->query("UPDATE recepcion SET proyecto = '".$line[1]."', plan_muestreo = '".$line[2]."', id_cliente = '".$line[3]."',  f_recepcion = '".$line[4]."' WHERE codigo = '".$line[0]."'");
					echo $line[0]." Registro actualizado con exito<br>";
                }else{
                    //insert member data into database
                    $db->query("INSERT INTO recepcion (codigo, proyecto, plan_muestreo, id_cliente,f_recepcion) VALUES ('".$line[0]."','".$line[1]."','".$line[2]."','".$line[3]."','".$line[4]."')");
					echo $line[0]." Registro cargado con exito<br>";
                }
            }
            
						 			
            //close opened csv file
            fclose($csvFile);

            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

//redirect to the listing page
//header("Location: http://localhost/app/?view=recepcion&mode=add");
//header("Location: http://www.sgiltda.com/app/?view=recepcion&mode=add");
?>
