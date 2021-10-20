<?php
$tomeg=$_REQUEST['tomeg'];
$helyszam=$_REQUEST['helyszam'];
$darabszama=$_REQUEST['darabszama'];
$kategoria=$_REQUEST['kategoria'];
$parancs="INSERT INTO fogasnaplo (tomeg,helyszam,darabszama,kategoria) VALUES ('$tomeg','$helyszam','$darabszama','$kategoria');";
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
mysqli_query($kapcsolat, $parancs);
mysqli_close($kapcsolat);
?>