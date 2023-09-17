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
            <a href=".\" class="btn btn-outline-success">Torna indietro <i class="fas fa-chevron-left"></i></a>
            <br>
            <br>
        </div>

        <div class="col-sm-4">
        </div>

        <div class="col-sm-12">
        
        <?php
          $disp=$_GET['disp'];

          $sql2='SELECT * FROM `RETE` WHERE ID = "'.$disp.'"';
          $result2 = mysqli_query($conn, $sql2);

          echo'
          <div class="text-center">
            <h1 class="text-danger">!!ATTENZIONE!!</h1>
            <h4 class="text-danger">Stai per eliminare il seguente dispositivo:</h4>
            ';
            while($row2 = mysqli_fetch_array($result2)){
              echo '<h1><i class="fas fa-circle fa-xs"></i> '.$row2['NOMEPC'].'</h1>';
            }
            
          echo'
            <br>
            <h2>UNA VOLTA ELIMINIATO BISOGNA RIAGGIUNGERLO MANULAMENTE DINUOVO</h2>
            <h1 class="text-danger">SEI SICURO DI VOLER PROCEDERE??</h1>
          </div>
          ';
        ?>
        <br>
        <a href="deldispok.php?disp=<?php echo $disp?>" class="btn btn-outline-danger">Ok gho capio 😒 scansea pure <i class="fas fa-trash"></i></a>
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