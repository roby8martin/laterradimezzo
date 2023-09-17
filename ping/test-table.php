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

  echo $ping;
    
?>

<div id="tabella-container"></div>




<script>
  let persone;

  fetch('test-table-select.php', {
    method: 'POST',
    header: {
      'Content-Type': 'application/json'
    }
  })
  .then(response => response.json())
  .then(data => {
    persone = data;
    console.log('Dati Ricevuti: ', data);
    let tabella = `
    <table>
      <thead>
        <tr>
          <button id="nuova-riga">Nuova Riga</button>
        </tr>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Cognome</td>
          <td>Email</td>
        </tr>
      </thead>
      <tbody>
        ${generaRighe(data)}
      </tbody>
    </table>
    `;
    let tabellaContainer = document.querySelector("#tabella-container");
    tabellaContainer.insertAdjacentHTML('beforeend', tabella);
  })

  .catch((error) => {
    console.error('Errore: ', error);
  });

  function generaRighe(persone){
    let righe = '';
    data.forEach(persona => {
      let riga = `
        <tr>
          <td>${persona.ID}</td>
          <td>${persona.CATEGORIA}</td>
          <td>${persona.FOTO}</td>
          <td></td>
          <td>
            <button class="></button>
            <button></button>
          <td>
        </tr>
      `;

      righe += riga;
    });
    return righe;
  }
</script>

<?php
}else{header('location: ban.php');}
}else{header('location: ban.php');}
}else{echo $errore3;}
?>