<?php
    $conn -> new mysql('localhost', 'root', '', 'piekarnia');
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PIEKARNIA</title>
    <link rel='stylesheet' href='styles.css'/>
</head>
<body>
    <img src="wypieki.png" alt="Produkty naszej piekarni">
    <nav>
        <a href="kw1.jpg">KWERENDA1</a>
        <a href="kw2.jpg">KWERENDA2</a>
        <a href="kw3.jpg">KWERENDA3</a>
        <a href="kw4.jpg">KWERENDA4</a>
    </nav>
    <header>
        <h1>WITAMY</h1>
        <h4>NA STRONIE PIEKARNI</h4>
        <p>Od 31 lat oferujemy najwyższej jakości pieczywo. Naturalnie świeże, naturalnie smaczne. Pieczemy wyłącznie wypieki na naturalnym zakwasie bez polepszaczy i zagęstników. Korzystamy wyłącznie z najlepszych ziaren pochodzących z ekologicznych upraw położonych w rejonach zgierskim i ozorkowskim.</p>
    </header>
    <main>
        <h4>Wybierz rodzaj wypieków</h4>
        <?php
            <form action="piekarnia.php" method="post">
                <select name="rodzaj" id="rodzaj">
                    $sql = 'SELECT Rodzaj, Nazwa, Gramatura, Cena FROM wyroby WHERE Rodzaj = 'INNE'';
                    $result = $conn -> query(guery: $sql);
                    while($row = $result->fetch(fetch_assoc())){
                        echo "<option value='" . $row["Rodzaj"] . "'>" . $row["Rodzaj"] . "</option>";
                    }
                </select>  
                <input type="submit" value="wybierz">          
            </form>
        ?>

    </main>
    <footer>
        <p>AUTOR: PESEL</p>
        <p>Data: DATA</p>
    </footer>
</body>
</html>
<?php
    $conn -> close();
?>