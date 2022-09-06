<html>
<head>
    <meta charset="UTF-8">
    <title>Wędkujemy</title>
    <link rel="stylesheet" type="text/css" href="styl_1.css">
</head>
<body>
    <header> <h1>Portal dla wędkarzy</h1> </header>
    <div id="L">
        <h2>Ryby drapieżne naszych wód</h2>
        <ul>
            <?php
                $connect=mysqli_connect("localhost","root","","wedkowanie");
                $sql="SELECT nazwa, wystepowanie FROM `ryby` WHERE styl_zycia=1";
                $query=mysqli_query($connect,$sql);
                while($rekord=mysqli_fetch_array($query))
                {
                    echo "<li>$rekord[0], występowanie: $rekord[1]</li>";
                }
                mysqli_close($connect);
            ?>
        </ul>
    </div>
    <div id="P">
        <img src="ryba1.jpg" alt="Sum"> <br>
        <a href="kwerendy.txt">Pobierz kwerendy</a>
    </div>
    <footer> <p>Stronę wykonał: 01234567890</p> </footer>
</body>
</html>