<?php

echo ("<h3>For Loop</h3>");
    for($i=1;$i<=10;$i++){
        echo "PHP : ".$i." ";
    }
echo ("<h3>REVERSE</h3><br>");
    for($j=10;$j>=1;$j--){
        echo "PHP : ".$j." ";
    }
echo"<h3>BREAK</h3><br>";
    for($i=0;;$i++){
        if ($i>10){
            break;
        }
        echo $i." ";
    }

    echo "<h3>WHILE</h3><br>";
    $x=0;
    while($x<10){
            echo($x." ");
            $x++;
    }
echo("<br><h3>DO WHILE</h3><br>");
    $y=0;
    do{
        $y++;
        print($y." ");
    }while($y < 10);

?>