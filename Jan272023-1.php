<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>PHP Operators</h1>
    <?php
        $x = 0;
        $y = 20;
        $z = 30;

        echo $x.", ".$y.", ".$z;
        
        // if($y > 10)
        // {
        //     $x = $z;
        // }
        // else
        // {
        //     $x = $y;
        // }

        $x = $y > 10 ? $z : $y;

        echo "<br>".$x.", ".$y.", ".$z;
        
        $p = null;
        
        $q = $p??0;
        
        $r = $q + 10;
        
        echo "<br>".$p.", ".$q.", ".$r;

        $num = 12;

        if($num % 2 == 0)
        {
            echo "<br>".$num." is Even";
        }
        else
        {
            echo "<br>".$num." is Odd";
        }

        $marks = 480;

        $per = $marks/850*100;

        if($per >= 80)
        {
            echo "<br>Grade = A+";
        }elseif($per >= 70)
        {
            echo "<br>Grade = A";
        }elseif($per >= 60)
        {
            echo "<br>Grade = B";
        }elseif($per >= 50)
        {
            echo "<br>Grade = C";
        }elseif($per >= 40)
        {
            echo "<br>Grade = D";
        }else
        {
            echo "<br>Grade = F";
        }


        $op = 99;

        switch ($op)
        {
            case 1:
                echo "<br>Option 1 is Selected";
            break;
            case 2:
                echo "<br>Option 2 is Selected";
            break;
            case 3:
                echo "<br>Option 3 is Selected";
            break;
            case 4:
                echo "<br>Option 4 is Selected";
            break;
            case 5:
                echo "<br>Option 5 is Selected";
            break;
            
            default:
                echo "<br>Invalid Input!";
            break;
        }
        $favcolor = "red";
        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
            break;
            case "blue":
                echo "Your favorite color is blue!";
            break;
            case "green":
                echo "Your favorite color is green!";
            break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
            break;
}





    ?>
</body>
</html>