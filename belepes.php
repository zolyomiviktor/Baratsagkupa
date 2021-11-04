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
    
    if( ! empty( $_POST ) )
    {
        if( empty( $_POST["felhasznalonev"] ) || empty( $_POST["jelszo"] ) )
        {
            echo "<p>Minden mező kitöltése kötelező!</p>";
        }
        elseif( $_POST["felhasznalonev"] == "admin" && $_POST["jelszo"] == "admin" )
        {
          echo "<script>location.href='admin.php'</script>";
            echo "<h2>Sikeresen bejelentkeztél!</h2>";
        }
    }
    ?>
    <main>
       <form action="belepes.php" method="POST">
         <label>felhasználónév</label>
           <input type="text" name="felhasznalonev">
           <label>jelszó</label>
           <input type="password" name="jelszo">
           <input value="Belépés" type="submit" name="submit">
       </form> 
       
    </main>
    </body>
</html>