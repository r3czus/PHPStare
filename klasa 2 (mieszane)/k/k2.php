<h1>Dodaj ogłoszenie</h1>
<form action="" method="post">
    Tytuł: <input type="text" name="tytul"> <br> <Br>
    Treść: <textarea name="tresc"></textarea> <br> <br>
    Kategoria: <select name="kategoria">
    <?php
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="SELECT DISTINCT kategoria FROM ogloszenie";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'>$rekord[0]</option>"; }
        mysqli_close($connect);
    ?>
    </select>
<input type="submit" value="Dodaj">
</form>
<?php
    if( isset($_POST['kategoria']) && !empty($_POST['tytul']) && !empty($_POST['tresc']) )
    {
        $tytul=$_POST['tytul'];
        $tresc=$_POST['tresc'];
        $kategoria=$_POST['kategoria'];
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="INSERT INTO ogloszenie (`id`,`uzytkownik_id`,`kategoria`,`podkategoria`,`tytul`,`tresc`) VALUES (NULL,'1','$kategoria','1','$tytul','$tresc')";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        header("location:k2.php");
    }
?>

<hr>

<h2>Wybierz kategorię ogłoszeń:</h2>
<form action="" method="post">
    Kategoria: <select name="kat">
    <?php
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="SELECT DISTINCT kategoria FROM ogloszenie";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'>$rekord[0]</option>"; }
        mysqli_close($connect);
    ?>
    </select>
    <input type="submit" value="Wypisz"> <br>
</form>
<?php
    if(isset($_POST['kat']))
    {
        $kat=$_POST['kat'];
        $connect=mysqli_connect("localhost","root","","dane");
        echo "<h3>Oto ogłoszenia z kategorii $kat:</h3><br>";
        $sql="SELECT kategoria,tytul,tresc FROM ogloszenie WHERE kategoria='$kat'";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<h3>$rekord[1]</h3><p>$rekord[2]</p>"; }
        mysqli_close($connect);
    }
?>