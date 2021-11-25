<?php
$tomege=$_POST['tomege'];
$helyszama=$_POST['helyszama'];
$darabszama=$_POST['darabszama'];
$kategoriaja=$_POST['kategoriaja'];
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
if (!$kapcsolat) {
    die('Kapcsolódási hiba (' . mysqli_connect_errno() . ') ' . mysqli_connect_error());
}
$parancs="INSERT INTO fogasnaplo (tomege,helyszama,darabszama,kategoriaja ) VALUES ('$tomege','$helyszama','$darabszama','$kategoriaja');"; 
mysqli_query($kapcsolat, $parancs);
mysqli_close($kapcsolat); 
?>
