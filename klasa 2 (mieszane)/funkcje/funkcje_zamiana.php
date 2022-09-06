<form action="" method="post">
    <input type="number" name="liczba"><br>
    <input type="number" name="druga">
    <input type="submit" value="Przelicz">
</form>
<?php
    function dz_na_dw($l)
    {
        $w="";
        while($l>0)
        {
            $r=$l%2;
            $w=$r.$w;
            $l=floor($l/2); 
        }
        return $w;
    }    
    echo dz_na_dw($_POST['liczba']);

    function dndR($p)
    {
        if($p==0)
        { return ""; }
        else 
        {
            if($p%2==0)
            { return dndR(floor($p/2))."0"; }  
            else
            {
                if($p%2==1)
                { return dndR(floor($p/2))."1"; }
            }
        }
    }    
    echo "<br>".dndR($_POST['liczba']);

    function AdoB($a,$b)
    {
        $s=0;
        if($a<$b)
        {
            while($a<=$b)
            {
                $s+=$a;
                $a++;
            }
            return $s;
        }
        else
        {
            while($a>=$b)
            {
                $s+=$a;
                $a--;
            }
            return $s;
        }
    }
    echo "<br>".AdoB( $_POST['liczba'], $_POST['druga'] );

    function AdoBR($a,$b)
    {
        if($a<$b)
        {  return $a+AdoBR($a+1,$b); }
        elseif($a>$b)
        {  return $b+AdoBR($a,$b+1); }
        else
        { return $b; }
    }
    echo "<br>".AdoBR( $_POST['liczba'], $_POST['druga'] );
?>

<!--od Mateusza:
if($a>$b)
$d = $b;
$b=$a;
$a=$d;

$c=0;
for(i i<=b i++)
$c = $c+1
return c -->