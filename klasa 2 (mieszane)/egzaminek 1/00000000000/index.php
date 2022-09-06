<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8">
        <title>Filmoteka</title>
        <link rel="stylesheet" type="text/css" href="style/styl3.css">
    </head>
    <body>
        
        <div id="g1">
        <img src="klaps1.png" alt="Nasze filmy">
        </div>
        
        <div id="g2">
        <h1>BAZA FILMÓW</h1>
        </div>
        
        <div id="g3">
            <form action="" method="post">
                <select name="gatunek">
                    <option value="Sci-Fi">Sci-fi</option>
                    <option value="animacja">animacja</option>
                    <option value="dramat">dramat</option>
                    <option value="horror">horror</option>
                    <option value="komedia">komedia</option>
                </select>
                <input type="submit" value="Filmy">
            </form>
        </div>
        
        <div id="g4">
        <img src="gwiezdneWojny1.png" alt="szturmowcy">
        </div>
        
        <div id="lewy">
        <h2>Wybrano filmy:</h2>
            <!-- skrypt 1 -->
            <?php
            $connect=mysqli_connect("localhost","root","","dane");
            
            if(isset($_POST['gatunek']))
            {
                $gat = $_POST['gatunek'];
                //echo "formularz $gat";
                $zapytanie = "SELECT tytul,rok,ocena FROM `filmy` JOIN gatunki ON filmy.gatunki_id=gatunki.id WHERE gatunki.nazwa= '$gat' ";
                $wynik = mysqli_query($connect , $zapytanie);
                while($rekord=mysqli_fetch_array($wynik))
                {
                    echo "<p>Tytuł: $rekord[0], Rok produkcji: $rekord[1], Ocena: $rekord[2]</p>";
                }
            }
            
            mysqli_close($connect);
            
            ?>
        </div>
        
        <div id="prawy">
        <h2>Wszystkie filmy:</h2>
            <!-- skrypt 2 -->
        </div>
        
        <div id="stopka">
        <p>Autor: 00000000000</p>
            <a href="kwerendy.txt">Zapytania do bazy</a>
            <a href="http://filmy.pl" target="_blank">Przejdź do filmy.pl</a>
        </div>
        
    </body>
</html>