<?php

    $x = 5;

    function something(){
        $x = 10;
        echo $GLOBALS['x'];
    }


    something();


?>