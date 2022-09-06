<?php
$liczba=17305;
$operacyjna=$liczba; //Będę operował na operacyjnej, by zachować $liczbę do wypisywania w IFie.
$piatka=$operacyjna%10; //Bierzemy resztę z dzielenia przez 10, innymi słowy bierzemy ostatnią cyfrę z operacyjnej.
$operacyjna=intval($operacyjna/10); //Dzielimy operacyjną na dziesięć i odcinamy przecinkek i wartość za nim, innymi słowy uszczuplamy operacyjną o ostatnią cyfrę.
$zero=$operacyjna%10; //Robimy to samo co przy $piątce, ale bierzemy przedostatnią cyfrę z oryginalnej liczby.
if($piatka==5 && $zero==0) //Sprawdzamy czy tą ostatnią cyfrą jest 5 ORAZ czy tą przedostatnią (ostatnią po odcięciu oryginalnej ostatniej) jest 0.
{
    echo "Liczba $liczba TAK, kończy się cyframi 05.";
}
else
{
    echo "Liczba $liczba NIE, nie kończy się cyframi 05.";
}
?>