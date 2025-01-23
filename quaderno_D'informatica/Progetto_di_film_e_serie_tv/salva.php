<?php
// Connessione al database
$db = new SQLite3('database.db');

// Verifica se il form è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera e sanitizza i dati
    $title = SQLite3::escapeString($_POST['title']);
    $type = SQLite3::escapeString($_POST['type']);
    $rating = intval($_POST['rating']);
    $status = SQLite3::escapeString($_POST['status']);
    $notes = SQLite3::escapeString($_POST['notes']);

    // Prepara e esegui la query
    $query = "INSERT INTO content (title, type, rating, status, notes) 
              VALUES ('$title', '$type', $rating, '$status', '$notes')";
    
    $db->exec($query);
    $db->close();
}

// Redirect alla pagina principale
header('Location: index.php');
exit;