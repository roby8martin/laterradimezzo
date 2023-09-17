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

  $ip=$_POST['ip'];
  $nome=strtoupper($_POST['nome']);
  $tipo=$_POST['tipo'];
  $cat=strtoupper($_POST['categoria']);

  switch ($win_or_lin) {
    case 'win':
      //$ip = '192.168.1.170';
      exec("arp -a $ip", $output, $status);
      $mac1 = substr($output[0], 21, 20);
      if ($mac1 == 'oci ARP.') {
        $macad = "Errore MAC";
      } else {
        $mac = substr($output[3], 24, 20);
        $macad = str_replace ( "-", ":", $mac);
      }
    break;
  
    case 'lin':
      exec("arp -a $ip", $output, $status);
      $mac1 = substr($output[0], 21, 17);
      if ($mac1 == 'match found.') {
        $macad = "Errore MAC";
      } else {
        $mac = substr($output[0], 21, 17);
        $macad = str_replace ( "-", ":", $mac);
      }
    break;
    
    default:
      # code
    break;
  }
  //$catgrosso = strtoupper($cat);

  $sql='INSERT INTO `RETE` (`IP`, `MAC`, `NOMEPC`, `FOTO`, `CATEGORIA`, `TIPO`, `ATTIVO`, `NOTE`) VALUES ("'.$ip.'", "'.$macad.'", "'.$nome.'", "", "'.$cat.'", "'.$tipo.'", "1", "")';
  $result = mysqli_query($conn, $sql);
  header('location: index.php');


}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>