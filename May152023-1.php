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

// JSON encoding and decoding        

        $cars = array("Suzuki","Toyota","Volvo","GMC","Cadilac","Honda","BMW","Audi");
        $carsJSON = json_encode($cars);
        echo $carsJSON . "<br>";

        $data = array("Shuja"=>23,"Khurram"=>22,"Mani"=>18,"Moiz"=>24,"Rabia"=>15);
        $dataJSON = json_encode($data);
        echo $dataJSON . "<br>";

        $myJSON = '{"Shuja":23,"Khurram":22,"Mani":18,"Moiz":24,"Rabia":15}';

        $myObj = json_decode($myJSON);        
        // echo "Shuja is " . $myObj->Shuja . " years old.<br>";        
        foreach($myObj as $key => $value){
            echo "Dear $key, you are $value years old.<br>";
        }

        $myAssocArr = json_decode($myJSON,true);
        // echo "Shuja is " . $myAssocArr['Shuja'] . " years old.<br>";
        foreach($myAssocArr as $key => $value){
            echo "Dear $key, you are $value years old.<br>";
        }

// Excepton Handeling

        function divide($number,$divisor)
        {
            if($divisor == 0){
                throw new Exception("Division by Zero",36);                
            }
            return $number/$divisor;            
        }
        try {

            echo divide(15,3) . "<br>";
            echo divide(15,0) . "<br>";
        }
        catch (Exception $ex) {
            echo "Divisor can't be Zero. <br>";                   
            echo "The exception Message is : " .  $ex->getMessage() . "<br>";
            echo "The exception Code is : " .  $ex->getCode() . "<br>";
            echo "The exception in File : " .  $ex->getFile() . "<br>";
            echo "The exception in Line number : " .  $ex->getLine() . "<br>";
            echo "The exception is : <br> $ex<br>";
        }
        finally {
            echo "The End";
        }
    ?>
</body>
</html>