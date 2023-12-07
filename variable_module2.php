<?php

function getfuctarial(int $a) : int {
    for ( i=1; i<$a; i++){
        $a=$a*i;
    }
    return $a;
}

getfuctarial(5);