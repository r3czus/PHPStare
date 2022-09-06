<h3>Podaj tytuł i treść ogłoszenia</h3> <!--Takie cuś na 5 w piątek będzie -->
<form action="" method="post">
    Tytuł: <input type="text" name="tytul"> <br> <br>
    Treść: <textarea name="tresc" cols="40" rows="10"></textarea> <br><br>
    ID użytkownika: <select name="ajdi">
    <?php
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="SELECT id FROM uzytkownik";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'>$rekord[0]</option>"; }
        mysqli_close($connect);
    ?>
    </select>
<input type="submit" value="Wstaw">
</form>
<?php
    if( !empty($_POST['tytul']) && !empty($_POST['tresc']) && isset($_POST['ajdi']))
    {
        $tytul=$_POST['tytul'];
        $tresc=$_POST['tresc'];
        $ajdi=$_POST['ajdi'];
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="INSERT INTO ogloszenie (`id`,`uzytkownik_id`,`kategoria`,`podkategoria`,`tytul`,`tresc`) VALUES (NULL,'$ajdi','1','1','$tytul','$tresc')";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        header("location:wstawianie.php");
    }
?>