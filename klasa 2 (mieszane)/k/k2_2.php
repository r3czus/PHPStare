<h1>Usuwanie</h1>
<form action="" method="post">
<?php
    $connect=mysqli_connect("localhost","root","","bazaaa");
    $sql="SELECT id,dataUstanowienia,wynik FROM wyniki";
    $query=mysqli_query($connect,$sql);
    while($rekord=mysqli_fetch_array($query))
    {
        echo "<input type='checkbox' name='box[]' value='$rekord[0]'> <strong>Data:</strong> $rekord[1] <strong>Wynik:</strong> $rekord[2] <br>";
    }
    mysqli_close($connect);
?> <br>
<input type="submit" value="Usuń">
</form>
<?php
    if(isset($_POST['box']))
    {
        $box=$_POST['box'];
        $connect=mysqli_connect("localhost","root","","bazaaa");
        for($i=0;$i<count($box);$i++)
        {
            $sql="DELETE FROM wyniki WHERE id='$box[$i]'";
            mysqli_query($connect,$sql);
        }
        mysqli_close($connect);
        header("location:k2_2.php");
    }
?>