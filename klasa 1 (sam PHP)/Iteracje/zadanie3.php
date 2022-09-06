<?php
    for($i=0;$i<10;$i++) //Klasyczna pętla wykonująca się 10 razy.
    {
        $losowa=rand(0,100); //Losowanie liczby i wrzucanie jej do $losowej; używam funkcji rand (zgodnie z poleceniem).
        echo $losowa.", "; //Wypisanie $losowej, wraz z przecinkiem i spacją (porządek zawsze mile widziany).
    }
?>