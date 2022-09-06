<?php
    session_start(); 
    if(!isset($_SESSION['login']))
    { header("location:logowanie.php"); }
?>
<!DOCTYPE html>
<html>
<head> 
    <meta charset="UTF-8 "> 
    <title>Zalogowany</title>
</head>
<body>
    <h1>Treści dla zalogowanych</h1>
    <form action="" method="post">
    <input type="submit" value="Wyloguj" name="wyloguj">
    </form>
</body>
<?php
    if( isset($_POST['wyloguj']) )
    { 
        unset($_SESSION['login']);
        session_destroy();
        header("location:logowanie.php");
    }
?>
</html>