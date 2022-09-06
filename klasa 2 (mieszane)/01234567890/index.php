<html>
<head>
    <meta charset="UTF-8">
    <title>Hurtownia papiernicza</title>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
    <header><h1>W naszej hurtowni kupisz najtaniej</h1></header>
    <div id="Lewy">
    <h3>Ceny wybranych artykułów w hurtowni:</h3>
    <table>
        <?php
            $connect=mysqli_connect("localhost","root","","sklep");
            $sql="SELECT `nazwa`,`cena` FROM `towary` limit 4";
            $query=mysqli_query($connect,$sql);
            while($rekord=mysqli_fetch_array($query))
            {
                echo "<tr> <td>$rekord[0]</td> <td>$rekord[1] zł</td> </tr>";
            }
        ?>
    </table>
    </div>
    <div id="Srodkowy">
    <h3>Ile będą kosztować Twoje zakupy?</h3>
    <form action="" method="post">
    wybierz artykuł
    <select name="artykul">
        <option value="Zeszyt 60 kartek">Zeszyt 60 kartek</option>
        <option value="Zeszyt 32 kartki">Zeszyt 32 kartki</option>
        <option value="Cyrkiel">Cyrkiel</option>
        <option value="Linijka 30 cm">Linijka 30 cm</option>
        <option value="Ekierka">Ekierka</option>
        <option value="Linijka 50 cm">Linijka 50 cm</option>
    </select>
    <br>
    liczba sztuk: <input type="number" name="liczba" id="sztuki" value="1">
    <br>
    <input type="submit" value="OBLICZ" id="iset">
    </form>
    <?php
        if(isset($_POST['artykul']))
        {
            $artykul=$_POST['artykul'];
            $sztuki=$_POST['liczba'];
            $kwota=0;
            $sql="SELECT `cena` FROM `towary` WHERE `nazwa`='$artykul'";
            $query=mysqli_query($connect,$sql);
            if($rekord=mysqli_fetch_array($query))
            {
                $kwota=$sztuki*$rekord[0];
            }
            echo $kwota;
        }
        mysqli_close($connect);
    ?>
    </div>
    <div id="Prawy">
    <img src="zakupy2.png" alt="hurtownia">
    <h3>Kontakt</h3>
    <p>telefon:<br>111222333<br>e-mail:<br><a href="mailto:hurt@wp.pl">hurt@wp.pl</a></p>
    </div>
    <footer><h4>Witrynę wykonał 01234567890</h4></footer>
</body>
</html>