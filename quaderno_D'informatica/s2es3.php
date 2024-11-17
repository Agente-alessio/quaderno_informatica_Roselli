<!-- Inizio del documento HTML -->
<html>

<!-- Inizio del form per l'input dell'utente -->
<form method = 'POST'>
    <!-- Etichetta per il campo di input -->
    <label for="numero">inserisci un numero:</label>
    <!-- Campo di input numerico con lista di suggerimenti -->
    <input type="number" id="numero" name="numero" list="numero-list">
    
    <!-- Lista di valori predefiniti per l'input -->
    <datalist id="numero-list">
        <!-- Opzioni disponibili da 1 a 7 -->
        <option value="1">
        <option value="2">
        <option value="3">
        <option value="4">
        <option value="5">
        <option value="6">
        <option value="7">
    </datalist>
    
    <!-- Pulsante per inviare il form -->
    <input name="submit" type= "submit" value="invia" />
</form>

<?php
// Verifica se il form è stato inviato
if($_SERVER['REQUEST_METHOD'] == 'POST'){

    // Recupera il numero inserito dall'utente
    $numero = $_POST['numero'];

    // Crea una tabella con bordo
    echo'<table border="1">';
    
    // Ciclo esterno che itera da 1 fino al numero inserito
    for($i=1; $i<=$numero; $i++){
        // Crea una riga della tabella con il numero corrente
        echo "<tr>$i";
        
        // Ciclo per la prima colonna (esegue solo una volta)
        for ($j = 1; $j <= 1; $j++) {
            // Calcola il quadrato del numero
            $m = $numero * $numero;
            // Aggiunge una cella con il quadrato
            echo "<td>$m</td>";
     
            // Ciclo per la seconda colonna (esegue solo una volta)
            for ($n = 1; $n <= 1; $n++) {
                // Calcola il cubo del numero
                $l = $numero * $numero * $numero;
                // Aggiunge una cella con il cubo
                echo "<td>$l</td>";
            }
        }
    }
    // Chiude la riga della tabella
    echo "</tr>";
}
?>

<!-- Link per tornare alla home -->
<a href="index.html">
    <h3>home</h3>
</a>

<!-- Link per andare al selettore esercizi -->
<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>  

</html>