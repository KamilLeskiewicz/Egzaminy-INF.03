<?php
    $conn = new mysql('localhost', 'root', '', 'hodowla');
?>



<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hodowla świnek morskich</title>
    <link rel="stylesheet" href="styl.css"/>
</head>
<body>
    <header>
        <h1>Hodowla świnek morskich - zamów świnkowe maluszki</h1>
    </header>
    <div id="lewy-1">
        <a href="peruwianka.php">Rasa Peruwianka</a>
        <a href="american.php">Rasa American</a>
        <a href="crested.php">Rasa Crested</a>
    </div>
    <div id="prawy">
        <h3>Poznaj wszystkie rasy świnek morskich</h3>
        <ol>
            <?php
                $sql = 'SELECT rasa FROM rasy';
                $result = conn -> query(query:$sql);
                while($row = $result -> fetch_array()){
                    echo "<li>$row[0]</li>";
                }
            ?>
        </ol>
    </div>
    <div id="lewy-2">
        <img src="peruwianka.jpg" alt="Świnka morska rasy peruwianka">
        <?php
            $sql = 'SELECT DISTINCT data_ur, miot, rasa FROM swinki JOIN rasy ON rasy_id = rasy.id WHERE rasy_id=1;';
            $result = conn -> query(query:$sql);
            while($row = $result -> fetch_array()){
                echo "<h2>Rasa: $row[2]</h2>";
                echo "<p>Data urodzenia: $row[0]</p>";
                echo "<p>Oznaczenie miotu: $row[1]</p>";
            }
        ?>
        <hr>
        <h2>Świnki w tym miocie</h2>
        <?php
            $sql = 'SELECT imie, cena, opis from swinki WHERE id = 1;';
            $result = conn -> query(query:$sql);
            while($row = $result -> fetch_array()){
                echo "<h3>$row[0] - $row[1]</h3>";
                echo "<p>$row[2]</p>";
            }
        ?>
    <footer>
        <p>Stronę wykonał: PESEL</p>
    </footer>
</body>
</html>

<?php
    $conn -> close();
?>