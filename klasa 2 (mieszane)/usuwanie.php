<form action="" method="post">
    <select name="dania">
    <?php
        $connect=mysqli_connect("localhost","root","","bazka"); //Oryginał: dane
        $sql="SELECT id,nazwa FROM dania";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'>$rekord[1]</option>"; }
        mysqli_close($connect);
    ?>
    </select>
<input type="submit" value="Usuń">
</form>
<?php
    if(isset($_POST['dania']))
    {
        $id=$_POST['dania'];
        $connect=mysqli_connect("localhost","root","","bazka");
        $sql="DELETE FROM dania WHERE id='$id'";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        header("location:usuwanie.php");
    }
?>

<hr>

<form action="" method="post">
    <?php
        $connect=mysqli_connect("localhost","root","","bazka");
        $sql="SELECT id,CONCAT(imie,' ',nazwisko) AS Dane FROM pracownicy";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<input type='checkbox' name='wyrok[]' value='$rekord[0]'> $rekord[1]<br>"; }
        mysqli_close($connect);
    ?> <br>
    <input type="submit" value="zabij">
</form>
<?php
    $lista=$_POST['wyrok'];
    /*$connect=mysqli_connect("localhost","root","","bazka");
    $sql="DELETE FROM pracowncy WHERE "; //Oryginał: dane
    $query=mysqli_query($connect,$sql);
    while($rekord=mysqli_fetch_array($query))
    { echo "<input type='checkbox' name='$rekord[0]'> $rekord[1]<br>"; }
    mysqli_close($connect);*/
?>