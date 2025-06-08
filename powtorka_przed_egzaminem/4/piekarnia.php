<?php
    $conn = new mysql('localhost', 'root', '', 'piekarnia');
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>PIEKARNIA</title>
    <link rel="stylesheet" href="styles.css"/>
</head>
<body>
    <img src="wypieki.jpg" alt="Produkty naszej piekarni">
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
        <h4>Wybierz rodzaj wypieków.</h4>
        <form action="piekarnia.php" method="post">
            <select name="rodzaj" id="rodzaj">
                <?php
                    $sql = 'SELECT DISTINCT Rodzaj FROM wyroby ORDER BY Rodzaj DESC';
                    $result = conn->query($sql);
                    while($row=$result->fetch_assoc()){
                        echo "<option value='" . $row["Rodzaj"] . "'>" . $row["Rodzaj"] . "</option>";
                    }
                ?>
            </select>
            <input type="submit" value="Wybierz">
        </form>
        <table>
            <tr>
                <th>Rodzaj</th>
                <th>Nazwa</th>
                <th>Gramatura</th>
                <th>Cena</th>
            </tr>
            <?php
            
            ?>
        </table>
    </main>
    <footer>
        <h1>AUTOR: PESEL</h1>
        <p>DATA: DATA</p>
    </footer>
</body>
</html>