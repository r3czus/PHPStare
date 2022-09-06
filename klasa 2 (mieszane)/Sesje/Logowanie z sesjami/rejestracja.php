<?php 
    session_start(); 
    if(isset($_SESSION['login']))
    { header("location:zalogowany.php"); }
?>
<!DOCTYPE html>
<html>
<head> <meta charset="UTF-8 "> </head>
<body>
    <h1>Rejestracja</h1>
    <form action="" method="post">
    <p>Użytkownik <input type="text" name="login" <?php if(isset($_SESSION['blad'])){echo "value=".$_SESSION['blad'];}?>> </p>
    <p>Hasło <input type="password" name="password"> </p>
    <p>Potwierdź hasło <input type="password" name="password1"> </p>
    <input type="submit" value="Zarejestruj się">
    </form>
</body>
<?php
    if( !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password1']) )
    {
        $login=$_POST['login'];
        $password=$_POST['password'];
        $password1=$_POST['password1'];
        if($password != $password1) //kupka marudziła, że lepiej w JS, że zbędny ruch łełełeee
        { 
            echo "<br>Hasła nie są takie same!"; 
            $_SESSION['blad']=$login;
            header("location:rejestracja.php");
        } 
        else
        {
            require("dane_bazy.php");
            $connect=mysqli_connect($server,$user,$pass,$db);
            $password=hash("sha512",$password); //Szyfrowanie, ale w jedną stronę.
            $sql="INSERT INTO `ich_dane` (`id`, `email`, `haslo`) VALUES (NULL, '$login', '$password')";
            mysqli_query($connect,$sql);
            mysqli_close($connect);
            header("location:logowanie.php");
        }
    }
?>
</html>