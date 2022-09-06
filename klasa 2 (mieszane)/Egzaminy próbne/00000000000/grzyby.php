<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="styl5.css">
    <title>Grzybobranie</title>
</head>
<body>
    <div id="mini">
        <a href="borowik.jpg"><img src="borowik-miniatura.jpg" alt="Grzybobranie"></a>
    </div>

    <div id="tytul">
        <h1>Idziemy na grzyby!</h1>
    </div>

    <div id="lewy">
        <?php
            $connect=mysqli_connect("localhost","root","","dane2");
            $sql="SELECT nazwa_pliku,potoczna FROM grzyby";
            $query=mysqli_query($connect,$sql);
            while($rekord=mysqli_fetch_array($query))
            {
                echo "<img src='$rekord[0]' alt='tekst alternatywny' title='$rekord[1]'>";
            }
            mysqli_close($connect);
        ?>
    </div>

    <div id="prawy">
        <h2>Grzyby jadalne</h2>
        <?php
            $connect=mysqli_connect("localhost","root","","dane2");
            $sql="SELECT nazwa,potoczna FROM grzyby WHERE jadalny='1'";
            $query=mysqli_query($connect,$sql);
            while($rekord=mysqli_fetch_array($query))
            {
                echo "<p>$rekord[0] ($rekord[1])</p>";
            }
            mysqli_close($connect);
        ?>
        
        <h2>Polecamy do sosów</h2>
        <?php
            $connect=mysqli_connect("localhost","root","","dane2");
            $sql="SELECT grzyby.nazwa,potoczna,rodzina.nazwa FROM grzyby JOIN rodzina ON grzyby.rodzina_id=rodzina.id WHERE potrawy_id='1'";
            $query=mysqli_query($connect,$sql);
            echo "<ol>";
            while($rekord=mysqli_fetch_array($query))
            {
                echo "<li>$rekord[0] ($rekord[1]), rodzina: $rekord[2]</li>";
            }
            echo "</ol>";
            mysqli_close($connect);
        ?>
    </div>

    <div id="stopka">
        <p>Autor: 00000000000</p>
    </div>
</body>
</html>