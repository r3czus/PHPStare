<html>
<head>
    <title>Zmienne w PHP</title>
    <meta charset="utf-8">
</head>
<body>
    <h3>Zmienne w PHP</h3>
    <?php
    $zmienna =10;
    echo "Zmienna wynosi".$zmienna;
    echo "<p>Zmienna wynosi $zmienna</p>";
    $tekst="napis";
    if($zmienna>0)
    {
        echo "zmienna dodatnia";
    }
    else
    {
        echo "zmienna ujemna lub zerowa";
    }
    ?>
</body>
</html>
