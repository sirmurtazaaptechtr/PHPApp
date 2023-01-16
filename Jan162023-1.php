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
        echo "my php code is working";
        $x = 5; // global scope
        $a = 12;
        $b = 13;
        $result = 0;
        function myTest() {
            global $x,$a,$b;
            $y = 10;
            // using x inside this function will generate an error
            echo "<p>Variable x inside function is: $x</p>";
            echo "<p>Variable y inside function is: $y</p>";
            echo "<p>Variable a inside function is: $a</p>";
            echo "<p>Variable b inside function is: $b</p>";
        }
        myTest();
        echo "<p>Variable x outside function is: $x</p>";
        echo "<p>Variable y outside function is: $y</p>";
        echo "<p>Variable a outside function is: $a</p>";
        echo "<p>Variable b outside function is: $b</p>";
        function myTest2() {
            global $result;
            $GLOBALS['result'] = $GLOBALS['a'] + $GLOBALS['b'];
        }
          
        myTest2();
        echo $result; // outputs 25

        function myTest3() {
            static $num = 0;
            $num++;
            echo "<br>$num";
        }
        echo "<p>Variable num outside function is: $num</p>";
        myTest3();
        echo "<br>bohat sara code ..";
        myTest3();
        myTest3();
        myTest3();
        myTest3();
        myTest3();

        echo "<h2>PHP is Fun!</h2>";
        echo "Hello world!<br>";
        echo "I'm about to learn PHP!<br>";
        echo "This ", "string ", "was ", "made ", "with multiple parameters.";        
    ?>
    
</body>
</html>