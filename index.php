<?php
  include 'sito/struttura.php';
  include 'mobile/Mobile_Detect.php';
?>
<!doctype html>
<html lang="it-IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#0d6efd">
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/dark-mode.css" rel="stylesheet">
    <link href="css/switch-darkmode.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/fa.min.css" rel="stylesheet">

    <!-- Favicon -->
    <?php echo $favicon1 ?>

    <title>La Terra Di Mezzo</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-success">
      <div class="container-fluid">
        <a class="navbar-brand mb-0 h1" href="index.php">La Terra Di Mezzo</a>
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
    
    <div class="container">
      <div class="row">
        <h1>La Terra Di Mezzo</h1>
        <div class="col-sm">
          <h4>Esegui il login</h4><br>
          <form method="post" action="sito/login.php">
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
          <?php
            $detect = new Mobile_Detect;
 
            // Any mobile device (phones or tablets).
            if ( $detect->isMobile() ) {
             echo '<br>';
            }
          ?>
          <img width="250" src="img/EBB-GIF.gif" alt="Gif logo">     
        </div>
      </div>
    </div>
    

    <!-- Footer -->
    <?php echo $footer; ?>
    <!-- Bootstrap JS -->
    <script src="js/bootstrap.js"></script>
    <!-- Switch-Dark-Mode Nascosoto -->
    <input type="checkbox" id="darkSwitch" hidden>
    <label for="darkSwitch" hidden>Night</label>
    <!-- Switch-Dark-Mode JS -->
    <script src="js/dark-mode-switch.min.js"></script>
  </body>
</html>