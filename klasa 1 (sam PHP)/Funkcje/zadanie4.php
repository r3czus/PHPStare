<form action="" method="get">
    Podaj liczbę: <input type="number" name="liczba4"> <br> <br>
    <input type="submit" value="Silniuj">
</form>
<?php //Podobnie jak w zadaniu drugim i trzecim, skomentuję tylko nowe rzeczy,
    function silnia($liczba4)
    {
        $silnia=1; //Tworzymy zmienną przechowującą wynik naszego silniowania (wynosi 1 a nie 0, ponieważ będzie ona mnożona, a mnożenie przez 0 jest bezcelowe).
        for($i=1;$i<=$liczba4;$i++) //Tutaj argument jest tylko granicą, a której ma zatrzymać się silniowanie, a nie elementem, na którzy przeprowadzamy operację obcinania cyferek.
        { $silnia*=$i; }  //Silniujemy wcześniej stworzoną zmienną oraz liczbę z iteracji (ponownie zaczynamy od 1, a nie od 0).
        echo 'Silnia liczby '.$_GET['liczba4']." wynosi: $silnia";
    }
    if(!empty($_GET['liczba4']))
    { silnia($_GET['liczba4']); }
?>