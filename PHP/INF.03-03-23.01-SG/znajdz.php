<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Kwiaty</title>
    <Link rel="stylesheet" href="styl.css"/>
</head>
<body>
    <header>
        <h1>Grupa Polskich Kwiaciarni</h1>
    </header>
    <div class="lewy">
        <h2>Menu</h2>
        <ol>
            <li><a href="index.html">Strona główna</a></li>
            <li><a href="https://www.kwiaty.pl/" target="_blank">Rozpoznaj kwiaty</a></li>
            <li><a href="znajdz.php">Znajdź kwiaciarnię</a></li>
            <ul>
                <li>w Warszawie</li>
                <li>w Malborku</li>
                <li>w Poznaniu</li>
            </ul>
        </ol>
    </div>
    <div class="prawy">
        <h2>Znajdź kwiaciarnię</h2>
        <form action="znajdz.php" method="POST">
            <label for="miasto">Podaj nazwę miasta</label>
            <input type="text" name="miasto" id="miasto">
            <button type="submit" name="check">SPRAWDŹ</button>
        </form>
    </div>

    <?php
        if(isset($_POST["check"])){
            $conn = mysql_connect('localhost', 'root', '', 'kwiaciarnia');

            $miasto = $_POST['miasto'];

            $sql = "SELECT nazwa, ulica FROM kwiaciarnie WHERE miasto = '$miasto';";

            $result = $conn->query($sql)

            while($row = $result->fech_array()){
                echo "<h3>".$row[0].", ".$row[1]."</h3>" 
            }


            $conn -> close();
        }



    ?>
    <footer><p>Stronę opracował: PESEL</p></footer>
</body>
</html>