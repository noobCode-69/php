<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <form>
        <input type="text" name="num1" placeholder="Number 1" />
        <input type="text" name="num2" placeholder="Number 2" />
        <select name="operator">
            <option value="add">Add</option>
            <option value="subtract">Subtract</option>
            <option value="multiply">Multiply</option>
            <option value="divide">Divide</option>
        </select>
        <br/>
        <button type="submit" name="submit" value="submit">Calculate</button>
    </form>
    <p>The answer is:  
        <?php
            if(isset($_GET['submit'])){
                $result1 = $_GET['num1'];
                $result2 = $_GET['num2'];
                $opeator = $_GET['operator'];
                switch($opeator){
                    case "add" :
                        echo $result1 + $result2;
                        break;
                    case "subtract":
                        echo $result1 - $result2;
                        break;
                    case "multiply":
                        echo $result1 * $result2;
                        break;
                    case "divide":
                        echo $result1 / $result2;
                        break;
                }
            }
            else {
                echo "Fill the form first!!";
            }
        ?>
    </p>
</body>

</html>