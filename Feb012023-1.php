<?php declare(strict_types=1);?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
</head>

<body>
    <h1>PHP Functions</h1>

    <?php      

        $users = array("Shuja ur Rehman","Muhammad Khurram","Abdul Rehman","Rabia Asif","Sakina Qasim");

        function myFun($person){
            echo "<p>Dear ".$person.", Have a nice Day!</p>";
        }

        myFun("Shuja ur Rehman");
        myFun("Khurram");
        myFun("Mani");
        myFun("Rabia");
        myFun("Sakina");

        array_push($users,"Abdul Haseeb","Jari Kazmi");

        foreach($users as $user)
        {
            myFun($user);
        }

        function addTwoNumbers(int $num1, int $num2)
        {
            echo $num1+$num2."<br>";
        }
        
        addTwoNumbers(5,15);
        // addTwoNumbers(5,"15");
    
        function sum(int $a, int $b) {
            return $a + $b;
        }
        var_dump(sum(1, 2));        
        // var_dump(sum(1.5, 2.5));
        echo "<br>";
        function setHeight(int $minheight = 50) {
            echo "The height is : $minheight <br>";
        }
        setHeight(350);
        setHeight(); // will use the default value of 50
        setHeight(135);
        setHeight(80);

        function squarer(int $num = 1) : int{
            return $num*$num;
        }

        $result = squarer(5);        
        echo $result."<br>";

        echo squarer(7)."<br>";

        
        function theSwap($a,$b)
        {
            
            echo "inside (".$a.", ".$b.")<br>";
            
            $temp = $a;
            $a = $b;
            $b = $temp;
            
            echo "inside(".$a.", ".$b.")<br>";
        }

        $x = 10;
        $y = 20;

        echo "outside (".$x.", ".$y.")<br>";

        theSwap($x,$y);

        echo "outside (".$x.", ".$y.")<br>";

        ?>



</body>

</html>