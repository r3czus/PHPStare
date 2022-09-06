<h2>Jakiego producenta chcesz?</h2>
<form action="" method="post">
    <select name="wybor">
    <?php
        $connect=mysqli_connect("localhost","root","","bazka");
        $sql="SELECT * FROM producenci";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        {
            echo "<option value='$rekord[0]'>$rekord[1]</option>";
        }
        mysqli_close($connect);
    ?>
    </select>
    <input type="submit" value="Dalej">
</form>
<?php
    if(isset($_POST['wybor']))
    {
        $connect=mysqli_connect("localhost","root","","bazka");
        $wybor=$_POST['wybor'];
        $jeden=1;
        $sql="SELECT producenci.id, producenci.nazwa, podzespoly.nazwa, podzespoly.opis, podzespoly.producenci_id, podzespoly.typy_id, typy.id, typy.kategoria FROM podzespoly,producenci,typy WHERE podzespoly.typy_id=typy.id AND podzespoly.producenci_id=producenci.id AND podzespoly.producenci_id='$wybor'";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        {
            if($jeden>0)
            {
                echo "Podzespoły firmy $rekord[1]: <ol>";
                $jeden--;
            }
            echo "<li> <strong>$rekord[2]</strong> Opis: $rekord[3],  Typ: $rekord[7] </li>";
        }
        echo "</ol>";
        mysqli_close($connect);
    }
?>