<?php
    function silnia($x)
    {
        $suma=1;
        for($i=1;$i<=$x;$i++)
        { $suma*=$i; }
        return $suma;
    }
    echo "Silnia z 3: ".silnia(3)."<br>";

    function suma_cyfr($y)
    {
        $liczba=0;
        while($y>0)
        {
            $cyfra=$y%10;
            $liczba+=$cyfra;
            $y=floor($y/10);
        }
        return $liczba;
    }
    echo "Suma cyfr z 456: ".suma_cyfr(456)."<br>";

    function potega($a,$b)
    {
        $wynik=1;
        for($i=0;$i<$b;$i++)
        { $wynik*=$a; }
        return $wynik;
    }
    echo "2^3: ".potega(2,3)."<br>";

    function silnia_rek($p)
    {
        if($p<=1)
        { return 1; }
        else
        { return silnia_rek($p-1)*$p; }

    }
    echo "Silnia rekurencyjnie z 3: ".silnia_rek(3)."<br>";

    function suma_cyfr_rek($o)
    {
        if($o==0)
        { return 0; }
        else
        { return suma_cyfr_rek(floor($o/10))+$o%10; }
    }
    echo "Suma cyfr z 456 rekurencyjnie: ".suma_cyfr_rek(456)."<br>";

    function potega_rek($j,$k)
    {
        if($k==0)
        { return 1; }
        else
        { return potega_rek($j,$k-1)*$j; }
    }
    echo "2^3 rekurencyjnie: ".potega_rek(2,3)."<br>";

    function fibo($f)
    {
        if($f<=1)
        { return $f; }
        else
        { return fibo($f-1)+fibo($f-2); }
    }
    echo "f: ".fibo(11);
    //Masz niby zrobić iteracyjnie, ale xdd
?>