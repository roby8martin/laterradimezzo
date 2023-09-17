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

  $cat=$_GET['categoria'];
  $catgrosso = strtoupper($cat);

  $sql='SELECT * FROM `CATEGORIA` WHERE `CATEGORIA` = "'.$catgrosso.'"';
  $result = mysqli_query($conn, $sql);
  $row = mysqli_fetch_array($result);
  
  switch ($row['CATEGORIA']) {
    case '':
      $sql='INSERT INTO `CATEGORIA` (`CATEGORIA`, `FOTO`) VALUES ("'.$catgrosso.'", "")';
      $result = mysqli_query($conn, $sql);
      header('location: aggiungi.php?categoria='.$catgrosso.'');
    break;
    
    default:
      header('location: aggiungi.php?categoria='.$catgrosso.'');
    break;
  }


}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>