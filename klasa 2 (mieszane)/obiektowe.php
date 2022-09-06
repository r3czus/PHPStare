<?php
    class osoba
    {
        protected $id,$imie,$nazwisko; //własności i mietody mogą być typu public(domyślny),private lub protected
        //przy protected zmienne są dostępne w klasie bazowej i potomnych
        function __construct() //Konstruktor jest wywoływany automatycznie przy tworzeniu nowego obiektu.
        {
            $this->imie="Jakub";
            $this->nazwisko="Kowalski";
        }
        function nadaj_imie($im) //setter
        {
            $this->imie=$im;
        }
        function pobierz_imie() //getter
        {
            return $this->imie;
        }
    }//hermetyzacja polega na zamknięciu klasy na zewnętrzne zmiany
    $kasia=new osoba(); //Nowy obiekt klasy osoba (!)
    echo $kasia->pobierz_imie();
    echo "<br>";
    $kasia->nadaj_imie("Katarzyna");
    echo $kasia->pobierz_imie();
    echo "<br>";

    class uczen extends osoba //uczen dziedziczy własności i metody z osoby
    {
        private $klasa;
        function __construct()
        {
            $this->klasa=1;
            parent::__construct(); //Musimy dołączyć kontruktor z nadrzędnej klasy, bo nowy konstruktor w podrzędnej bazie zastępuje całkowicie ten z nadrzędnej.
        }
        function wypisz_imie_ucznia()
        {
            echo $this->imie;
        }
        function z_ktorej_klasy()
        {
            return $this->klasa;
        }
        function zdal()
        {
            $this->klasa++;
        }
        //jeżeli nie zdefiniujemy tutaj nowego konstruktora to dziedziczy się i wykonuje się konstruktor z klasy nadrzędnej
    }
    $jas=new uczen();
    echo $jas->pobierz_imie();
    echo "<br>";
    echo $jas->wypisz_imie_ucznia();
    echo "<br>";
    echo $jas->z_ktorej_klasy();
    echo $jas->zdal();
    echo "<br>";
    echo $jas->z_ktorej_klasy();
    $jas->nadaj_imie("Jan");
    echo "<br>";
    $jas->wypisz_imie_ucznia();

    class nauczyciel extends osoba
    {

    }
    class zespol_klasowy
    {
        public $nazwa;
        private $uczniowie=[];
        function __construct()
        {
            $this->nazwa="1a";
        }
        function dodaj_ucznia_do_klasy($uczen)
        {
            array_push($this->uczniowie,$uczen);
        }
        function lista_uczniow()
        {
            foreach($this->uczniowie as $uczen)
            {
                echo $uczen->pobierz_imie()."<br>";
            }
        }
    }
    $gosia=new uczen();
    $gosia->nadaj_imie("Agata");
    $klasa2a=new zespol_klasowy();
    $klasa2a->dodaj_ucznia_do_klasy($gosia);
    $klasa2a->dodaj_ucznia_do_klasy($jas);
    echo "<h3>Lista uczniów klasy 2a</h3>";
    $klasa2a->lista_uczniow();
?>