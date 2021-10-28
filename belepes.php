<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title>Belépés</title>
</head>
<body style="background-color: green;">
<header>
    <nav class="navbar navbar-expand-lg 12 navbar-light 6 bg-light 6">
        <div class="container-fluid" style="background-color: greenyellow;">
          <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Főoldal</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="kepek.html">Képek</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="díjak.html">Díjak</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <?php
    $kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
    if(isset($_POST["submit"])){
      $errors=array();
      $true= true;
      if(empty($_POST['felhasznalonev'])){
        $true= false;
        array_push($errors, "A felhasználónév nincs megadva!");
      }
      if(empty($_POST['jelszo'])){
        $true= false;
        array_push($errors, "A jelszó nincs megadva!");
      }
      if($true){
        $felhasznalonev= mysqli_real_escape_string($kapcsolat, $_POST['felhasznalonev']);
        $jelszo= mysqli_real_escape_string($kapcsolat, $_POST['jelszo']);
        $jelszo= md5($jelszo);
        $sql = "SELECT * FROM `belepes` WHERE felhasznalonev='$felhasznalonev' AND jelszo='$jelszo' ;";
        mysqli_query($kapcsolat, $sql);
        /*$query = $kapcsolat->query($sql);
        if(mysqli_num_rows($query) == 1){
          session_start();
          $_SESSION['felhasznalonev'] = $felhasznalonev;*/
          header("Location:admin.php");
        }else{
          array_push($errors, "A felhasználónév vagy jelszó nem jó!");
        }
      }
    //}
    mysqli_close($kapcsolat);   
    ?>
    <main>
       <form action="belepes.php" method="POST">
         <label for="felhasznalonev">felhasználónév</label>
           <input type="text" name="felhasznalonev">
           <label for="jelszo">jelszó</label>
           <input type="password" name="jelszo">
           <input value="Belépés" type="submit" name="submit">
       </form> 
       <?php
       if(!empty($errors)){
         foreach($errors as $key){
           echo $key."<br\>";
         }
       }
       ?>
    </main>
    </body>
</html>