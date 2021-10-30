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
?>
  <?php echo $settings ?>  
    <div class="container">
      <div class="row">
        <div class="col-sm-10">
          <h1 class="mb-3">Email Backup Byter</h1> 
          <h2> Ciao <?php echo $session_user?> 👋 </h2>
          <?php if ($session_user_admin == 1){echo '<h4>Privilegi admin attivi</h4> <br>';}else{echo '';}?>
          <h2>Aggiungi un utente Email Backup Byter </h2>
          <a href="utenti.php" class="btn btn-outline-primary">Torna nella lista utenti <i class="fas fa-chevron-left"></i></a><br><br>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="row">
        <div class="col-sm">
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
        <div class="col-sm">

        </div>
        <div class="col-sm">

        </div>
      </div>
    </div>



   <!-- Footer -->
   <?php echo $footer ?>
    <!-- Bootstrap JS -->
    <script src="../js/bootstrap.bundle.js"></script>
    <script>
      var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'))
      var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl)
      })
    </script>
  </body>
</html>

<?php
}else{header('location: matipare.php');}
}else{header('location: ../sito/ban.php');}
}else{header('location: ../sito/ban.php');}
}else{echo $errore3;}
?>
