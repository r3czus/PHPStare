<body>
    <form action="" method="post"> <!--Króciutki, prościutki formularz-->
        Podaj liczbę: <input type="number" name="liczba"> <br><br>
        <input type="submit" value="Wypisz">
    </form>
    <?php
        if(empty($_POST['liczba'])) //Zabezpieczenie przed ewentualnym wykonaniem skryptu bez liczby w inpucie.
        { echo 'Pole puste, wpisz liczbę'; }
        else
        {
            echo "Cyfry z liczby ".$_POST['liczba'].":"; 
            $zbior=$_POST['liczba']; //Pobieramy liczbę z inputa.
            while($zbior>1) //Odcinanie ostatnich cyfr z liczby z inputa. Warunek jest taki a nie inny, ponieważ gdy z liczby pobieramy ostatnią cyferkę to odcinamy ją, by odczytać następną. Gdy odetniemy wszystkie cyferki to cała pierwotna liczba znajdzie się po przecinku, a więc będzie mniejsza od 1.
            {
                $cyfra=$zbior%10; //Pobieramy ostatnią cyferkę.
                $zbior/=10; //Odcinamy ostatnią cyferkę.
                echo "<li>$cyfra</li>"; //Wypisujemy ostatnią cyferkę jako element listy punktowanej.
            }
        }
    ?>
</body>