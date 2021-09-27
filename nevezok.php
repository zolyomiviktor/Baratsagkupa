<?php
$db= new mysqli("127.0.0.1","root","","baratsagkupa");
if($db->connect_errno){
    echo $db->connect_errno;
    die();
}
if ($result=$db->query("SELECT * FROM 'nevezok'")){
    $table=$result->fetch_all();
    echo '<pre>';
    print_r($table);
}
?>
