<?php
session_start();
include '../sito/error.php';
include '../sito/struttura.php';
include '../sito/controlloban.php';
if (isset($_SESSION['session_id'])) {
if (isset($_SESSION['ban'])) {
if ($rowban['BAN'] === '0') {
	$session_user = htmlspecialchars($_SESSION['session_user'], ENT_QUOTES, 'UTF-8');
	$session_id = htmlspecialchars($_SESSION['session_id']);

  echo "<br>";
  $sql2='SELECT * FROM `CATEGORIA`';
  $result2 = mysqli_query($conn, $sql2);
  while($row2 = mysqli_fetch_array($result2)){
    echo '<h3>'.$row2['CATEGORIA'].'</h3> <hr style="border: 2px solid; border-radius: 2px;">';

  $sql='SELECT * FROM `RETE` WHERE `CATEGORIA` = "'.$row2['CATEGORIA'].'" ORDER BY `IP` ASC';
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){  
    echo '
    <div class="table-responsive">
    <table class="table">
      <thead>
        <tr>
          <th>NOME DISPOSITIVO</th>
          <th>STATO</th>
          <th>IP CHE DEVE AVERE</th>
          <th>IP CHE HA</th>
        </tr>
      </thead>'; 
	while($row = mysqli_fetch_array($result)){
    $ip = $row['NOMEPC'];
      exec("ping -n 1 -w 1 -4 $ip", $output, $status);
      if (substr($output[0], 0, 19) == 'Impossibile trovare') {
        $ipstato = '<b class="text-danger">OFFLINE</b>';
        $ipping2 = '<a href="https://www.youtube.com/watch?v=iZwJSOAiLkg">STO PENSANDO...</a>';
      }else{
        switch (substr($output[2], 0, 11)) {
          case 'Richiesta s':
            $ipstato = '<b class="text-danger">OFFLINE</b>';
          break;

          case 'Risposta da':
            $ipstato = '<b class="text-success">ONLINE</b>';
            $ipping = explode(" ", $output[2]);
            $ipping2 = rtrim($ipping[2], ':');
            if ($ipping2 == $row['IP']) {
              $ipping2 = '<b class="text-success">'.$ipping2.'</b>';
            }else{
              $ipping2 = '<b class="text-danger">'.$ipping2.'</b>';
            }
          break;
          
          default:
            $ipstato = 'Errore Generale contattare lo sviluppatore.';
          break;
        }
      }
    echo "
    <tr>
      <td>".$row['NOMEPC']."</td>
      <td>".$ipstato."</td>
      <td>".$row['IP']."</td>  
      <td>".$ipping2."</td>";
      unset($output);
    echo "</tr>";
  }
  echo "</table>
  </div>";

  mysqli_free_result($result);
  } else{
    echo "<br>NESSUN DISPOSTIVO È INSERITO";
  }echo '<br>';
}

}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>