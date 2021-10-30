<?php
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
include '../sito/navbar.php';

	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
  $session_user_admin = htmlspecialchars($_SESSION['session_user_admin']);
	$session_id = htmlspecialchars($_SESSION['session_id']);

  if ($session_user_admin == '1') {
  $error = $_GET['error']
?>
  <?php echo $settings ?> 
  <?php
    switch ($error) {
      case '4':
        echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>!!ATTENZIONE!!</strong> Compila tutti i campi.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;

      case '5':
        echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>!!ATTENZIONE!!</strong> L&#39username non è valido. Sono ammessi solamente caratteri alfanumerici e l&#39underscore. Lunghezza minina 3 caratteri. Lunghezza massima 20 caratteri.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;

      case '6':
        echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>!!ATTENZIONE!!</strong> Lunghezza minima password 8 caratteri lunghezza massima password 20 caratteri.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;

      case '7':
        echo'
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>!!ATTENZIONE!!</strong> Username già in uso prova un altro username😉.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;

      case '10':
        echo'
          <div class="alert alert-info alert-dismissible fade show" role="alert">
            <strong>!!ATTENZIONE!!</strong> Le password non combaciano🤷‍♂️ riprova.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;

      case 'ok':
        echo'
          <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>!!REGISTRAZIONE EFFETUATA CON SUCCESSO!!</strong></a>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;
      
      default:
        echo'
          <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>!!CIAO!!</strong> Cosa stai cercando 😊.
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        ';
      break;
    }
  ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h1 class="mb-3">La Terra Di Mezzo</h1> 
          <h2> Ciao <?php echo $session_user?> 👋 </h2>
          <?php if ($session_user_admin == 1){echo '<h4>Privilegi admin attivi</h4>';}else{echo '';}?>
          <h2>Aggiungi un utente La Terra Di Mezzo </h2> 
          <a href="utenti.php" class="btn btn-outline-primary">Torna nella lista utenti <i class="fas fa-chevron-left"></i></a><br>
          <br>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-3">
          <form method="post" action="../sito/reg.php">
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
            <label>Conferma password</label>
            <div class="input-group mb-3">
              <input class="form-control" type="password" id="passwordconf" placeholder="Conferma Password" name="passwordconf" required>
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
            </div>
              <button type="submit" class="btn btn-outline-primary" name="login">Registra utente <i class="fas fa-user-plus"></i></button>
          </form>
        </div>
      </div>
    </div>



   <!-- Footer -->
   <?php echo $footer ?>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.js"></script>
  </body>
</html>

<?php
}else{header('location: matipare.php');}
}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{echo $errore3;}
?>
