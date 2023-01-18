<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Types in PHP</h1>
    <?php
        $x = "Hello world!";
        $y = 'Hello world!';

        echo $x."<br>".$y."<br>";  
        var_dump($x);
        echo "<br>";     
        $data =  "Syed Murtaza Hussain"; 
        var_dump($data);
        echo "<br>";     
        $data =  234; 
        var_dump($data);
        echo "<br>";     
        $data =  23.4; 
        var_dump($data);
        echo "<br>";     
        $data =  true; 
        var_dump($data);
        echo "<br>";     
        $data =  null; 
        var_dump($data);
        echo "<br>";     
        $data =  ["Khurram",21,"Mani",18,"Ammar",19,"Sakina",20]; 
        var_dump($data);
        echo "<br>";     
        $cars = array("Volvo","BMW","Toyota");
        var_dump($cars);
        echo "<br>";
        class myClass {
            public $prop1 = "property 1";
            public $prop2 = "property 2";

            public function __construct($prop1, $prop2) {
                $this->prop1 = $prop1;
                $this->prop2 = $prop2;
            }

            public function fun1 () {
                               
            }
            public function fun2 () {
                
            }
        }
        $obj1 = new myClass("Abdullah","Junaid");        

        echo $obj1->prop1;
        echo "<br>";
        echo $obj1->prop2;
        echo "<br>";

        var_dump($obj1);
    ?>
    
</body>
</html>