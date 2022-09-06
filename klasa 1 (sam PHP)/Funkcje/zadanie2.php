<form action="" method="get">
    Podaj liczbę: <input type="number" name="liczba2"> <br> <br>
    <input type="submit" value="Sprawdź">
</form>
<?php //Więszkosć elementów jest bliźniaczo podobna jak w zadaniu pierwszym, skomentuję tylko rzeczy nowe.
    function liczbcyfr($liczba2)
    {
        $dlugosc2=strlen($liczba2);
        $pkt=0; //Tworzymy zmienną zbierającą ilość punktów parzystości.
        for($i=0;$i<$dlugosc2;$i++)
        {
            $cyfra2=$liczba2%10;
            if($cyfra2%2==0) //Jeżeli odcięta cyferka jest parzysta - dodaj punkt do licznika (dodaj 1 do zmiennej $pkt).
            { $pkt++; }
            $liczba2/=10;
        }
        echo 'Tyle jest cyfr parzystych w liczbie '.$_GET['liczba2'].": $pkt";
    }
    if(!empty($_GET['liczba2'])) //Stosuję inną funkcję wbudowaną do sprawdzania pustości, ponieważ będę wypisywał efekty pracy iteracji razem z tekstem, który w przypadku pustego inputa wygląda po prostu słabo, lepiej żeby wyświetlił sie stosowny komunikat.
    { liczbcyfr($_GET['liczba2']); }
    ?>