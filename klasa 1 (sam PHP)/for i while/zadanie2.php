<?php
    $sumka=0;
    for($i=0;$i<20;$i++) //Dokładnie 20 iteracji = dokładnie 20 losowych liczb.
    { $sumka+=rand(50,100); } //Od razu dodajemy do sumy świeżo wylosowaną liczbę z przedziału od 50 do 100.
    echo "Suma dwudziestu losowych liczb z przedziału od 50 do 100 wynosi: $sumka";
?>