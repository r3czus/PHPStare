<?php
    $sumka=0;
    for($i=103;$i<1000;$i+=10) //Generuję tylko i wyłącznie te liczby, które nas interesują (trzycyfrowe, dodatnie, z trójką na końcu). To trochę leniwe rozwiązanie, ale za to jakie skuteczne i pewne!
    {
        $sumka+=$i; //Dorzucamy kolejną liczbę do sumy.
        //echo "--> $i <br>";    //To taki wentyl bezpieczeństwa, by zobaczyć i upewnić się, że sumujemy odpowiednie liczby.
    }
    echo "Suma liczb dodatnich trzycyfrowych z trójką na końcu wynosi: <b>$sumka</b>";
?>