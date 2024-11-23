<?php
// Connessione al database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "my_database";

// Creazione connessione
$conn = new mysqli($servername, $username, $password, $dbname);

// Controllo connessione
if ($conn->connect_error) {
    die("Connessione fallita: " . $conn->connect_error);
}

// Recupero dei dati dal form
$name = $_POST['name']; // Il nome del campo nel form
$email = $_POST['email'];

// Verifica di sicurezza (evitare SQL Injection)
$name = $conn->real_escape_string($name);
$email = $conn->real_escape_string($email);

// Query SQL per inserire i dati
$sql = "INSERT INTO users (nome, email) VALUES ('$name', '$email')";

// Esecuzione della query
if ($conn->query($sql) === TRUE) {
    echo "Dati salvati con successo!";
} else {
    echo "Errore: " . $sql . "<br>" . $conn->error;
}

// Chiudere la connessione
$conn->close();
?>