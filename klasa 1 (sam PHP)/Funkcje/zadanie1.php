<form action="" method="post">
    Podaj liczbę: <input type="number" name="liczba1"> <br> <br>
    <input type="submit" value="Zadziałaj">
</form>
<?php
    function cyfry($liczba1) //Definiujemy funkcję o podanej przez Panią nazwie.
    {
        $dlugosc1=strlen($liczba1); //Pobieramy długość liczby, potrzebną do iteracji.
        $ciag1=''; //Tworzymy pusty string, który będzie przechowywał dodawane do niego cyferki z gwiazdkami.
        for($i=0;$i<$dlugosc1;$i++) //Iteracja, w której wykorzystujemy długość liczby pobraną na początku funkcji.
        {
            $cyfra1=$liczba1%10; //Klasyczne odcinanie ostatniej cyferki.
            $liczba1/=10;
            $ciag1=$ciag1."*$cyfra1"; //Dodajemy do wcześniej przygotowanego stringa cyferkę oraz gwizazdkę.
        }
        echo strrev($ciag1); //Odwracamy kolejność znaków w stringu, ponieważ metoda z odcinaniem cyferek przy pomocy %10 i /10 bierze cyfry od końca liczby. Umieszczanie gwiazdek w iteracji przystosowałem do tego rozwiązania.
    }
    if(isset($_POST['liczba1'])) //Zabezpieczenie przed pustym inputem. Funkcja wywoła się tylko, gdy w inpucie coś się znajduje.
    { cyfry($_POST['liczba1']); } //Wywołujemy funkcję przy użyciu argumentu, którym jest wartość z tablicy superglobalnej $_POST, która to znalazła się tam dzięki zastosowaniu formularza i przycisku submit.
?>