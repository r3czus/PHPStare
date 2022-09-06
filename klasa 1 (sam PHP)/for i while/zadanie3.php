<?php
    $x=17304592; 
    $do_wypisania=$x; //Aspekt czysto kosmetyczny ($x po while'u będzie "mocno poharatane", więc robię jego bezpieczną kopię na początku).
    $sumka=0;
    while($x>1) //Nasz warunek brzmi: dopóki nasz $x jest większy od 1, tzn. dopóki ma jeszcze jakieś cyfry do wzięcia i dodania do sumy.
    {
        $sumka+=$x%10; // Do sumki dodajemy (świeżo wydzieloną z reszty z dzielenia przez 10) ostatnią cyferkę z liczby $x.
        $x=$x/10; //Dzielimy $x przez 10, tzn. przerzucamy ostatnią cyferkę za przecinek. Wtedy ta cyferka nie jest brana pod uwagę przy reszcie z dzielenia i nie wchodzi nam w drogę przy wydzielaniu kolejnej cyferki z liczby $x.
    }
    echo "Suma cyfr liczby $do_wypisania wynosi: $sumka";
?>