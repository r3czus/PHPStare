<?php
    if(isset($_COOKIE['ile']))
    { 
        echo "Witamy ponownie!";
        $i=$_COOKIE['ile'];
        $i++;
        setcookie("ile",$i,time()+60*60);
        echo "<br><br>Jesteś u nas $i raz!";
    }
    else
    {
        echo "Witamy po raz pierwszy"; 
        setcookie("ile",1,time()+30*24*60*60); //Wartość wynosi na początku 1.
    }
?>