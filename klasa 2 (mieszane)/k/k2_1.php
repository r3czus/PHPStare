<h1>Dodaj ogłoszenie</h1>
<form action="" method="post">
<h3>Wpierw podaj swoje dane</h3>
email: <input type="text" name="email"> <br> <br>
nr tel.: <input type="number" name="tel"> <br> <br> <hr>
Tytuł: <input type="text" name="tytul"> <br> <br>
Treść: <textarea name="tresc"></textarea> <br> <br>
<input type="submit" value="Dodaj">
</form>
<?php
    if( !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['tytul']) && !empty($_POST['tresc']) )
    {
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $tytul=$_POST['tytul'];
        $tresc=$_POST['tresc'];
        $uzyt=0;
        $connect=mysqli_connect("localhost","root","","baza2");
        $sql="SELECT id,telefon,email,imie FROM uzytkownik";
        $query=mysqli_query($connect,$sql);
        while($rekord=mysqli_fetch_array($query))
        {
            if( $rekord[1] == $tel && $rekord[2] == $email )
            {
                echo "Witaj $rekord[3]!";
                $uzyt=$rekord[0];
            }
        }
        if($uzyt>0)
        {
            $sql="INSERT INTO ogloszenie (`id`,`uzytkownik_id`,`kategoria`,`podkategoria`,`tytul`,`tresc`) VALUES (NULL, '$uzyt', '1', '1', '$tytul', '$tresc')";
            mysqli_query($connect,$sql);
        }
        else
        { echo "Nie ma takiego użytkownika :/"; }
        mysqli_close($connect);
    }
?>