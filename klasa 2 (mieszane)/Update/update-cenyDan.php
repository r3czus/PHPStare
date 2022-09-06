<form action="" method="post">
<select name="selekt">
<?php
    $connect=mysqli_connect("localhost","root","","baza3");
    $sql="SELECT DISTINCT id,nazwa,cena FROM dania";
    $query=mysqli_query($connect,$sql);
    while($rekord=mysqli_fetch_array($query))
    {
        echo "<option value='$rekord[0]'>$rekord[1], cena: $rekord[2]</option>";
    }
    mysqli_close($connect);
?>
</select> <br> <br>
<input type="number" name="nowa" placeholder="Podaj nową cenę"> <br> <br>
<input type="submit" value="Zmień">
</form>

<?php
    if( isset($_POST['selekt']) && !empty($_POST['nowa']) )
    {
        $nowa=$_POST['nowa'];
        $id=$_POST['selekt'];
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="UPDATE dania SET cena='$nowa' WHERE dania.id='$id'";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        header("location:update-cenyDan.php");
    }
?>
