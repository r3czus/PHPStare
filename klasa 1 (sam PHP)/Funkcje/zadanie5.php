<form action="" method="post">
    Podaj liczbę: <input type="number" name="liczba5"> <br> <br>
    <input type="submit" value="Sumuj silnie">
</form>
<?php //Podobnie jak w zadaniu drugim, trzecim i czwartym skomentuję tylko nowe rzeczy,
    function sumasiln($liczba5)
    {
        $sumasilni=0;
        while($liczba5>1)
        {
            $silnia=1;
            $cyfra5=$liczba5%10;
            for($i=1;$i<=$cyfra5;$i++)
            { $silnia*=$i; }
            $sumasilni+=$silnia;
            $liczba5/=10;
        }
        echo 'Suma silń cyfr z liczby '.$_POST['liczba5']." wynosi: $sumasilni";
    }
    if(!empty($_POST['liczba5']))
    { sumasiln($_POST['liczba5']); }
?>