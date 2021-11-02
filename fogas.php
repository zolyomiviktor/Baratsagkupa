<?php
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
foreach($_POST as $key => $value){
    $$key=$value;
} 
$parancs="INSERT INTO fogasnaplo (tomeg,helyszam,darabszam,kategoria ) VALUES ('$tomeg','$helyszam','$darabszam','$kategoria');"; 
mysqli_query($kapcsolat, $parancs);

mysqli_close($kapcsolat); 

//header("Location:nevezok.php"); 
?>
