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
	$session_id = htmlspecialchars($_SESSION['session_id']);
?>
  <?php echo $ping ?>  
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="mb-3">La Terra Di Mezzo</h1> 
            <a href="aggiungi.php" class="btn btn-outline-primary">Aggiungi dispositivo <i class="fas fa-plus"></i> <i class="fas fa-server"></i></a>
            <br>
        </div>
        <div id="ping"></div>
      </div>
    </div>

    <!-- Footer -->
    <?php echo $footer ?>
    <script src="../js/jquery.min.js"></script>
    <script>
      setInterval(function(){
        $('#ping').load("pinglive.php").fadeIn("slow")
      } , 1000);
    </script>
  </body>
</html>

<?php
}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>