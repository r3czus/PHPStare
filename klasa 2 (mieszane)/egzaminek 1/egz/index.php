<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl3.css">
    <title>Filmoteka</title>
</head>
<body>
    <div class="gora">
        <img src="klaps.png" alt="Nasze filmy">
    </div>
    <div class="gora">
        <h1>BAZA FILMÓW</h1>
    </div>
    <div class="gora">        
        <form action="" method="post">
            <select name="gatunki">
                <option value="1">Sci-Fi</option>
                <option value="2">animacja</option>
                <option value="3">dramat</option>
                <option value="4">horror</option>
                <option value="5">komedia</option>
            </select>
            <input type="submit" value="Filmy">
        </form>
    </div>
    <div class="gora">
        <img src="gwiezdneWojny.jpg" alt="szturmowcy">
    </div>
    <div class="main">
        <h2>Wybrano filmy</h2>
        <?php
            $lacz1=mysqli_connect("localhost","root","","dane");
            if(isset($_POST['gatunki']))
            {
                $form=$_POST['gatunki'];
                $sql1="SELECT tytul,rok,ocena FROM filmy WHERE gatunki_id= '$form'";
                $efekt1 = mysqli_query($lacz1, $sql1);
                while($rekord1=mysqli_fetch_array($efekt1))
                {
                    echo "<p>Tytuł: $rekord1[0], Rok produkcji: $rekord1[1], Ocena: $rekord1[2]</p>";
                }
                mysqli_close($lacz1);
            }
        ?>
    </div>
    <div class="main">
        <h2>Wszystkie filmy</h2>
        <?php
            $lacz2=mysqli_connect("localhost","root","","dane");
            $sql2="SELECT filmy.id,filmy.tytul,rezyserzy.imie,rezyserzy.nazwisko FROM filmy JOIN rezyserzy ON filmy.rezyserzy_id=rezyserzy.id;";
            $efekt2 = mysqli_query($lacz2 , $sql2);
            while($rekord2=mysqli_fetch_array($efekt2))
            {
                echo "<p>$rekord2[0]. $rekord2[1], reżyseria: $rekord2[2] $rekord2[3]</p>";
            }
            mysqli_close($lacz2);
        ?>
    </div>
    <div id="stopka">
        <p id="autor"> Autor: 12345678901 </p>
        <a href="kwerendy.txt" target="_blank">Zapytania do bazy</a>
        <a href="http://filmy.pl" target="_blank">Przejdź do filmy.pl</a>
    </div>
</body>
</html>