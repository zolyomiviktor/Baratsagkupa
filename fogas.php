<?php
$nev=$_REQUEST['nev'];
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
if(isset($_POST['submit'])){
    $errors=array();
    $true= true;
    if(empty($_POST['nev'])){
        $true= false;
        array_push($errors, "A jeletkezés mező üres!");   
    }
    if($true){
        $nev= mysqli_real_escape_string($kapcsolat, $_POST['nev']);
        $parancs="INSERT INTO nevezok (nev) VALUES ('$nev');";
        mysqli_query($kapcsolat, $parancs);
        mysqli_close($kapcsolat);        
    }
}
if(!empty($errors)){
    foreach ($errors as $key){
        echo $key."<br\>";            
    }
}
?>
