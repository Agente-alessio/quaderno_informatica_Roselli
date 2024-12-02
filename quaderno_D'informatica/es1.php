<html> <!-- Apertura del tag HTML -->
<?php  // Apertura del tag PHP
echo'<table border="1">'; // Crea una tabella HTML con bordo di spessore 1
for($i=1; $i<11; $i++){ // Ciclo esterno che itera da 1 a 10
    echo "<tr>"; // Apre una nuova riga della tabella
        for ($j = 1; $j <= 10; $j++) { // Ciclo interno che itera da 1 a 10
             $m = $i * $j; // Calcola il prodotto tra i due numeri
             echo "<td>$m</td>"; // Stampa il risultato in una cella della tabella
     }
    echo "</tr>"; // Chiude la riga della tabella
}
echo"</table>"; // Chiude la tabella
?> <!-- Chiusura del tag PHP -->

<a href="index.html"> <!-- Link per tornare al sommario -->
<h3>Torna al sommario</h3> <!-- Testo del link formattato come titolo h3 -->
</a> <!-- Chiusura del tag anchor -->

<a href="esercizio1"> <!-- Link per tornare all'esercizio -->
    <h3>torna all'esercizio</h3> <!-- Testo del link formattato come titolo h3 -->
</a> <!-- Chiusura del tag anchor -->


</html> <!-- Chiusura del tag HTML -->