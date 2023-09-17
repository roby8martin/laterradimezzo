<?php
/*
function ping($host, $port, $timeout) 
{ 
  $tB = microtime(true); 
  $fP = fSockOpen($host, $port, $errno, $errstr, $timeout); 
  if (!$fP) { return "down"; } 
  $tA = microtime(true); 
  return round((($tA - $tB) * 1000), 0)." ms"; 
}
$test = ping("SERVER", 1, 1);


echo $test;

*/

/*
$ip = "ROBYNAS";
exec("ping -n 1 -w 1 -4 $ip", $output, $status);
if (substr($output[0], 0, 19) == 'Impossibile trovare') {
  echo 'Non trovo nessun dispositivo con il nome "'.$ip.'". Verificare il nome sia corretto e riprovare.';
}else{
  switch (substr($output[2], 0, 11)) {
    case 'Richiesta s':
      echo 'Il dispositivo è offiline.';
    break;

    case 'Risposta da':
      echo 'Il dispositivo è online.';
    break;
    
    default:
      echo 'Errore Generale contattare lo sviluppatore.';
    break;
  }
}

echo "<br>";
$ipping = explode(" ", $output[2]);
print_r(rtrim($ipping[2], ':'));
*/
/*
$ip = 'SERVER';
      exec("ping -n 1 -w 1 -4 $ip", $output, $status);
      if (substr($output[0], 0, 19) == 'Impossibile trovare') {
        $ipstato = 'Non trovo nessun dispositivo con il nome <b>"'.$ip.'"</b>. Verificare il nome sia corretto e riprovare.';
        $ipping2 = 'Vedi l\'errore';
      }else{
        switch (substr($output[2], 0, 11)) {
          case 'Richiesta s':
            $ipstato = 'OFFLINE';
          break;

          case 'Risposta da':
            $ipstato = 'ONLINE';
            $ipping = explode(" ", $output[2]);
            $ipping2 = rtrim($ipping[2], ':');
          break;
          
          default:
            $ipstato = 'Errore Generale contattare lo sviluppatore.';
          break;
        }
      }
echo $ipstato;
unset($output);
echo '<br>';*/
/*

### PER LINUX
$ip = 'SERVER';
      exec("ping -c 1 -4 $ip.local", $output, $status);
      switch (substr($output[1], 0, 11)) {
        case '':
          $ipstato = 'OFFLINE';
        break;

        case '64 bytes fr':
          $ipstato = 'ONLINE';
          $ipping = explode(" ", $output[1]);
          $ipping2 = rtrim($ipping[3], ':');
        break;
        
        default:
          $ipstato = 'Errore Generale contattare lo sviluppatore.';
        break;
        }
      echo $ipstato.'<br>';
      print_r ($ipping2);*/

      ###WIN MAC
      /*$ip = '192.168.1.170';
      exec("arp -a $ip", $output, $status);
      $mac1 = substr($output[0], 0, 30);
      if ($mac1 == 'Impossibile trovare voci ARP.') {
        $macad = "Errore MAC";
      } else {
        $mac = substr($output[3], 17, 28);
        $macad = str_replace ( "-", ":", $mac);
      }*/

      ###LIN MAC
      /*$ip = '192.168.1.170';
      exec("arp -a $ip", $output, $status);
      $mac1 = substr($output[0], 21, 17);
      if ($mac1 == 'match found.') {
        $macad = "Errore MAC";
      } else {
        $mac = substr($output[0], 21, 17);
        $macad = str_replace ( "-", ":", $mac);
      }
      
      echo $macad.'<br> <br> <br>';
      print_r ($mac1);*/

      ###WIN MAC
      /*$ip = '192.168.1.170';
      exec("arp -a $ip", $output, $status);
      $mac1 = substr($output[0], 21, 20);
      if ($mac1 == 'oci ARP.') {
        $macad = "Errore MAC";
      } else {
        $mac = substr($output[3], 21, 20);
        $macad = str_replace ( "-", ":", $mac);
      }
      
      echo $macad.'<br> <br> <br>';
      print_r ($mac1);*/

      ##SSH PHP
      require '../vendor/autoload.php';
      use phpseclib3\Net\SSH2;

      $ssh = new SSH2('192.168.1.170');
      if (!$ssh->login('roby', 'S202Tuni?2109')) {
          exit('Login Failed');
      }
      
      echo $ssh->exec('ls -l');

?>