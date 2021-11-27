<?php
session_start();
include 'error.php';
include 'struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
include 'navbar.php';

	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
	$session_id = htmlspecialchars($_SESSION['session_id']);

?>
  <?php echo $index ?>  
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="mb-3">La Terra Di Mezzo</h1> 
        
          <h2> Ciao <?php echo $session_user;?> 👋 </h2>

          <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
            <img src="../img/icone/master.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Master</h5>
              <a href="#" class="btn btn-success">Vedi dispositivi <i class="fas fa-find"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- Footer -->
    <?php echo $footer ?>
    
  </body>
</html>

<?php
}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>