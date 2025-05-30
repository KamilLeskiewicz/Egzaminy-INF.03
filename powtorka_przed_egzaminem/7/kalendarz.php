<?php
    $conn = new mysql('localhost', 'root', '', 'terminarz');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zadania na lipiec</title>
    <Link rel="stylesheet" href="styl6.css"/>
</head>
<body>
    <header id="header1"><img src="logo1.png" alt="lipiec"></header>
    <header id="header2">
        <h1>TERMINARZ</h1>
        <?php
            echo "<p>najbliższe zadania: ";
            $sql = "SELECT DISTINCT wpis FROM zadania WHERE dataZadania <= '2020-07-07' AND wpis <> '';";
            $result = $conn -> query(query: $sql);
            while($row = $result -> fetch_array()){
                echo "$row[0]; ";
            }
            echo "</p>";
        ?>
    </header>
    <div id="main">
        <?php
            $sql = SELECT dataZadania, wpis FROM zadania WHERE miesiac = 'lipiec';
            $result = $conn -> query(guery: $sql);
            while($row = $result -> fetch_array()){
                echo "<div>";
                echo "<h6>$row[0]</h6>";
                echo "<p>$row[1]</p>";
                echo "</div>";
            }
        ?>
    </div>
    <footer>
        <a href="sierpien.html">Terminarz na sierpień</a>
        <p>Stronę wykonał: PESEL</p>
    </footer>
</body>
</html>

<?php
    $conn -> close();
?>