<?php
$nev=$_REQUEST['nev'];

$parancs="INSERT INTO nevezok (nev) VALUES ('$nev');";
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
mysqli_query($kapcsolat, $parancs);
mysqli_close($kapcsolat);
header("Location:nevezok.php");
$query="SELECT 'nev' FROM 'baratsagkupa' WHERE 'nev'= '$nev'";

?>