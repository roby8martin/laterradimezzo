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
            <h3>Stai creando un nuovo dispositivo per <?php echo $_GET['categoria']?></h3>
            <a href=".\" class="btn btn-outline-danger">Torna indietro <i class="fas fa-chevron-left"></i></a>
            <br>
            <br>
        </div>  
        
        <div class="col-sm-4">
        
        </div>
        
        <form method="post" action="aggok.php">
          <div class="col-sm-4">
            <h5>IP Dispositivo che deve avere</h5>
            <div class="input-group mb-3">
              <input class="form-control" type="text" id="ip" name="ip" placeholder="IP Dispositivo (Es. 192.168.1.1)"  required>
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-network-wired"></i></span><br>
            </div>
            <h5>Nome</h5>
            <div class="input-group mb-3">
              <input class="form-control" type="nome" id="nome" placeholder="Nome dispositivo (Es. SERVER)" name="nome" required>
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-key"></i></span><br>
            </div>

            <h5>Tipologia</h5>
            <div class="input-group mb-3">
              <input class="form-control" type="text" id="tipo" name="tipo" placeholder="Tipologia (Es. PC, NAS, SERVER, ESXi)"  required>
              <span class="input-group-text" id="basic-addon1"><i class="fas fa-server"></i></span><br>
            </div>


            <div class="input-group mb-3">
              <input class="form-control" type="text" id="categoria" name="categoria" placeholder="Categoria" value="<?php echo $_GET['categoria']?>" hidden required>
            </div>
          </div>
          <button type="submit" class="btn btn-outline-success">Aggiungi dispositivo <i class="fas fa-plus"></i> <i class="fas fa-server"></i></button>
        </form>

        </div>

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