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
echo '<br>';

$ip = 'CIAO';
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
print_r ($output);
?>