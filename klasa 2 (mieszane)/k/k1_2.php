<h2>Podaj ID użytkownika: </h2>
<form action="" method="post">
    <input type="number" name="numer"> 
    <input type="submit" value="Wyświetl">
</form>
<?php
    if(!empty($_POST['numer']))
    {
        $jeden=1;
        $connect=mysqli_connect("localhost","root","","dane");
        $numer=$_POST['numer'];
        $sql="SELECT imie,nazwisko,tytul,tresc FROM uzytkownik LEFT JOIN ogloszenie ON uzytkownik.id=ogloszenie.uzytkownik_id WHERE uzytkownik.id='$numer'";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        {
            if($jeden>0)
            {
                echo "Ogłoszenia użytkownika $rekord[0] $rekord[1]:";
                $jeden--;
            }
            if($rekord[2]!=NULL)
            { echo "<h4>$rekord[2]</h4> <p>$rekord[3]</p> <hr>"; }
            else
            { echo "<h4>Brak ogłoszeń</h4>"; }
        }
        mysqli_close($connect);
    }
?>