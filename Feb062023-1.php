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
        date_default_timezone_set("Asia/Karachi");
        $dt = date("l, M Y-m-d h:i:sa");

        echo $dt;
        echo "Welcome to associative arrays in php ";
        // These are called indexed arrays:
        // $arr = array('this', 'that', 'what');
        // echo $arr[0];
        // echo $arr[1];
        // echo $arr[2]; 

        // Associative arrays
        $favCol = array('Mani' => 'blue','Khurram'=> 'hotpink',
                            'Rabia'=> 'purple', 'Sakina'=>'red' );

        // echo $favCol['Mani'];
        // echo "<br>";
        // echo $favCol['Khurram'];
        // echo "<br>";
        // echo $favCol[Sakina]; 
        foreach ($favCol as $person => $color) {
            echo "<br>Favorite color of $person is $color";
        }
    ?>
</body>
</html>