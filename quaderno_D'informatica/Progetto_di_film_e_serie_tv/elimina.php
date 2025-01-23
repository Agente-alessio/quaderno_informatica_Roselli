<?php
// Connessione al database
$db = new SQLite3('database.db');

// Verifica se l'ID è stato inviato
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
    // Recupera e sanitizza l'ID
    $id = intval($_POST['id']);

    // Prepara e esegui la query di eliminazione
    $query = "DELETE FROM content WHERE id = $id";
    $db->exec($query);
    $db->close();
}

// Redirect alla pagina principale
header('Location: index.php');
exit;