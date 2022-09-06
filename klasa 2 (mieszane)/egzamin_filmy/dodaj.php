<?php
    $tytul=$_POST['tytul'];
    $gatunek=$_POST['gatunek'];
    $rok=$_POST['rok'];
    $ocena=$_POST['ocena'];
    $connect=mysqli_connect("localhost","root","","dane");
    $sql="INSERT INTO filmy (id, gatunki_id, rezyserzy_id, tytul, rok, ocena) VALUES (NULL, '$gatunek', '', '$tytul', '$rok', '$ocena')";
    mysqli_query($connect,$sql);
    echo "Film $tytul został dodany do bazy";
    mysqli_close($connect);
?>

<?php
$tytul=$_POST['tytul'];
$gat=$_POST['gat'];
$rok=$_POST['rok'];
$ocena=$_POST['ocena'];
$connect=mysqli_connect("localhost","root","","filmoteka");
$zapytanie="INSERT INTO filmy (id, gatunki_id, rezyserzy_id, tytul, rok, ocena) VALUES (NULL, $gat, '', $tytul, $rok, $ocena)";
mysqli_query($connect,$zapytanie);
mysqli_close($connect);
echo "Film $tytul został dodany do bazy";
?>