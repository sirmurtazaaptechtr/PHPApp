<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Filter Name</th>
                <th>Filter ID</th>
            </tr>
        </thead>
        <tbody>
        <?php
            foreach (filter_list() as $id =>$filter) 
            {
                echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
            }
        ?>
        </tbody>
    </table>
    <?php
        $str = "<h1>Hello World!</h1>";
        $newstr = filter_var($str, FILTER_SANITIZE_STRING);
        echo $newstr;

        $int = 0;
        
        if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
            echo("<br>Integer is valid");
        } else {
            echo("<br>Integer is not valid");
        }

        $ip = "192.168.0.1";
        
        if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
            echo("<br>$ip is a valid IP address");
        } else {
            echo("<br>$ip is not a valid IP address");
        }

        $email = "john.doe@example.com";
        
        // Remove all illegal characters from email
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        // Validate e-mail
        if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            echo("<br>$email is a valid email address");
        } else {
            echo("<br>$email is not a valid email address");
        }

        $url = "https://www.w3schools.com";
        
        // Remove all illegal characters from a url
        $url = filter_var($url, FILTER_SANITIZE_URL);
        
        // Validate url
        if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
            echo("<br>$url is a valid URL");
        } else {
            echo("<br>$url is not a valid URL");
        }

        function exclaim($str) {
            return $str . "! ";
        }

        function ask($str) {
            return $str . "? ";
        }

        function printFormatted($str, $format) {
            // Calling the $format callback function
            echo "<br>" . $format($str);
        }

        printFormatted("Hello","exclaim"); 
        printFormatted("What is your name","ask"); 

        // echo "<br>" . exclaim("Hussain");
        // echo "<br>" . ask("What is your name");

        $strings = ["apple", "orange", "banana", "coconut"];
              
        print_r(array_map( function($item) {
            return strlen($item); 
        } , $strings));

        $age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
        echo "<br>" . json_encode($age);

        $cars = array("Volvo", "BMW", "Toyota");
        echo "<br>" . json_encode($cars);

        $jsonobj = '{"Peter":35,"Ben":37,"Joe":43}';
        $obj = json_decode($jsonobj);
        $arr = json_decode($jsonobj,true);
        echo "<br>";
        var_dump($obj);
        echo "<br>";

        // echo "<br>" . $obj->Peter;
        // echo "<br>" . $obj->Ben;
        // echo "<br>" . $obj->Joe;
        foreach($obj as $key => $value) {
            echo "<br>" . $key . " is " . $value . " years old.";
        }

        // echo "<br>" . $arr["Joe"];
        // echo "<br>" . $arr["Ben"];
        // echo "<br>" . $arr["Peter"];
        foreach($arr as $key => $value) {
            echo "<br>" . $key . " is " . $value . " years old.";
        }
    ?>
</body>
</html>