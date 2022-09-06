<form action="" method="post">
    Podaj liczbę: <input type="number" name="liczba3"> <br> <br>
    <input type="submit" value="Sumuj">
</form>
<?php //Podobnie jak w zadaniu drugim, skomentuję tylko nowe rzeczy,
    function sumacyfr($liczba3)
    {
        $dlugosc3=strlen($liczba3);
        $suma=0; //Tworzymy zmienną zbierającą i sumującą cyfry odcięte od liczby z argumentu funkcji.
        for($i=0;$i<$dlugosc3;$i++)
        {
            $cyfra3=$liczba3%10;
            $suma+=$cyfra3; //Dodajemy odciętą cyferkę do sumy.
            $liczba3/=10;
        }
        echo 'Suma cyfr w liczbie '.$_POST['liczba3']." wynosi: $suma";
    }
    if(!empty($_POST['liczba3']))
    { sumacyfr($_POST['liczba3']); }
?>