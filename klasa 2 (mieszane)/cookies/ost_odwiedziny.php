<?php
    if(isset($_COOKIE['kiedy']))
    { 
        echo "Witamy ponownie!";
        $teraz=time();
        $kiedys=$_COOKIE['kiedy'];
        $ile=$teraz-$kiedys;
        setcookie("kiedy",time(),time()+60*60);
        echo "<br><br>Byłeś u nas $ile sekund temu!";
    }
    else
    {
        echo "Witamy po raz pierwszy"; 
        setcookie("kiedy",time(),time()+30*24*60*60);
    }
?>