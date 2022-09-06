<h1>Podzespoły</h1>
<form action="" method="post">
    <?php
    $connect=mysqli_connect("localhost","root","","baza3");
    $sql="SELECT id,nazwa,opis,dostepnosc,cena FROM podzespoly";
    $query=mysqli_query($connect,$sql);
    while($rekord=mysqli_fetch_array($query))
    {
        echo "<form action='' method='post'>";
        echo "Nazwa: <input type='text' name='nazwa' value='$rekord[1]'> <br> <br>";
        echo "Opis: <textarea name='opis' rows='6'>$rekord[2]</textarea><br> <br>";
        echo "Cena: <input type='number' name='cena' value='$rekord[4]'> <br> <br>";
        echo "<input type='hidden' name='id' value='$rekord[0]'>";
        echo "<input type='submit' value='Modyfikuj'>";
        echo "</form>";
        echo "<hr>";
    }
    mysqli_close($connect);
    ?>
</form>
<?php
    if(isset($_POST['id']))
    {
        $id=$_POST['id'];
        $nazwa=$_POST['nazwa'];
        $opis=$_POST['opis'];
        $cena=$_POST['cena'];
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="UPDATE podzespoly SET nazwa='$nazwa', opis='$opis', cena='$cena' WHERE id='$id'";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
    }
?>