<?php
$tab_asoc=['jablka'=>4,"gruszki"=>5,"sliwka"=>10];
print_r($tab_asoc);
echo "<hr>";
foreach($tab_asoc as $klucz=> $wartosc)
{ echo "Tablica[$klucz]=$wartosc<br>"; }
echo $tab_asoc['gruszki'];
echo "<br>";
$tab1=[12,6,64,61,42,89,23];
print_r($tab1);
echo "<br>";
sort($tab1);
print_r($tab1);
echo "<br>";
rsort($tab1);
print_r($tab1);
echo "<br>";
print_r($tab_asoc);
//sort($tab_asoc);
ksort($tab_asoc); //wg kluczy alfabetycznie
echo "<br>";
print_r($tab_asoc);
asort($tab_asoc); //Normalnie
echo "<br>";
print_r($tab_asoc);
krsort($tab_asoc); //wg kluczy alfabetycznie i odwrotnie
echo "<br>";
print_r($tab_asoc);
echo "<br>";
$w=0;
foreach($tab_asoc as $wartosc)
{ $w+=$wartosc; }   
echo $w;
$max=0;
foreach($tab_asoc as $wartosc)
{ 
    if($wartosc>$max)
    { $max=$wartosc; }  
}   
echo "<br>".$max ;
$min=min($tab_asoc);
foreach($tab_asoc as $wartosc)
{ 
    if($wartosc<$min)
    { $min=$wartosc; }  
}   
echo "<br>".$min ;
?>