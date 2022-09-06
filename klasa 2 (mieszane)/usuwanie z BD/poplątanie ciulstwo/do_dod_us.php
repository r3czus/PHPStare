<?php //PROJEKT OPUSZCZONY, BŁĄD FORM, ZOSTAWIĆ W SPOKOJU
    if( !empty($_POST['tel']) && !empty($_POST['email']) && !empty($_POST['tytul'])  && !empty($_POST['tresc']) )
    {
        $connect=mysqli_connect("localhost","root","","baza2");
        $tel=$_POST['tel'];
        $email=$_POST['email'];
        $sql="SELECT * FROM uzytkownik WHERE telefon LIKE '$tel' AND email LIKE '$email'";
        $query=mysqli_query($connect,$sql);
        if($rekord=mysqli_fetch_array($query))
        {
            $id_u=$rekord[0];
            $tytul=$_POST['tytul'];
            $tresc=$_POST['tresc'];
            $sql="INSERT INTO ogloszenie (`id`,`uzytkownik_id`,`kategoria`,`podkategoria`,`tytul`,`tresc`) VALUES (NULL, '$id_u', '1', '1', '$tytul', '$tresc')";
            mysqli_query($connect,$sql);

            $sql="SELECT tytul,tresc,id FROM ogloszenie WHERE uzytkownik_id='$id_u'";
            $query=mysqli_query($connect,$sql);
            echo "<table border='2px solid black'>";
            while($rekord=mysqli_fetch_array($query))
            {
                echo "<tr> <td><h3>$rekord[0]</h3></td> <td><p>$rekord[1]</p></td> <td><form method='post'><input type='submit' value='Usuń'><input type='hidden' value='$rekord[2] name='usun'></form></td> </tr>";
            }
            echo "</table>";
            if(isset($_POST['usun']))
            {
                $id=$_POST['usun'];
                $sql="DELETE FROM ogloszenie WHERE ogloszenie.id='$id'";
                mysqli_query($connect,$sql);
            }
        }
        mysqli_close($connect);
    }
?>