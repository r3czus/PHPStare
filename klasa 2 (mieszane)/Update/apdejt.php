<h2>Podaj email i telefon</h2>
<form action="" method="post">
Email: <input type="email" name="email"> <br> <br>
Telefon: <input type="tel" name="tel"> <br> <br>
<input type="submit" value="Wypisz">
</form>
<hr>
<?php
    if( !empty($_POST['email']) && !empty($_POST['tel']) )
    {
        $email=$_POST['email'];
        $tel=$_POST['tel'];
        $connect=mysqli_connect("localhost","root","","bazaaa");
        $sql="SELECT * FROM uzytkownik WHERE email='$email'";
        $query=mysqli_query($connect,$sql);
        if($rekord=mysqli_fetch_array($query))
        {
            echo "<form action='' method='post'>";
            echo "Imię: <input type='text' value='$rekord[1]' name='imie'> <br><br>"; 
            echo "Nazwisko: <input type='text' value='$rekord[2]' name='naz'> <br><br>"; 
            echo "Telefon: <input type='tel' value='$rekord[3]' name='telefon'> <br><br>"; 
            echo "E-mail: <input type='email' value='$rekord[4]' name='mail'> <br><br>"; 
            echo "<input type='submit' value='Zaktualizuj'>";
            echo "<input type='hidden' value='$rekord[0]' name='id'>";
            echo "</form>";
        }
        else
        { echo "Nie mamy takiego użytkownika. Podaj poprawne dane lub idź sobie."; }
        mysqli_close($connect);
    }
    if( isset($_POST['id']) )
    {
        $connect=mysqli_connect("localhost","root","","bazaaa");
        $id=$_POST['id'];
        $imie=$_POST['imie'];
        $naz=$_POST['naz'];
        $telefon=$_POST['telefon'];
        $mail=$_POST['mail'];
        $sqll="UPDATE `uzytkownik` SET `imie` = '$imie', `nazwisko` = '$naz', `telefon` = '$telefon', `email` = '$mail' WHERE `uzytkownik`.`id` = '$id'";
        mysqli_query($connect,$sqll);
        mysqli_close($connect);
    }
?>