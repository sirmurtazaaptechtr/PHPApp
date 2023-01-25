<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            font-family: cursive;
        }
    </style>
</head>
<body>

    <?php
        echo "<h1>Php Strings</h1>";
        echo "php is working";
        $str = "Syed Murtaza Hussain";
        echo "<br>".$str;

        $len = strlen($str);
        echo "<br>".$str." has ".$len." characters in it.";

        $wc = str_word_count($str);
        echo "<br>".$str." has ".$wc." words in it.";
        
        $revStr = strrev($str);
        echo "<br>Mirror of ".$str." is ".$revStr.".";
        
        $pos = strpos($str,"Hussain");
        echo '<br>"Hussain" is at '.$pos." in ".$str.".";
        
        $rep = str_replace("Hussain","Shah",$str);
        echo '<br>Replaced Text is '.$rep.".";

        echo "<br>".addcslashes($str,'A..Z');
        echo "<br>".addcslashes($str,'a..z');
        echo "<br>".addcslashes($str,'a..g');

        echo "<h1>PHP Numbers</h1>";

        $x = 5985;
        echo "<br>";
        var_dump($x);        
        echo "<br>".is_int($x);
        
        $x = 59.85;
        echo "<br>";
        var_dump($x);
        echo "<br>".is_int($x);
        echo "<br>".is_float($x);
        
        $x = 1.9e411;
        echo "<br>";
        var_dump($x);
        
        $x = acos(8);
        echo "<br>";
        var_dump($x);

        echo "<br>".pi();

        echo "<br>".min(0, 150, 30, 20, -8, -200);
        echo "<br>".max(0, 150, 30, 20, -8, -200);

        echo "<br>".abs(-6.7);

        echo "<br>".sqrt(64);

        echo "<br>".round(0.60);
        echo "<br>".round(0.49);

        echo "<br>".rand();

        echo "<br>".rand(10, 100)."<br>";
        
        echo(pow(2,4) . "<br>");
        echo(pow(-2,4) . "<br>");
        echo(pow(-2,-4) . "<br>");
        echo(pow(-2,-3));

        define("GREETING", "Welcome to W3Schools.com!");
        echo "<br>".GREETING;

        define("cars", ["Alfa Romeo","BMW","Toyota"]);
        echo "<br>".cars[0];

        


    ?>    

</body>
</html>