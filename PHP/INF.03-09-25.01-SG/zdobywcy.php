<?php
$conn = new mysql(hostname: "localhost", username: "root", password: "", database:"zdobywcy");
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZDOBYWCY GÓR</title>
</head>
<body>
    <header><h1>Klub zdobywców gór polskich</h1></header>
    <nav>
        <a href="kw1.png">kwerenda1</a>
        <a href="kw2.png">kwerenda2</a>
        <a href="kw3.png">kwerenda3</a>
        <a href="kw4.png">kwerenda4</a>
    </nav>
    <div id="lewy">
        <img src="logo.png" alt="logo zdobywcy">
        <h3>razem z nami</h3>
        <ul>
            <li>wyjazdy</li>
            <li>szkolenia</li>
            <li>rekreacja</li>
            <li>wypoczynek</li>
            <li>wyzwania</li>
        </ul>
    </div>
    <div id="prawy">
        <h2>Dołącz do naszego zespołu!</h2>
        <p>Wpisz swoje dane do formularza</p>
        <form action="zdobywcy.php" method="POST">
            <label for="nazwisko">nazwisko:</label>
            <input type="text" name="nazwisko" id="nazwisko">

            <label for="imie">imie:</label>
            <input type="text" name="imie" id="imie">

            <label for="funkcja">Funkcja:</label>
            <select name="funkcja" id="funkcja">
                <option value="uczestnik">uczestnik</option>
                <option value="przewodnik">przewodnik</option>
                <option value="zaopatrzeniowiec">zaopatrzeniowiec</option>
                <option value="organizator">organizator</option>
                <option value="ratownik">ratownik</option>
            </select>

            <label for="email">Email:</label>
            <input type="text" name="email" id="email">

            <input type="submit">
        </form>

        <table>
            <thead>
                <tr>
                    <th>Nazwisko</th>
                    <th>Imię</th>
                    <th>Funkcja</th>
                    <th>Email</th>q
                </tr>
            </thead>
            <tbody>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST"){
                    $nazwisko = $POST["nazwisko"];
                    $imie = $POST["imie"];
                    $funkcja = $POST["funkcja"];
                    $email = $POST["email"];

                    $sql = "SELECT nazwisko, imie, funkcja, email FROM osoby;";
                    $result = $conn -> query(query: $sql);
                }

                $sql = "INSERT INTO osoby VALUES (NULL, 'B.', 'Miłosz', 'uczestnik', 'm.milosz@zdobywcyxyz.pl');";
                $result = $conn -> query(query: $sql)
                while ($row = $result -> fetch_assoc()){
                    $nazwisko = $row["nazwisko"];
                    $imie = $row["imie"];
                    $funkcja = $row["funkcja"];
                    $email = $row["email"];

                    echo "<tr>";
                        echo"<th>$nazwisko</th>";
                        echo"<th>$imie</th>";
                        echo"<th>$funkcja</th>";
                        echo"<th>$email</th>";
                    echo "</tr>";
                }
                ?>
            </tbqody>
        </table>
    </div>
    <footer><p>Stronę wykonał: PESEL</p></footer>
    
</body>
</html>

<?php
$conn -> close()
?>