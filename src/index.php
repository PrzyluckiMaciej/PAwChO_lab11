<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Lab11</title>
        <style>
            body {
                font-family: "Arial", sans-serif;
                font-size: larger;
            }

            .title{
                text-align: center;
            }
        </style>
    </head>
    <body>
        <p class="title">
            <h1>PAwChO - laboratorium 11</h1>
            <h3>Maciej Przyłucki</h3>
        </p><br>
        
        <?php
        $connection = new PDO('mysql:host=mysql;dbname=lab11db;charset=utf8', 'root', 'root');
        $query      = $connection->query("SELECT TABLE_NAME FROM information_schema.TABLES WHERE TABLE_SCHEMA = 'lab11db'");
        $tables     = $query->fetchAll(PDO::FETCH_COLUMN);

        if (empty($tables)) {
            echo '<p>Nie ma żadnych tabel w bazie <code>lab11db</code>.</p>';
        } else {
            echo '<p>Baza <code>lab11db</code> zawiera tabele:</p>';
            echo '<ul>';
            foreach ($tables as $table) {
                echo "<li>{$table}</li>";
            }
            echo '</ul>';
        }
        ?>
    </body>
</html>