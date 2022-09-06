<body>
    <form action="" method="post">
        Podaj pierwszą liczbę: <input type="number" name="jeden"> <br><br>
        Podaj drugą liczbę: <input type="number" name="dwa"> <br><br>
        <input type="submit" value="Porównaj">
    </form>
        <?php
            if(empty($_POST['jeden']) || empty($_POST['dwa'])) //Podobne zabezpieczenie jak w zadaniu drugim.
            { echo 'Czegoś tu brakuje, dopisz co trzeba :)'; }
            else
            {
                $x=$_POST['jeden']; //Pobieramy obie liczby z inputów.
                $y=$_POST['dwa'];
                if($x>$y) //Pierwszy przypadek różności liczb.
                { 
                    echo "Od $y do $x: <br>"; 
                    for($i=$y;$i<=$x;$i++) //Iteracja z wypisywaniem liczb z przedziału wyznaczonego przez Użytkownika.
                    { echo "$i, "; }
                }
                else if($y>$x) //To bardzo podobny skrypt do tego powyżej, jedynie mamy zamienione liczby $x i $y.
                { 
                    echo "Od $x do $y: <br>";
                    for($i=$x;$i<=$y;$i++)
                    { echo "$i, "; }
                }
                else if($x==$y) //Podobny komunikat jak w zadaniu drugim.
                { echo "Liczby $y i $x są równe, a nie mają być :("; }
            }
        ?>
    </form>
</body>