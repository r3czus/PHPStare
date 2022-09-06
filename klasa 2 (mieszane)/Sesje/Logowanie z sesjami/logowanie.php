<?php 
    session_start(); 
    if(isset($_SESSION['login']))
    { header("location:zalogowany.php"); }
?>
<!DOCTYPE html>
<html>
<head> <meta charset="UTF-8 "> </head>
<body>
    <h1>Zaloguj się</h1>
    <form action="" method="post">
    <p>Użytkownik <input type="text" name="login" <?php if(isset($_SESSION['err'])){echo "value=".$_SESSION['err'];}?>> </p>
    <p>Hasło <input type="password" name="password"> </p>
    <input type="submit" value="Zaloguj">
    </form>
</body>
<?php
    if( !empty($_POST['login']) && !empty($_POST['password']) )
    {
        require("dane_bazy.php"); //require lub include do podpinania plików, ale require jest bardziej rygorystyczny, a include jest fest prymitywny.
        $connect=mysqli_connect($server,$user,$pass,$db);
        $login=$_POST['login'];
        $password=$_POST['password'];
        $password=hash("sha512",$password);
        $sql="SELECT * FROM `ich_dane` WHERE `email` LIKE '$login' AND `haslo` LIKE '$password' ";
        $query=mysqli_query($connect,$sql);
        if(mysqli_fetch_array($query))
        {
            echo "Zalogowano"; 
            $_SESSION['login']=$login;
            header("location:zalogowany.php");
        }
        else
        {
            echo "<br>Niepoprawne dane <br> <br>";
            $_SESSION['err']=$login;
            echo "<a href='rejestracja.php'>Zarejestruj się</a>";
        }
    }
?>
</html>