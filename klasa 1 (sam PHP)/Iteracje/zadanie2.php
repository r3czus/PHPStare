<?php
    echo "<ul>"; //Otwieram listę punktowaną w HTML.
    for($i=30;$i>10;$i-=3) //Tym razem nasze $i maleje, i to o 3.
    { echo "<li>$i</li>"; } //Otwieram punkt na liście, wypisuję naszą "co trzecią" liczbę, zamykam punkt na liście.
    echo "</ul>"; //Zamykam listę punktowaną w HTML.
?>