<?php

function getTotal(int $n) {
	return $n;
}


$n = getTotal(3);
$x = 1;
$sum = 0;
    
for ($i = 1; $i <= $n; $i++) {
	for ($j = 1; $j <= $n; $j++) {
		if ($i==$j) {
        	$sum+=$x;
        }
		echo $x." ";
        $x += 1;
	}    
    echo "\n";
}
echo "Total: ".$sum*2;
	
?>