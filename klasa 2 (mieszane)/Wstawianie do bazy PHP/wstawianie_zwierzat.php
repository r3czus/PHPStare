<h3>Podaj dane zwierzątka</h3>  <!--Takie cuś na 6 w piątek będzie -->
<form action="" method="post">
    Gatunek: <input type="text" name="gatunek"> <br> <br>
    Występowanie: <input type="text" name="wystepowanie"> <br><br>
    Zagrożony? <input type="checkbox" name="zagrozony"> <br> <br>
    Plik ze zdjęciem: <input type="file" name="plik"> <br> <br>
    <?php
        $connect=mysqli_connect("localhost","root","","baza2");
        $sql="SELECT id,nazwa FROM gromady";
        $query=mysqli_query($connect,$sql);
        echo "Gromady: <select name='gromady'>";
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'>$rekord[1]</option>"; }
        echo "</select> <br> <br>";
        $sql="SELECT id,rodzaj FROM odzywianie";
        $query=mysqli_query($connect,$sql);
        echo "Sposób odżywiania: <select name='odzywianie'>";
        while($rekord=mysqli_fetch_array($query))
        { echo "<option value='$rekord[0]'>$rekord[1]</option>"; }
        echo "</select>";
        mysqli_close($connect);
    ?>
<br> <br> <input type="submit" value="Wstaw">
</form>
<?php
    if( !empty($_POST['gatunek']) && !empty($_POST['wystepowanie']) && isset($_POST['gromady']) && isset($_POST['odzywianie']) )
    {
        $gatunek=$_POST['gatunek'];
        $wystepowanie=$_POST['wystepowanie'];
        $gromady=$_POST['gromady'];
        $odzywianie=$_POST['odzywianie'];
        if(!empty($_POST['plik']))
        { $plik=$_POST['plik']; }
        else
        { $plik="Brak wybranego pliku"; }
        if(isset($_POST['zagrozony']))
        { $zagrozony=1; }
        else
        { $zagrozony=0; }
        $connect=mysqli_connect("localhost","root","","baza2");
        $sql="INSERT INTO zwierzeta (`id`,`Gromady_id`,`Odzywianie_id`,`gatunek`,`wystepowanie`,`czy_zagrozony`,`obraz`) VALUES (NULL,'$gromady','$odzywianie','$gatunek','$wystepowanie','$zagrozony','$plik')";
        mysqli_query($connect,$sql);
        mysqli_close($connect);
        header("location:wstawianie_zwierzat.php");
    }
?>