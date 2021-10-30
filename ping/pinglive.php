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

  $sql='SELECT * FROM `RETE` ORDER BY `IP` ASC';
  $result = mysqli_query($conn, $sql);

  if(mysqli_num_rows($result) > 0){  
    echo "<table class='table'>";
      echo "<thead>";
        echo "<tr>";
          echo "<th>NOME DISPOSITIVO</th>";
          echo "<th>STATO</th>";
          echo "<th>IP CHE DEVE AVERE</th>";
          echo "<th>IP CHE HA</th>";
        echo "</tr>";
      echo "</thead>"; 
	while($row = mysqli_fetch_array($result)){
    $ip = $row['IP'];
    $ping = exec("ping -n 1 $ip",$output,$stato);
    if ($stato==0 ) {
      $ipstato = 'ACCESO';
    }else{
      $ipstato = 'SPENTO';
    }
      echo "<tr>";
        echo "<td>".$row['NOMEPC']."</td>";
        echo "<td>".$ipstato."</td>";
        echo "<td>".$row['IP']."</td>";  
        echo "<td>".$row['IP']."</td>";
	    echo "</tr>";
  }
  echo "</table>";

  mysqli_free_result($result);
  } else{
    echo "NESSUN DISPOSTIVO È INSERITO";
  }
}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>