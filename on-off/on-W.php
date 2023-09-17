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

  $mac = $_GET['mac'];
  $tes = exec("%USERPROFILE%\\Desktop\\xampp\\htdocs\\laterradimezzo\\on-off\\wol.exe $mac");
  echo $tes;

 // header('location: ../ping/index.php');
  

}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>