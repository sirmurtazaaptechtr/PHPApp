<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP String Functions</h1>
    <?php
        $str = '"Syed Murtaza Hussain"';
        $len = strlen($str);
        $wc = str_word_count($str);
        
        echo $str . " has ". $wc . " words and " . $len . " characters in it."; 

        $revStr = strrev($str);
        echo "<br>".$revStr;

        $pos = strpos($str,"a");
        echo "<br>".$pos;
        
        $repStr = str_replace("Murtaza Hussain","Ali Raza",$str);
        echo "<br>".$repStr;
        

        ?>
    
</body>
</html>