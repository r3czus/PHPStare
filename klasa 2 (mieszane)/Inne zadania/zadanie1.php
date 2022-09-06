<h1>Ogłoszenia</h1>
<?php
    $connect=mysqli_connect("localhost","root","","dane");
    $sql="SELECT tytul,tresc, imie,nazwisko,email,telefon FROM ogloszenie JOIN uzytkownik ON ogloszenie.uzytkownik_id=uzytkownik.id";
    $query=mysqli_query($connect, $sql);
    while($rekord=mysqli_fetch_array($query))
    {
        echo "<h3>$rekord[0]</h3><p> $rekord[1]</p> Imię: <em>$rekord[2]</em>, Nazwisko:  <em>$rekord[3]</em>, Telefon:  <em>$rekord[4]</em>, Email:  <em>$rekord[5]</em>";
    }
    mysqli_close($connect);
?>
<br> <br> <br>
<form action="" method="post">
    <select name="stanowisko">
    <?php
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="SELECT stanowisko FROM pracownicy GROUP BY stanowisko";
        $query=mysqli_query($connect, $sql);
        while($stan=mysqli_fetch_array($query))
        {
            echo "<option value='$stan[0]'>nr $stan[0]</option>";
        }
        mysqli_close($connect);
    ?>
    </select>
    <input type="submit" value="Wybierz">
</form>
<ol>
    <?php
        if(isset($_POST['stanowisko']))
        {
            $connect=mysqli_connect("localhost","root","","dane");
            $wybor=$_POST['stanowisko'];
            $sql="SELECT imie,nazwisko FROM pracownicy WHERE stanowisko='$wybor'";
            $query=mysqli_query($connect, $sql);
            while($rekord=mysqli_fetch_array($query))
            { echo "<li>$rekord[0] $rekord[1]</li>"; }
            mysqli_close($connect);
        }
    ?>
</ol>
<br> <br>
<style>
    table, tr, td{
        border-collapse: collapse;
        border: 1px solid black;
        text-align: center;
        padding: 2px;
    }
</style>
<table>
    <tr><th>Nr</th><th>Data</th><th>Czas</th></tr>
    <?php
        $numerek=1;
        $connect=mysqli_connect("localhost","root","","dane");
        $sql="SELECT wynik, dataUstanowienia FROM wyniki ORDER BY wynik ASC";
        $query=mysqli_query($connect, $sql);
        while($rekord=mysqli_fetch_array($query))
        { 
            echo "<tr><td>$numerek.</td><td>$rekord[1]</td><td>$rekord[0]</td></tr>"; 
            $numerek++;
        }
        mysqli_close($connect);
    ?> 
</table>
<!--
<form action="" method="post">
        <input type="date" name="data" placeholder="Podaj datę">
        <input type="text" name="czas" placeholder="Podaj.czas"> <br>
        <input type="submit" value="Dodaj">
</form> -->
<?php
    /*if(isset($_POST['data']) && isset($_POST['czas']))
    {
        $connect=mysqli_connect("localhost","root","","dane");
        $data=$_POST['data'];
        settype($data,'float');
        $czas=$_POST['czas'];
        $sql="UPDATE wyniki SET dataUstanowiena='$data' AND wynik='$czas'";
        $query=mysqli_query($connect, $sql);
        mysqli_close($connect);
    }*/
?> 