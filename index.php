<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>


    <form method="GET">
        <input type="text" name="person">
        <button>Submit</button>
    </form>

    <div>
        <?php
            // $name = $_GET['person'];
            // echo "My name is " . $name;


            //Functions

            // 1) in-nbuilt functions
            echo strlen("Hi There!") . "\n";
            echo strpos("Hi There" , "Hi");

            // Data types in PHP
            $name = "This is my string!";
            $name = 20;
            $name = 20.54;
            $name = FALSE;
            $name = array("Md" , "Sohel" , 1);
            echo $name[0];

            // operators in php

            echo 5+5;

            // comparision

            $x = 5;
            $y = 5;

            if($x == $y){
                echo "True!";
            }
            else {
                echo "False!";
            }

        ?>
    </div>
</body>
</html>