<?php
$favicon1='
<link rel="apple-touch-icon" sizes="57x57" href="img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon/favicon-16x16.png">
<link rel="manifest" href="img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
';

$favicon2='
<link rel="apple-touch-icon" sizes="57x57" href="../img/favicon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="../img/favicon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="../img/favicon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="../img/favicon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="../img/favicon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="../img/favicon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="../img/favicon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="../img/favicon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="../img/favicon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="../img/favicon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="../img/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="../img/favicon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="../img/favicon/favicon-16x16.png">
<link rel="manifest" href="../img/favicon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="../img/favicon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
';

$footer = '
<footer>
  <div class="container">
    <hr>
      <p class="text-muted" aligne="centre">
        <em>
          Web site developed by <a href="https://github.com/roby8martin/" target=”_blank”>Roby8martin</a> for <a href="https://byter.it" target=”_blank”>Byter</a>
        </em> 
      </p>
    </hr>
  </div>
</footer>
<!-- Switch-Dark-Mode Nascosoto -->
<input type="checkbox" id="darkSwitch" >
<label for="darkSwitch" hidden>Night</label>
<!-- Switch-Dark-Mode JS -->
<script src="../js/dark-mode-switch.min.js"></script>
';
$alto1 ='
<!doctype html>
<html lang="it-IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="../css/bootstrap.css" rel="stylesheet">
    <link href="../css/bootstrap-utilities.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../css/fa.min.css" rel="stylesheet">

    <!-- Favicon -->
    '.$favicon2.'

    <title>La Terra Di Mezzo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="../index.php">La Terra Di Mezzo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Login</a>
            </li>
          </ul>
          <form class="d-flex">
            <a href="/" class="btn btn-danger">Esci</a>
          </form>
        </div>
      </div>
    </nav>
';
$basso1='
    <div class="container">
      <div class="row">
        <h1>La Terra Di Mezzo</h1>
        <div class="col-sm">
          <h4>Esegui il login</h4><br>
          <form method="post" action="../sito/login.php">
            <label>Username</label>
            <div class="input-group mb-3">
              <input class="form-control" type="text" id="username" placeholder="Username" name="username" required>
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span><br>
            </div>
            <label>Password</label>
            <div class="input-group mb-3">
              <input class="form-control" type="password" id="password" placeholder="Password" name="password" required>
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
            </div>
            <button type="submit" class="btn btn-outline-primary" name="login">Accedi</button>
          </form>
        </div>
        <div class="col-sm">
        </div>
        <div class="col-sm">
          <img width="250" src="../img/EBB-GIF.gif" alt="Gif logo">     
        </div>
      </div>
    </div>
    

    <!-- Footer -->
    '.$footer.'
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.js"></script>
    <script src="../js/bootstrap-utilities.min.js"></script>

  </body>
</html>
';

$alto2='
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ACbottoni.css">

    <title>ACDB</title>

    <!-- Favicon -->
    <link  rel = "apple-touch-icon"  dimensioni = "57x57"  href = "../img/favicon/apple-icon-57x57.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "60x60"  href = "../img/favicon/ apple -icon-60x60.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 72x72 "  href = "../img/favicon/apple-icon-72x72.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "76x76"  href = "../img/favicon/apple-icon-76x76.png" > 
    <link  rel = "apple-touch-icon "  dimensioni = " 114x114 "  href = "../img/favicon/apple-icon-114x114.png "> 
    <link  rel = "apple-touch-icon"  dimensioni = "120x120"  href = "../img/favicon/apple-icon-120x120.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "144x144"  href = "../img/favicon/apple-icon-144x144.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 152x152 "  href = "../img/favicon/apple-icon-152x152.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "180x180"  href = "../img/favicon/apple-icon-180x180.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "192x192"  href = "../img/favicon/android-icon-192x192.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "32x32"  href = "../img/favicon/favicon-32x32.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "96x96"  href = "../img/favicon/favicon-96x96.png" > 
    <link  rel = " manifest " href = "../img/favicon/manifest.json" > 
    <meta  name ="msapplication-TileColor"  content = "#ffffff" > 
    <meta  name = "msapplication-TileImage"  content = "../img/favicon/ms-icon-144x144.png" > 
    <meta  name = "theme-color"  content = "#ffffff" >
  </head>
  <body>
    <nav class="navbar navbar-dark bg-success navbar-expand-lg">
      <a class="navbar-brand" href="../index.php">
        <img src="../img/Logo.jpg" width="40" height="40" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Accedi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../reg.php">Registrati</a>
          </li>
        </ul>
      </div>
    </nav>

';

$basso2='
		<div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h1 class="text-success mb-4">Animal Crossing Database</h1> 
          <p class="font-weight-semibold">
            Qui potrai trovare un tuo spazio per salvare tutto quello che hai su <font class="text-success">Animal Crossing</font> New Horizons come i quadri che vende Volpolo e album di K.K. Slider in modo da ricordare quello che hai e non hai senza andare aventi e inditero per la tua isola. Potrai trovare tutorial e trucchi per i quadri di volpolo
          </p>
        </div>
        <div class="text-center col-sm-4">
          <img width="300" src="../img/logonh2.png">
        </div>        
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-10">
          <form method="post" action="reg.php">
              <input class="ACinput" type="text" id="username" placeholder="Username" name="username" required>
              <input class="ACinput" type="email" id="email" placeholder="Email" name="email" required>
              <input class="ACinput" type="password" id="password" placeholder="Password" name="password" required>
              <input class="ACinput" type="password" id="passwordconf" placeholder="Conferma Password" name="passwordconf" required><br><br>
              <p>Vuoi ricevere email su gli aggiornamenti del sito Animal Crossing Database? (opzionale)</p>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="news" id="news" value="0" checked>
                <label class="form-check-label" for="news">
                  No non voglio ricevere email
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="news" id="news" value="1">
                <label class="form-check-label" for="news">
                  Si voglio ricevere email
                </label>
              </div><br>
              
              <button type="submit" class="btn ACbottonesi" name="register">Registrati</button>
          </form>
        </div>
      </div>
    </div>

<footer>
    <div class="container">
      <hr>
        <p class="text-muted" aligne="centre">
          <em>
            Web site developed by Roby8martin <a href="https://github.com/roby8martin/Animal-Crossing-Museum-Database.git" target=”_blank”>github</a>
          </em> 
        </p>
      </hr>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery-min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>  
</html>
';


$okalto='
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ACbottoni.css">

    <title>ACDB</title>

    <!-- Favicon -->
    <link  rel = "apple-touch-icon"  dimensioni = "57x57"  href = "../img/favicon/apple-icon-57x57.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "60x60"  href = "../img/favicon/ apple -icon-60x60.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 72x72 "  href = "../img/favicon/apple-icon-72x72.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "76x76"  href = "../img/favicon/apple-icon-76x76.png" > 
    <link  rel = "apple-touch-icon "  dimensioni = " 114x114 "  href = "../img/favicon/apple-icon-114x114.png "> 
    <link  rel = "apple-touch-icon"  dimensioni = "120x120"  href = "../img/favicon/apple-icon-120x120.png" > 
    <link  rel = "apple-touch-icon"  dimensioni = "144x144"  href = "../img/favicon/apple-icon-144x144.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = " 152x152 "  href = "../img/favicon/apple-icon-152x152.png " > 
    <link  rel = " apple-touch-icon "  dimensioni = "180x180"  href = "../img/favicon/apple-icon-180x180.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "192x192"  href = "../img/favicon/android-icon-192x192.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "32x32"  href = "../img/favicon/favicon-32x32.png" > 
    <link  rel = "icon"  type = "image / png"  dimensioni = "96x96"  href = "../img/favicon/favicon-96x96.png" > 
    <link  rel = " manifest " href = "../img/favicon/manifest.json" > 
    <meta  name ="msapplication-TileColor"  content = "#ffffff" > 
    <meta  name = "msapplication-TileImage"  content = "../img/favicon/ms-icon-144x144.png" > 
    <meta  name = "theme-color"  content = "#ffffff" >
  </head>
  <body>
    <nav class="navbar navbar-dark bg-success navbar-expand-lg">
      <a class="navbar-brand" href="../index.php">
        <img src="../img/Logo.jpg" width="40" height="40" alt="Logo">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="../index.php">Accedi</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="../reg.php">Registrati</a>
          </li>
        </ul>
      </div>
    </nav>

';

$okbasso='
		    <div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-success">Animal Crossing Database</h1>
      <h2 class="text-success align="center"> La registrazione è andata a buon fine</h2>
      <div align="center"><img src="../img/tomnook.gif" alt="tom nook" width="700"></div> 
    </div>  
  </div>
</div>
<footer>
    <div class="container">
      <hr>
        <p class="text-muted" aligne="centre">
          <em>
            Web site developed by Roby8martin <a href="https://github.com/roby8martin/Animal-Crossing-Museum-Database.git" target=”_blank”>github</a>
          </em> 
        </p>
      </hr>
    </div>
  </footer>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="../js/jquery-min.js"></script>
  <script src="../js/bootstrap.min.js"></script>
  </body>  
</html>
';



?>