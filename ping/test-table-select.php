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

  
  
  $sql = 'SELECT * FROM categoria';

  if($result = $conn->query($sql)){
    $data = [];
    if($result->num_rows > 0){
      $data = [];
      while ($row = $result->fetch_array(MYSQLI_ASSOC)) {
        $tmp;
        $tmp['ID'] = $row['ID'];
        $tmp['CATEGORIA'] = $row['CATEGORIA'];
        $tmp['FOTO'] = $row['FOTO'];
        array_push($data, $tmp);
      }
      echo json_encode($data);
    }else{
      echo json_encode($data); #echo "No righe disponibili";
    }
  }else{
    echo "Errore".$conn->error;
  }


}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>