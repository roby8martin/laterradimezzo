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

  $catedit=$_POST['catedit'];
  $cat=$_POST['cat'];
  $catgrosso = strtoupper($cat);
  $cateditgrosso = strtoupper($catedit);

  $sql='UPDATE `CATEGORIA` SET `CATEGORIA` = "'.$cateditgrosso.'" WHERE `CATEGORIA`.`CATEGORIA` = "'.$catgrosso.'"';
  $sql2='UPDATE `RETE` SET `CATEGORIA` = "'.$cateditgrosso.'" WHERE `RETE`.`CATEGORIA` = "'.$catgrosso.'"';

  $result = mysqli_query($conn, $sql);
  $result2 = mysqli_query($conn, $sql2);

  echo $sql;
  echo $sql2;
  header('location: index.php');
  

}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>