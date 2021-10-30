<?php
	session_start();
	include '../dbconfig.php';
  include 'struttura.php';
	include 'error.php';

	if (isset($_SESSION['session_id'])) {
  $session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
  $session_id = htmlspecialchars($_SESSION['session_id']);
  

  $sqlban= 'SELECT `USERNAME`, `BAN`, `MOTIVOBAN` FROM `USERS` WHERE `USERNAME` = "'.$session_user.'"';
  $resultban = mysqli_query($conn, $sqlban);
	$rowban = mysqli_fetch_array($resultban);
	session_regenerate_id();
  $_SESSION['ban'] = $rowban['BAN'];
	
		if ($rowban['BAN'] == '1') {
			echo '
      <!doctype html>
      <html lang="it-IT">
        <head>
          <!-- Required meta tags -->
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1">

          <!-- Bootstrap CSS -->
          <link href="../css/bootstrap.css" rel="stylesheet">
          <!-- Font Awesome -->
          <link href="../css/fa.min.css" rel="stylesheet">

          <!-- Favicon -->
          '.$favicon2.'

          <title>Email Backup Byter</title>
        </head>
        <body>
          <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <div class="container-fluid">
              <a class="navbar-brand mb-0 h1" href="index.php">Email Backup Byter</a>
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
              <div class="col-12">
                <h1>Email Backup Byter</h1>
                <h2 class="text-danger" align="center">'.$session_user.' sei stato bannato dal sito</h2>
                <p align="center">Motivo Ban: '.utf8_encode($rowban['MOTIVOBAN']).'</p>
                <div align="center"><img src="../img/BAN-EBB-GIF.gif" alt="Gif logo ban" width="200"></div>
              </div>
            </div>
          </div>

          <!-- Footer -->
          <?php echo $footer; ?>
          <!-- Bootstrap JS -->
          <script src="js/bootstrap.js"></script>
      
        </body>
      </html>
';
exit;
		} else {
			header('location: index.php');
		}
	} else{echo $errore3;}		
?>