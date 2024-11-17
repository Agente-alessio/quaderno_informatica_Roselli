<!-- Apertura del documento HTML -->
<html>

<!-- Inizio del codice PHP -->
<?php
// Dichiarazione della variabile nome con valore "alessio"
$nome="alessio";
// Creazione di un nuovo oggetto DateTime con il fuso orario di Roma
$today = new DateTime("now", new DateTimeZone('Europe/Rome'));
// Stampa l'ora corrente nel formato ore:minuti:secondi
echo $today->format('H:i:s');
// Estrae solo l'ora dall'oggetto DateTime
$ora = $today->format('H');

// Controlla se l'ora è tra le 8 e le 13
if ($ora >= 8 && $ora < 13) {
    // Stampa il messaggio di buongiorno
    echo "\nBuongiorno $nome, sono le ore $ora";
// Controlla se l'ora è tra le 13 e le 21
} elseif ($ora >= 13 && $ora < 21) {
    // Stampa il messaggio di buonasera
    echo "\nBuonasera $nome, sono le ore $ora";
// Controlla se l'ora è dopo le 21 o prima delle 7
} elseif ($ora >= 21 || $ora < 7) {
    // Stampa il messaggio di buonanotte
    echo "\nBuonanotte $nome, sono le ore $ora";
}

// Spazio vuoto           
?>
<!-- Link per tornare al sommario -->
<a href="index.html">
<h3>Torna al sommario</h3>
</a>

<!-- Link per tornare all'esercizio precedente -->
<a href="esercizio1">
    <h3>torna all'esercizio</h3>
</a>

<!-- Chiusura del documento HTML -->
</html>