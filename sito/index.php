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
          <p class="font-weight-semibold">
            Ogni <b>Lunedì</b> di ogni settimana devi controllare nella email <b class="text-primary">backup@byter.it</b> tutti i backup dei clienti.<br>
            Se durante una settima un backup qualsiasi di un cliente ha un problema. Avverire il reparto gestione che avvertirà il cliente.<br>
            Una volta compltato il controllo ogni mese inviare una email al cliente se è tutto a posto o meno.
          </p>
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