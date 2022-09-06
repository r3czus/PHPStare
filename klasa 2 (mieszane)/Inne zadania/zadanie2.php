<form action="" method="post">
    Ile chcesz maksymalnie wydać w naszej świetnej restauracji? <br> <br>
    <input type="number" name="kwota" placeholder="kwota"> zł 
    <input type="submit" value="Tyle">
</form>
<?php
    if( !empty($_POST['kwota']) )
    {
        $connect=mysqli_connect("localhost","root","","dane");
        $kwota=$_POST['kwota'];
        $sql="SELECT nazwa,cena FROM dania WHERE cena<='$kwota' ORDER BY cena DESC";
        $query=mysqli_query($connect,$sql);
        echo "Stać Cię na poniższe produkty: <ul>";
        while($rekord=mysqli_fetch_array($query))
        {
            echo "<li>$rekord[0] - cena: $rekord[1] </li>";
        }
        echo "</ul>";
        mysqli_close($connect);
    }
?>

<br> <br> <br>

<?php
    $connect=mysqli_connect("localhost","root","","dane");
    $sql='SELECT filmy.tytul,rezyserzy.imie,rezyserzy.nazwisko,gatunki.nazwa FROM filmy,rezyserzy,gatunki WHERE filmy.rezyserzy_id=rezyserzy.id AND filmy.gatunki_id=gatunki.id';
    $query=mysqli_query($connect,$sql);
    echo "<table> <tr> <th>Tytuł</th> <th>Reżyser</th> <th>Gatunek</th>"; 
    while($rekord=mysqli_fetch_array($query))
    {
        echo "<tr> <td>$rekord[0]</td> <td>$rekord[1] $rekord[2]</td> <td>$rekord[3]</td> </tr>";
    }
    echo "</table>";
    mysqli_close($connect);
?>
<style>
    table,th,tr,td
    {
        border-collapse: collapse; 
        border: 1px solid black;
        text-align: center;
        padding: 2px;
    }
</style>