<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Twój wskaźnik BMI</title>
    <link rel="stylesheet" type="text/css" href="styl4.css">
</head>
<body>
    <div id="baner">
        <h2>Oblicz wskaźnik BMI</h2>
    </div>
    <div id="logo">
        <img src="wzor.png" alt="liczymy BMI">
    </div>
    <div id="lewy">
        <img src="rys1.png" alt="zrzuć kalorie!">
    </div>
    <div id="prawy">
        <h1>Podaj dane</h1>
        <form action="" method="POST">
            Waga: <input type="number" name="waga"> <br>
            Wzrost [cm]: <input type="number" name="wzrost"> <br> 
            <input type="submit" value="Licz BMI i zapisz wynik">
        </form>
        <?php
            $connect=mysqli_connect("localhost","root","","egzamin");
            if(isset($_POST['waga']) && isset($_POST['wzrost']))
            {
                $waga=$_POST['waga'];
                $wzrost=$_POST['wzrost'];
            }
            if(!empty($waga) && !empty($wzrost))
            {
                $bmi=$waga/($wzrost*$wzrost);
                $bmi*=10000;
                echo "Twoja waga: $waga; Twój wzrost: $wzrost <br>BMI wynosi: $bmi";
                $typ=0;
                if($bmi>=0 && $bmi<=18)
                { $typ=1; }
                else if($bmi>=19 && $bmi<=25)
                { $typ=2; }
                else if($bmi>=26 && $bmi<=30)
                { $typ=3; }
                else if($bmi>=31 && $bmi<=100)
                { $typ=4; }
                $data=date('Y-m-d');
                $sql1="INSERT INTO wynik (id,bmi_id,data_pomiaru,wynik) VALUES (NULL, $typ, '$data', $bmi)";
                mysqli_query($connect,$sql1);
            }
        ?>
    </div>
    <div id="glowny">
        <table>
            <tr> <th>lp.</th> <th>Interpretacja</th> <th>zaczyna się od…</th> </tr>
            <?php
                $sql2="SELECT id, informacja, wart_min FROM bmi";
                $query=mysqli_query($connect,$sql2);
                while($rekord=mysqli_fetch_array($query))
                { echo "<tr> <td>$rekord[0]</td> <td>$rekord[1]</td> <td>$rekord[2]</td> </tr>"; }
                mysqli_close($connect);
            ?>
        </table>
    </div>
    <footer>
        Autor: 01234567890
        <a href="kw2.jpg">Wynik działania kwerendy 2</a>
    </footer>
</body>
</html>