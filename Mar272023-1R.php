<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>All Walkins</h1>
    <?php
        $servername = "localhost";
        $username = "root";
        $password = ""; 
        $dbname = "pic";
        // Create connection
        $myConn = mysqli_connect($servername,$username,$password,$dbname);
        // Check connection
        if(!$myConn)
        {
            die("Connection failed: " . mysqli_connect_error());
        }
        else
        {
            echo "Connected successfully<br>";
            $sql = "SELECT * FROM `inquiries`";
            $result = mysqli_query($myConn, $sql);
            $numOfRows = mysqli_num_rows($result);    
            echo "<br>$numOfRows<br>";
            if($numOfRows > 0)
            {
                echo "<ul>";
                while($row = mysqli_fetch_assoc($result))
                {
                    // echo var_dump($row);
                    // echo "<br>";
                    echo "<li>".$row['ID']." | ".$row['FullName']." | ".$row['Email']." | ".$row['Website']." | ".$row['Comment']." | ".$row['Gender']."</li>";
                }
                echo "</ul>";
            }
            else
            {
                echo "<br>No record found.<br>";
            }
        }
        mysqli_close($myConn);
    ?>
</body>
</html>