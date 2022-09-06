<?php
    function jakas()
    {
        $a=34; //To zmienna lokalna.
        $a++;
        return $a; //return przerywa wykonywanie funkcji i zwraca wartość.
        echo $a; //nigdy nie wyjdzie
    }
    echo jakas();
    echo "<br>";
    //echo $a; //niezdefiniowana
    $n=2;
    $k=10;
    function pokaz()
    {
        global $n;
        echo "zmienna $n<br>";
        echo $GLOBALS['k']."<br>";
    }
    pokaz();
    print_r($GLOBALS);
    function licznik_wywolan()
    {
        static $i=1; //bez static by wszędzie było 1, dzieki static $i jest pamiętane.
        echo "funkcja wywołana $i razy<br>";
        $i++;
    }
    licznik_wywolan();
    licznik_wywolan();
    licznik_wywolan();
    licznik_wywolan();
    function sumuj_cos($a,$b) //Przekazywanie argumentów przez wartość
    {
        $a++;
        $b++;
        $b++;
        return $a+$b;
    }
    echo sumuj_cos(3,7)."<br>";
    $x=12;
    $y=9;
    echo sumuj_cos($x,$y)."<br>x $x<br>y $y<br>";
    function sumuj_cos_jeszcze(&$a,&$b) //Przekazywanie przez referencję. tak, to wskaźnik...
    {
        $a++;
        $b++;
        $b++;
        return $a+$b;
    }
    $a=3;
    $b=7;
    echo sumuj_cos_jeszcze($a,$b)."<br>";
    echo "$a $b"; //a i b zostały "zepsute" przez funkcję

?>