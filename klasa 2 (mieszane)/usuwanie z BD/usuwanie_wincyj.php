<form action="" method="post">
    <?php
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="SELECT id,CONCAT(imie,' ',nazwisko) AS Dane FROM pracownicy";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        { echo "<input type='radio' name='wyrok' value='$rekord[0]'> $rekord[1]<br>"; }
        mysqli_close($connect);
    ?> <br>
    <input type="submit" value="zabij">
</form>
<?php
    if(isset($_POST['wyrok']))
    {
        $strzal=$_POST['wyrok'];
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="DELETE FROM pracownicy WHERE pracownicy.id='$strzal'";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        //header("location:usuwanie.php");
    }
?>

<hr>

<form action="" method="post">
    <?php
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="SELECT id,CONCAT(imie,' ',nazwisko) AS Dane FROM pracownicy";
        $query=mysqli_query($connect,$sql);
        echo "<select name='selekcik'>";
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'> $rekord[1]<br>"; }
        echo "</select>";
        mysqli_close($connect);
    ?> <br>
    <input type="submit" value="zabij">
</form>
<?php
    if(isset($_POST['selekcik']))
    {
        $strzal=$_POST['selekcik'];
        $connect=mysqli_connect("localhost","root","","baza3");
        $sql="DELETE FROM pracownicy WHERE pracownicy.id='$strzal'";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        //header("location:usuwanie.php");
    }
?>