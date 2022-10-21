<?php 

$n = readline("veuillez saisir un nombre : ");
$s = 0;

for ($i=1; $i <= $n; $i++) { 
    $s = $s + $i;
    
    if ($i < $n) {
        echo $i ."+";    
    }else {
        echo $i;
    }
    
}
echo "=".$s;