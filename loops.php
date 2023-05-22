<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


        // while
        $index = 0;
        while($index <= 10){
            echo $index . "<br/>";
            $index++;
        }

        $index = 0;
        // do-while 
        do{
            echo $index . "<br/>";
            $index++;
        }while($index <= 10);


        // for loop

        for($index = 0; $index <=10 ; $index++){
            echo $index . "<br/>";
        }

        // for each

        $array = array("First" , "Second" , "Third");


        foreach($array as $data){
            echo $data . "<br/>";
        }

         
        

    ?>
</body>
</html>