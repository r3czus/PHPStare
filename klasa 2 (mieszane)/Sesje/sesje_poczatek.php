<?php
session_start(); //Musi być przed nagłówkami strony, sam początek, nawet przed <html>!
?>
<html>
<head>
</head>
<body>
<form action="" method="post">
    <input type="submit" value="Zatrzyj ślady">
    <input type="hidden" value="cos" name="zs">
</form>
    <?php
        if(isset($_POST['zs']))
        {
            unset($_SESSION['licznik']);
            session_destroy();
            header("location:sesje_poczatek.php");
        }
        if(isset($_SESSION['licznik']))
        {
            $_SESSION['licznik']++;
            echo "Witamy po raz ".$_SESSION['licznik'];
        }
        else
        {
            $_SESSION['licznik']=1;
            echo "Witamy po raz pierwszy!";
        }
    ?>
</body>
</html>