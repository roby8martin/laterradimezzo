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
        <div class="col-sm-12">
          <h1 class="mb-3">La Terra Di Mezzo</h1> 
        
          <h2> Ciao <?php echo $session_user;?> 👋 </h2>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="row">
        
          <?php 
            $sql='SELECT * FROM `CATEGORIA`';
            $result = mysqli_query($conn, $sql);
            while($row = mysqli_fetch_array($result)){
              echo'
                <div class="col-sm-3">
                  <div class="card text-white bg-success mb-3" style="max-width: 18rem;">
                    <img src="'.$row['FOTO'].'" class="card-img-top" alt="'.$row['CATEGORIA'].'">
                    <div class="card-body">
                      <h5 class="card-title text-center">'.$row['CATEGORIA'].'</h5>
                      <div class="text-center">
                        <a href="../on/index.php?categoria='.$row['CATEGORIA'].'" class="btn btn-outline-light">Accendi / Spegni <br> <i class="fas fa-power-off"></i></a>
                      </div>
                    </div>
                  </div>
                </div>
              ';
            }
          ?>

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