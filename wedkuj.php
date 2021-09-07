<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wędkujemy</title>
    <link rel="stylesheet" href="styl_1.css">
</head>

<body>
    <div class="baner">
        <h1>Portal dla wędkarzy</h1>
    </div>
    <div class="lewy">
        <h2> Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
            $db = new mysqli(
                'localhost',
                'root',
                '',
                'wedkowanie'
            );
            $sql = "SELECT nazwa, wystepowanie FROM `ryby`
                where styl_zycia = 1";
            $wynik = $db->query($sql);
            while ($wiersz = $wynik->fetch_assoc()) {
                $nazwa = $wiersz['nazwa'];
                $wystepowanie = $wiersz['wystepowanie'];
                echo "<li>$nazwa, wystepowanie: $wystepowanie </li>";
            }
            $db->close();
            ?>
        </ul>
    </div>
    <div class="prawy">
        <img src=ryba1.jpg alt="Sum">
        <br>
        <a href="kwerendy.txt"> Pobierasz kwerendy</a>
    </div>
<footer>
    <p> Stronę wykonał: 0000000000</p>
</footer>
</body>

</html>