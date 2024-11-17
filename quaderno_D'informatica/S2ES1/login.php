<html>
<head>
</head>
<body>
<h3>Controllo credentiali</h3>

<?php
// Recupera i valori inseriti nel form dal metodo POST
$usr=$_POST["username"];  // Salva il valore del campo username
$pwd=$_POST["password"];  // Salva il valore del campo password

// Controlla se le credenziali sono diverse da admin/password
if ($usr != "admin" && $pwd != "password"){
?>
    <!-- Se le credenziali sono sbagliate, mostra messaggio di errore -->
    <h4>Attenzione! Nome utente o passwd sbagliate.</br>
    Accesso negato </h4>
<?php
} else {
    // Se le credenziali sono corrette, mostra messaggio di benvenuto
    echo "<h4>Benvenuto" . $usr . " </h4>";
}
?>
</body>

<!-- Link per tornare alla home -->
<a href="index.html">
    <h3>home</h3>
</a>

<!-- Link per andare al selettore esercizi -->
<a href="slide2.html">
    <h3>selettore esercizio</h3>
</a>
</html>


