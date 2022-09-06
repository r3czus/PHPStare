<h3>Wybierz nazwisko wychowawcy</h3>
<form action="" method="post">
<select name="lista">
    <?php
        $connect=mysqli_connect("localhost","root","","szkola");
        $sql="SELECT * FROM wychowawca";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        {
            echo "<option value='$rekord[3]'>$rekord[1] $rekord[2]</option>";
        }
        mysqli_close($connect);
    ?>
</select>
<input type="submit" value="Wybierz">
</form>
<?php
    if( isset($_POST['lista']) )
    {
        $connect=mysqli_connect("localhost","root","","szkola");
        $wybor=$_POST['lista'];
        $sqll="SELECT wychowawca.imie,wychowawca.nazwisko,wychowawca.id_klasy,klasa.id,klasa.nazwa FROM wychowawca JOIN klasa ON wychowawca.id_klasy=klasa.id WHERE klasa.id='$wybor'";
        $queri=mysqli_query($connect,$sqll);
        $rekort=mysqli_fetch_array($queri);
        echo "$rekort[0] $rekort[1] jest wychowawcą klasy $rekort[4]";
        mysqli_close($connect);
    }
?>