<?php
    $wpisana=5; //Nasza $wpisana z polecenia.
    $losowa=0; //Zmienna, która będzie zawierać wylosowaną liczbę.
    $licznik=0; //Zmienna, która będzie rosnąć o 1 przy każdym losowaniu, a na końcu pokaże, za którym razem udało się wylosować $wpisaną.
    do{ 
        $losowa=rand(0,10); //Losujemy i wrzucamy do $losowej.
        $licznik++; //Dodajemy 1 do $licznika, czyli, na swój sposób, zapisujemy kolejny numer losowania.
    }
    while($wpisana!=$losowa); //Warunek jest spełniony ($wpisana nie równa się $losowej, a więc "losowator" nie trafił w naszą $wpisaną) -  ponownie wykonuje działanie z "do". Kiedy warunek nie będzie spełniony ("losowator" trafi w naszą $wpisaną) - przestaje wykonywać "do" i idzie dalej.
    echo "Wylosowano liczbę $wpisana za $licznik. razem"; //Wypisanie, za którym razem wylosowano $wpisaną.
?>