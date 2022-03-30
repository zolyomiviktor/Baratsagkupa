<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
            crossorigin="anonymous"
        />
    <title>Eredmények</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg 12 navbar-light 6 bg-light 6">
            <div
                class="container-fluid" style="background-color: greenyellow;"
                
            >
                <a class="navbar-brand" href="#"></a>
                <button
                    class="navbar-toggler"
                    type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarNav"
                    aria-controls="navbarNav"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a
                                class="nav-link active"
                                aria-current="page"
                                href="index.html"
                                >Főoldal</a
                            >
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="kepek.html">Képek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="díjak.html">Díjak</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="nevezok.php">Nevezők</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="tamogatoink.html">Támogatóink</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="eredmeny.php">Eredmények </a>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <?php
    $parancs="SELECT * FROM fogasnaplo";
$kapcsolat=mysqli_connect("127.0.0.1","root","","baratsagkupa");
$rekodok=mysqli_query($kapcsolat, $parancs);
mysqli_close($kapcsolat);
?>
        
        <?php
        while($sor=mysqli_fetch_array($rekodok,MYSQLI_ASSOC))   {
         ?>   
        
        <table class="table">
  <thead>
    <tr>
    <th scope="col">helyszáma</th>
      <th scope="col">tömege</th>
      <th scope="col">darabszáma</th>
      <th scope="col">kategoriája</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><?php print($sor['helyszama']); ?></td>
      <td><?php print($sor['tomege']); ?></td>
      <td><?php print($sor['darabszama']); ?></td>
      <td><?php print($sor['kategoriaja']); ?></td>
    </tr>
    <tr>

  </tbody>
</table>
    <?php
    }
?>

</body>
</html>