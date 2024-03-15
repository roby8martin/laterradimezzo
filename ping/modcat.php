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

  $cat=$_GET['cat'];
  $sql2='SELECT * FROM `RETE` WHERE CATEGORIA = "'.$cat.'"';
  $result2 = mysqli_query($conn, $sql2);
?>
  <?php echo $ping ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-8">
          <h1 class="mb-3">La Terra Di Mezzo</h1> 
            <a href=".\" class="btn btn-outline-success">Torna indietro <i class="fas fa-chevron-left"></i></a>
            <br>
            <br>
        </div>

        <div class="col-sm-4">
          
        </div>

        <div class="col-sm-12">
        <?php
          echo'
            <h1 class="text-light">Stai modificando il nome della categoria '.$cat.'</h1>
          '
          ?>
        </div>

        <div class="col-sm-4">
        <?php
          echo'
            <br>
            <h4>Nome categoria</h4><br>
            <form method="post" action="modcatok.php">
              <label>Nome categoria</label>
              <div class="input-group mb-3">
                <input class="form-control" type="text" id="catedit" value="'.$cat.'" placeholder="Nome categoria" name="catedit" required>
                <span class="input-group-text" id="basic-addon1"><i class="fas fa-user"></i></span><br>
              </div>
              <input hidden type="text" id="cat" value="'.$cat.'" placeholder="Nome categoria" name="cat" required>
              <button type="submit" class="btn btn-outline-primary" name="login">Modifica</button>
            </form>
          ';
        ?>
        <br>
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