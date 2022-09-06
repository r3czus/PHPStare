<body>
    <form action="" method="get">
        Podaj dolną granicę zakresu: <input type="number" name="dol"> <br><br>
        Podaj górną granicę zakresu: <input type="number" name="gora"> <br><br>
        <input type="submit" value="Losuj">
    </form>
    <?php
        if(empty($_GET['dol']) || empty($_GET['gora'])) //Zabezpieczenie przed brakiem danych potrzebnych do losowania.
        { echo 'Czegoś tu brakuje, dopisz co trzeba :)'; }
        else
        {
            $x=$_GET['dol']; //Pobieramy obie liczby z inputów.
            $y=$_GET['gora'];
            if($_GET['dol']<$_GET['gora']) //Gdy wszystko się zgadza (pierwsza liczba istnieje i jest mniejsza od drugiej liczby, która też istnieje) to...
            {
                $los=rand($x,$y); //...losujemy liczbę z przedziału wybranego przez Użytkownika.
                echo "Losowa liczba z przedziału $x i $y to: $los";
            }
            else if($_GET['dol']>$_GET['gora']) //Gdy nasz przedział rozpoczyna się liczbą większą od kończącej - wypisz stosowny komunikat.
            { echo 'Dolna granica musi być mniejsza od górnej, głuptasku :/'; }
            else if($_GET['dol']==$_GET['gora']) //Gdy nasze liczby są równe to nie ma przedziału, a więc nie ma sensu losować
            {  echo "Liczby $y i $x są równe, a nie mają być :("; }
        }
    ?>
</body>