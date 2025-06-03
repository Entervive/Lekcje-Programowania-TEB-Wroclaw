<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Zarządzanie bazą danych</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 20px; background-color: #f4f4f4; }
        .container { max-width: 1400px; margin: auto; background: white; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0,0,0,0.1); }
        h1 { color: #333; }
        .nav { margin-bottom: 20px; }
        .nav a { margin-right: 10px; text-decoration: none; color: #007BFF; }
        .nav a:hover { text-decoration: underline; }
        .table-section { margin-bottom: 40px; }
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f2f2f2; }
        .action-buttons { margin-top: 10px; }
        .action-buttons button { margin-right: 10px; padding: 5px 10px; }
        .form-section { display: none; margin-top: 20px; }
        .form-section.active { display: block; }
        input[type="text"], input[type="number"], textarea { width: 100%; padding: 8px; margin: 5px 0; border: 1px solid #ddd; border-radius: 4px; }
        input[type="submit"] { background-color: #4CAF50; color: white; padding: 10px 15px; border: none; border-radius: 4px; cursor: pointer; }
        input[type="submit"]:hover { background-color: #45a049; }
        .message { color: green; margin: 10px 0; }
        .error { color: red; margin: 10px 0; }
        .sql-query { margin-top: 40px; }
        .sql-query textarea { width: 100%; height: 100px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Zarządzanie bazą danych</h1>

        <?php
        include 'db_connection.php';

        // Lista tabel
        $tables = ['users', 'categories', 'suppliers', 'products', 'orders', 'reviews'];

        // Wybrana tabela (domyślnie 'users')
        $selected_table = isset($_GET['table']) ? $_GET['table'] : 'users';

        // Sprawdzenie, czy tabela istnieje
        if (!in_array($selected_table, $tables)) {
            $selected_table = 'users';
        }

        // Funkcja do wyświetlania wiadomości
        function showMessage($message, $type = 'message') {
            echo "<div class='$type'>$message</div>";
        }

        // Obsługa operacji CRUD
        if (isset($_POST['action']) && isset($_POST['table'])) {
            $table = $_POST['table'];
            $action = $_POST['action'];

            if ($action == 'create') {
                // Pobranie kolumn tabeli
                $columns_result = $conn->query("SHOW COLUMNS FROM $table");
                $columns = [];
                while ($col = $columns_result->fetch_assoc()) {
                    if ($col['Field'] != 'id' && $col['Field'] != 'created_at' && $col['Field'] != 'order_date' && $col['Field'] != 'review_date') {
                        $columns[] = $col['Field'];
                    }
                }

                // Przygotowanie zapytania INSERT
                $fields = implode(', ', $columns);
                $placeholders = implode(', ', array_fill(0, count($columns), '?'));
                $stmt = $conn->prepare("INSERT INTO $table ($fields) VALUES ($placeholders)");

                // Pobranie i powiązanie parametrów
                $params = [];
                $types = '';
                foreach ($columns as $col) {
                    $params[] = $_POST[$col];
                    $types .= 's'; // Zakładam, że wszystkie pola to stringi dla uproszczenia
                }
                $stmt->bind_param($types, ...$params);

                if ($stmt->execute()) {
                    showMessage("Nowy rekord dodany do tabeli $table");
                } else {
                    showMessage("Błąd: " . $stmt->error, 'error');
                }
                $stmt->close();
            } elseif ($action == 'update') {
                $id = $_POST['id'];
                // Pobranie kolumn tabeli
                $columns_result = $conn->query("SHOW COLUMNS FROM $table");
                $columns = [];
                while ($col = $columns_result->fetch_assoc()) {
                    if ($col['Field'] != 'id' && $col['Field'] != 'created_at' && $col['Field'] != 'order_date' && $col['Field'] != 'review_date') {
                        $columns[] = $col['Field'];
                    }
                }

                // Przygotowanie zapytania UPDATE
                $set_clause = implode(', ', array_map(fn($col) => "$col=?", $columns));
                $stmt = $conn->prepare("UPDATE $table SET $set_clause WHERE id=?");

                // Pobranie i powiązanie parametrów
                $params = [];
                $types = '';
                foreach ($columns as $col) {
                    $params[] = $_POST[$col];
                    $types .= 's'; // Zakładam, że wszystkie pola to stringi dla uproszczenia
                }
                $params[] = $id;
                $types .= 'i'; // id jest integerem
                $stmt->bind_param($types, ...$params);

                if ($stmt->execute()) {
                    showMessage("Rekord zaktualizowany w tabeli $table");
                } else {
                    showMessage("Błąd: " . $stmt->error, 'error');
                }
                $stmt->close();
            } elseif ($action == 'delete') {
                $id = $_POST['id'];
                $stmt = $conn->prepare("DELETE FROM $table WHERE id=?");
                $stmt->bind_param("i", $id);
                if ($stmt->execute()) {
                    showMessage("Rekord usunięty z tabeli $table");
                } else {
                    showMessage("Błąd: " . $stmt->error, 'error');
                }
                $stmt->close();
            }
        }

        // Obsługa własnego zapytania SQL
        if (isset($_POST['execute_sql'])) {
            $sql_query = $_POST['sql_query'];
            // Ograniczenie do SELECT dla bezpieczeństwa
            if (stripos(trim($sql_query), 'SELECT') === 0) {
                $result = $conn->query($sql_query);
                if ($result) {
                    showMessage("Zapytanie wykonane pomyślnie");
                    // Wyświetlenie wyników
                    echo "<h3>Wyniki zapytania:</h3>";
                    echo "<table>";
                    $first_row = true;
                    while ($row = $result->fetch_assoc()) {
                        if ($first_row) {
                            echo "<tr>";
                            foreach ($row as $key => $value) {
                                echo "<th>$key</th>";
                            }
                            echo "</tr>";
                            $first_row = false;
                        }
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>$value</td>";
                        }
                        echo "</tr>";
                    }
                    echo "</table>";
                } else {
                    showMessage("Błąd w zapytaniu: " . $conn->error, 'error');
                }
            } else {
                showMessage("Tylko zapytania SELECT są dozwolone", 'error');
            }
        }
        ?>

        <!-- Menu nawigacyjne -->
        <div class="nav">
            <?php foreach ($tables as $table): ?>
                <a href="?table=<?= $table ?>"><?= ucfirst($table) ?></a>
            <?php endforeach; ?>
        </div>

        <!-- Sekcja wybranej tabeli -->
        <div class="table-section">
            <h2><?= ucfirst($selected_table) ?></h2>
            <table>
                <tr>
                    <?php
                    // Pobranie kolumn tabeli
                    $columns_result = $conn->query("SHOW COLUMNS FROM $selected_table");
                    while ($col = $columns_result->fetch_assoc()) {
                        echo "<th>" . $col['Field'] . "</th>";
                    }
                    ?>
                </tr>
                <?php
                // Pobranie danych z tabeli
                $sql = "SELECT * FROM $selected_table";
                $result = $conn->query($sql);
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $value) {
                            echo "<td>" . ($value ?? "NULL") . "</td>";
                        }
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='" . $columns_result->num_rows . "'>Brak danych</td></tr>";
                }
                ?>
            </table>

            <!-- Przyciski akcji -->
            <div class="action-buttons">
                <button onclick="showForm('create')">Dodaj rekord</button>
                <button onclick="showForm('update')">Aktualizuj rekord</button>
                <button onclick="showForm('delete')">Usuń rekord</button>
            </div>
        </div>

        <!-- Formularze CRUD -->
        <div id="form-create" class="form-section">
            <h3>Dodaj rekord do tabeli <?= ucfirst($selected_table) ?></h3>
            <form action="" method="post">
                <?php
                $columns_result = $conn->query("SHOW COLUMNS FROM $selected_table");
                while ($col = $columns_result->fetch_assoc()) {
                    if ($col['Field'] != 'id' && $col['Field'] != 'created_at' && $col['Field'] != 'order_date' && $col['Field'] != 'review_date') {
                        echo $col['Field'] . ": <input type='text' name='" . $col['Field'] . "' required><br>";
                    }
                }
                ?>
                <input type="hidden" name="table" value="<?= $selected_table ?>">
                <input type="hidden" name="action" value="create">
                <input type="submit" value="Zapisz">
            </form>
        </div>

        <div id="form-update" class="form-section">
            <h3>Aktualizuj rekord w tabeli <?= ucfirst($selected_table) ?></h3>
            <form action="" method="post">
                ID: <input type="text" name="id" required><br>
                <?php
                $columns_result = $conn->query("SHOW COLUMNS FROM $selected_table");
                while ($col = $columns_result->fetch_assoc()) {
                    if ($col['Field'] != 'id' && $col['Field'] != 'created_at' && $col['Field'] != 'order_date' && $col['Field'] != 'review_date') {
                        echo $col['Field'] . ": <input type='text' name='" . $col['Field'] . "' required><br>";
                    }
                }
                ?>
                <input type="hidden" name="table" value="<?= $selected_table ?>">
                <input type="hidden" name="action" value="update">
                <input type="submit" value="Zapisz">
            </form>
        </div>

        <div id="form-delete" class="form-section">
            <h3>Usuń rekord z tabeli <?= ucfirst($selected_table) ?></h3>
            <form action="" method="post">
                ID: <input type="text" name="id" required><br>
                <input type="hidden" name="table" value="<?= $selected_table ?>">
                <input type="hidden" name="action" value="delete">
                <input type="submit" value="Usuń">
            </form>
        </div>

        <!-- Sekcja własnego zapytania SQL -->
        <div class="sql-query">
            <h3>Wykonaj własne zapytanie SQL (tylko SELECT)</h3>
            <form action="" method="post">
                <textarea name="sql_query" placeholder="Wpisz zapytanie SELECT"></textarea><br>
                <input type="submit" name="execute_sql" value="Wykonaj">
            </form>
        </div>
    </div>

    <script>
        function showForm(action) {
            // Ukryj wszystkie formularze
            document.querySelectorAll('.form-section').forEach(form => form.classList.remove('active'));
            // Pokaż wybrany formularz
            document.getElementById(`form-${action}`).classList.add('active');
        }
    </script>
</body>
</html>