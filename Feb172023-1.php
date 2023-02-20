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
        function avg2Nums($num1,$num2)
        {
            $sum = $num1+$num2;
            $avg = $sum/2;

            return $avg;
        }

        if($_SERVER["REQUEST_METHOD"] == "POST")
        {
            $a = $_POST['num1'];
            $b = $_POST['num2'];           

            $result = avg2Nums($a,$b);
            
            echo("<br>The average of ".$a." and ".$b." is ".$result);
        }

        // $a = 11;
        // $b = 22;   
        
        // echo("<br>The average of ".$a." and ".$b." is ".avg2Nums($a,$b));
        
        // $a = 25;
        // $b = 50;
        
        // echo("<br>The average of ".$a." and ".$b." is ".avg2Nums($a,$b));   
        
        // $a = 75;
        // $b = 69;
        
        // echo("<br>The average of ".$a." and ".$b." is ".avg2Nums($a,$b));    
    ?>

    <form action="feb172023-1.php" method="post">
        <label for="num1">Enter First Number :</label>
        <input type="number" name="num1" id="num1">
        <br><br>
        <label for="num2">Enter Second Number :</label>
        <input type="number" name="num2" id="num2">
        <br><br>
        <input type="submit" value="Average">
        <input type="reset" value="Clear">
    </form>    
    
</body>
</html>