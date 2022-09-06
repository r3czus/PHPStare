<?php
    //setcookie("nazwa","wartość","czas");
    //$_COOKIE['nazwa'];
    if(isset($_COOKIE['byl']))
    { echo "Witamy ponownie!"; }
    else
    {
        echo "Witamy po raz pierwszy"; 
        setcookie("byl","tu",time()+30*24*60*60); //Od teraz (w sekundach) dodajemy miesiąc (też w sekundach); time() daje liczbę sekund od 1 stycznia 1970 roku.
    }
?>