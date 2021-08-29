<?php

function primeOrComposite($num) {
    $i = 1;
    $prime = true;
    while($i < $num) {
        $j = $i + 1;
        for ($k = 1; $k < $j; $k++) {
            if ($j % $k == 0 && $k != $j && $k != 1) {
                $prime = false;
            } else {
                $prime = true;
            }
            if(!$prime) {
                break;
            }
        }
        if($prime) {
            echo $j . " is a prime number.\n";
        } else {
            echo $j . " in a composite number.\n";
        }
        $i++;
    }
}

primeOrComposite(100);

?>
