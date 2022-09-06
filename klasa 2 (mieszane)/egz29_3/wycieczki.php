<html>
<head>
    <meta charset="UTF-8">
    <title>Wycieczki i urlopy</title>
    <link rel="stylesheet" type="text/css" href="styl3.css">
</head>
<body>
    <header><h1>BIURO PODRÓŻY</h1></header>
    <div id="dL">
        <h2>KONTAKT</h2>
        <a href="mailto:biuro@wycieczki.pl">napisz do nas</a>
        <p>telefon: 555666777</p>
    </div>
    <div id="dS">
        <h2>GALERIA</h2>
        <?php
            $connect=mysqli_connect("localhost","root","","egzamin3");
            $sql="SELECT nazwaPliku, podpis FROM zdjecia ORDER BY podpis ASC";
            $query=mysqli_query($connect,$sql);
            while($rekord=mysqli_fetch_array($query))
            {
                echo "<img src='$rekord[0]' alt='$rekord[1]'>";
            }
        ?>
    </div>
    <div id="dP">
        <h2>PROMOCJE</h2>
        <table> 
            <tr> <td>Jesień</td> <td>Grupa 4+</td> <td>Grupa 10+</td> </tr>
            <tr> <td>5%</td> <td>10%</td> <td>15%</td> </tr>
        </table>
    </div>
    <div id="dane">
        <h2>LISTA WYCIECZEK</h2>
        <?php
            $sql="SELECT id, dataWyjazdu, cel, cena FROM wycieczki WHERE dostepna=1";
            $query=mysqli_query($connect,$sql);
            while($rekord=mysqli_fetch_array($query))
            {
                echo "$rekord[0]. $rekord[1], $rekord[2], cena: $rekord[3]<br>";
            }
            mysqli_close($connect);
        ?>
    </div>
    <footer>
        <p>Stronę wykonał: 01234567890</p>
    </footer>
</body>
</html>