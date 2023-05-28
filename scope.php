<?php

    // in php the global variable is not available
    // directly inside a function
    $x = 5;
    function something(){
        $y = 10;
    }
    // can't access the local scope variable.
    // echo $y;
?>

