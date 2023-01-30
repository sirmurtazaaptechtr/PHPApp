<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Loops</h1>
    <?php
        $tab = 21;
        $st = 1;
        $ed = 10;
        
        echo "<h2>Displaying table of ".$tab."</h2>";

        // for($x=$st;$x<=$ed;$x++)
        // {
        //     echo($tab." X ".$x." = ".$x*$tab);
        //     echo("<br>");
        // }

        // $x = $st;
        // while($x<=$ed)
        // {
        //     echo($tab." X ".$x." = ".$x*$tab);
        //     echo("<br>");
        //     $x++;
        // }

        // $x = $st;        
        // do{
        //     echo($tab." X ".$x." = ".$x*$tab);
        //     echo("<br>");
        //     $x++;
        // }while($x<=$ed);
        
        $names = array("Hussain", "Mani", "Khurram", "Rabia", "Shuja", "Sakina");
        
        echo "<ol>";
        foreach($names as $name)
        {
            echo "<li><h3>".$name."</h3></li>";
        }
        echo "</ol>";

        $persons = array("Hussain"=>"40", "Mani"=>"18", "Khurram"=>"21", "Rabia"=>"15", "Shuja"=>"23", "Sakina"=>"20");
        foreach($persons as $person => $age) {
            echo "$person = $age<br>";
        }

        $colors = array("red", "green", "blue", "yellow");
        foreach ($colors as $value) {
            echo "$value <br>";
        }
        echo "Pehli Example <br>";
        for($cnt=1;$cnt<=10;$cnt++)
        {
            
            echo $cnt."<br>";
        }
        
        echo "Doosri Example <br>";
        for($cnt=1;$cnt<=10;$cnt++)
        {
            if($cnt == 9)
            {
                break;
            }
            echo $cnt."<br>";
        }
        
        echo "Teesri Example <br>";
        for($cnt=1;$cnt<=10;$cnt++)
        {
            if($cnt == 9)
            {
                continue;
            }
            echo $cnt."<br>";
        }
        echo "Choti Example <br>";
        for($cnt=1;$cnt<=10;$cnt++)
        {
            if($cnt%2 != 0)
            {
                continue;
            }
            echo $cnt."<br>";
        }



    ?>
    
</body>
</html>