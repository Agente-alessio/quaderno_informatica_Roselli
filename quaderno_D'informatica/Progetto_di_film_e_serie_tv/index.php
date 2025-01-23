<!DOCTYPE html>
<html lang="it">
<head>
    <title>Film e Serie TV Tracker</title>
    
</head>
<body>
    <div>
        <h1>Film e Serie TV Tracker</h1>

        <!-- Form di inserimento -->
        <div>
            <form action="salva.php">
                <div>
                    <label>Titolo:</label>
                    <input type="text" name="title" required>
                </div>

                <div>
                    <label for="type">Tipo:</label>
                    <select name="type" required>
                        <option value="film">Film</option>
                        <option value="serie">Serie TV</option>
                    </select>
                </div>

                <div>
                    <label for="rating">Voto (1-10):</label>
                    <input type="number" name="rating" min="1" max="10" required>
                </div>

                <div>
                    <label for="status">Stato:</label>
                    <select id="status" name="status" required>
                        <option value="completed">Completato</option>
                        <option value="watching">In corso</option>
                        <option value="plan">Da vedere</option>
                    </select>
                </div>

                <div>
                    <label for="notes">Note:</label>
                    <textarea id="notes" name="notes"></textarea>
                </div>

                <button type="submit">Salva</button>
            </form>
        </div>

        <!-- Filtri -->
        <div>
            <button data-filter="all">Tutti</button>
            <button data-filter="film">Film</button>
            <button data-filter="serie">Serie TV</button>
        </div>

        <!-- Lista contenuti -->
        <div class="content-list">
            <?php
            // Connessione al database
            $db = new SQLite3('database.db');

            // Creazione tabella se non esiste
            $db->exec('CREATE TABLE IF NOT EXISTS content (
                id INTEGER PRIMARY KEY AUTOINCREMENT,
                title TEXT NOT NULL,
                type TEXT NOT NULL,
                rating INTEGER NOT NULL,
                status TEXT NOT NULL,
                notes TEXT,
                created_at DATETIME DEFAULT CURRENT_TIMESTAMP
            )');

            // Recupero contenuti
            $results = $db->query('SELECT * FROM content ORDER BY created_at DESC');

            while ($row = $results->fetchArray(SQLITE3_ASSOC)) {
                echo '<div class="content-card" data-type="' . $row['type'] . '">';
                echo '<h3>' . htmlspecialchars($row['title']) . '</h3>';
                echo '<p>Tipo: ' . ucfirst($row['type']) . '</p>';
                echo '<p class="rating">Voto: ' . $row['rating'] . '/10</p>';
                echo '<p>Stato: ' . ucfirst($row['status']) . '</p>';
                if ($row['notes']) {
                    echo '<p>Note: ' . htmlspecialchars($row['notes']) . '</p>';
                }
                echo '<form action="delete.php" method="POST">';
                echo '<input type="hidden" name="id" value="' . $row['id'] . '">';
                echo '<button type="submit" class="delete-btn">Elimina</button>';
                echo '</form>';
                echo '</div>';
            }

            $db->close();
            ?>
        </div>
    </div>
</body>
</html>