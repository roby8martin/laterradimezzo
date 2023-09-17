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
            <a href=".\" class="btn btn-outline-danger">Torna indietro <i class="fas fa-chevron-left"></i></a>
            <br>
            <br>
        </div>

        <div class="col-sm-4">
        </div>

        <?php
          $sql2='SELECT * FROM `CATEGORIA`';
          $result2 = mysqli_query($conn, $sql2);
          echo'
          <div class="col-sm-4">
            <form method="get" action="catok.php">
              <h5>Categoria dispositivo</h5>
              <input class="form-control" list="Categoria" name="categoria" id="categoria" placeholder="Seleziona una categoria o creane una nuova" required>
              <datalist id="Categoria">';
              while($row2 = mysqli_fetch_array($result2)){
                echo '<option value="'.$row2['CATEGORIA'].'">';
              }
              echo'</datalist>';
        ?>
              <br>        
              <button type="submit" class="btn btn-outline-success">Avanti <i class="fas fa-chevron-right"></i></button>
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