<?php
require '../vendor/autoload.php';
use phpseclib3\Net\SSH2;
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
include '../sito/navbar.php';
	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
	$session_id = htmlspecialchars($_SESSION['session_id']);
  
  
?>
  <?php echo $device; ?>  
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="mb-3">La Terra Di Mezzo</h1> 
            <a href="aggiungi.php" class="btn btn-outline-primary">Aggiungi dispositivo <i class="fas fa-plus"></i> <i class="fas fa-server"></i></a>
            <br>
        </div>
        <?php
          $ssh = new SSH2('192.168.1.113');
          if (!$ssh->login('roberto', 'a')) {
              exit('Login Failed');
          }
          
          echo $ssh->exec('ls -l');
        ?>
      </div>
    </div>

    <!-- Footer -->
    <?php echo $footer ?>
    <script src="../js/jquery.min.js"></script>
  </body>
</html>

<?php
}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>