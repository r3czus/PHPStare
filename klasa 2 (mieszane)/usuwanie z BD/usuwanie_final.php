    <?php
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="SELECT id,CONCAT(imie,' ',nazwisko) AS Dane FROM pracownicy";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<form action='' method='post'><input type='hidden' value='$rekord[0]' name='wyrok'> $rekord[1] <input type='submit' value='Usuń'></form><br>"; }
        mysqli_close($connect);
    ?> <br>
<?php
    if(isset($_POST['wyrok']))
    {
        $lista=$_POST['wyrok'];
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="DELETE FROM pracownicy WHERE pracownicy.id='$lista'";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        header("location:usuwanie_final.php");
    }
?>