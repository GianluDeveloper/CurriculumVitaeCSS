<?php

define('SECURITY', true);
include 'dbHandling.php';

$databaseObj = new db();

if (isset($_GET['password']) && $_GET['password'] == SITEPASSWORD) {
    if (!isset($_REQUEST['competenza'])) { ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Aggiungi Competenza</title>
        </head>
        <body>
           <div>
                <form method="post" action="#" id="formCompetenze" onsubmit="return checkForm(this)">
                    <input type="text" placeholder="Nome competenza" name="competenza" id="competenza"/>
                    <input type="submit" name="submit" value="Invia"/>
                </form>
            </div>
            <div id="listaCompetenze">
                <div>Fai click su una competenza per eliminarla</div>
                <?php foreach (
                    $databaseObj->getAllRowsOf('competenze')
                    as $risultato
                ) { ?>
                    <button onclick="deleteRecord(this)" id="<?php echo $risultato[
                        'id'
                    ]; ?>">
                        <?php echo htmlentities($risultato['competenza']); ?>
                    </button>
                    <?php } ?>
            </div>
            <script>
                const deleteRecord = (e) =>{
                    fetch(`rimuoviCompetenza.php?password=<?php echo $_GET[
                        'password'
                    ]; ?>&id=${e.id}`).then(()=>{
                        e.innerText=`DELETED - ${e.innerText}`;
                    }).catch((err)=>alert(err))
                }
                let notImplemented =()=>{
                    alert('da implementare per i nuovi input dinamici. ricarico per permetterti di eliminare il record')
                    window.location.reload
                }
                const aggiungiBottone=(competenza)=>{
                    const newButton = document.createElement("button")
                    newButton.onclick=notImplemented
                    newButton.innerText = competenza
                    document.getElementById("listaCompetenze").appendChild(newButton)
                }
                const checkForm=(e)=>{
                    const competenzaEl = document.querySelector("#competenza")
                    const competenza = competenzaEl.value
                    const responseDiv = document.createElement("div")
                    fetch(`?password=<?php echo $_GET[
                        'password'
                    ]; ?>&competenza=${competenza}`).then((r)=>{
                        responseDiv.innerHTML="Aggiunta "+competenza;
                        e.appendChild(responseDiv)

                        aggiungiBottone(competenza)
                        competenzaEl.value=""
                    }).catch((e)=>{
                        responseDiv.innerHTML="ERRORE CON "+competenza;
                        e.appendChild(responseDiv)
                    })
                    return false;
                }
            </script>
        </body>
        </html>
        <?php } else {$competenzaEscaped = $databaseObj->escape(
            $_REQUEST['competenza']
        );
        if (
            $databaseObj->query(
                "INSERT INTO competenze (competenza) VALUES ('$competenzaEscaped');"
            )
        ) {
            echo 'Competenza inserita';
        } else {
            die('Errore inserimento');
        }}
} else {
     ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div text-align="center">
        Inserisci la password:
    <form method="GET" action="">
            <input type="password" name="password"/>
            <input type="submit" value="Submit"/>
    </form>
</body>
</html>

    <?php exit(0);
}
