<html>
<head>
    <meta charset="UTF-8">
    <title>Portal ogłoszeniowy</title>
    <link rel="stylesheet" type="text/css" href="styl1.css">
</head>
<body>
    <header><h1>Portal Ogłoszeniowy</h1></header>
    <div id="lewy">
        <h2>Kategorie ogłoszeń</h2>
        <ol>
            <li>Książki</li>
            <li>Muzyka</li>
            <li>Filmy</li>
        </ol>
        <img src="ksiazki.jpg" alt="Kupię / sprzedam książkę">
        <table>
            <tr> <td>Liczba ogłoszeń</td> <td>Cena ogłoszenia</td> <td>Bonus</td> </tr>
            <tr> <td>1 - 10</td> <td>1 PLN</td> <td rowspan="3">Subskrypcja newslettera to upust 0,20 PLN na ogłoszenie</td> </tr>
            <tr> <td>11 - 50</td> <td>0,80 PLN</td> </tr>
            <tr> <td>51 i więcej</td> <td>0,60 PLN</td> </tr>
        </table>
    </div>
    <div id="prawy">
        <h2>Ogłoszenia kategorii książki</h2>
        <?php
            $connect=mysqli_connect("localhost","root","","ogloszenia");
            $sql1="SELECT id, tytul, tresc FROM ogloszenie WHERE kategoria=1";
            $query1=mysqli_query($connect,$sql1);
            while($rekord=mysqli_fetch_array($query1))
            {
                $sql2="SELECT DISTINCT telefon FROM ogloszenie JOIN uzytkownik ON ogloszenie.uzytkownik_id=uzytkownik.id WHERE ogloszenie.id=$rekord[0]";
                $query2=mysqli_query($connect,$sql2);
                echo "<h3>$rekord[0] $rekord[1]</h3>";
                echo "<p>$rekord[2]</p>";
                if($telefon=mysqli_fetch_array($query2))
                {
                    echo "<p>telefon kontaktowy: $telefon[0]</p>";
                }
            }
            mysqli_close($connect);
        ?>
    </div>
    <footer>Portal ogłoszeniowy opracował: 01234567890</footer>
</body>
</html>