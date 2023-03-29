<?php
    $name = $email = $phone = $desc = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];       
        $desc = $_POST['desc'];       
        
    echo
        '<div class="alert alert-success" role="alert">'.
            "$name, $email, $phone and $desc".
        '</div>';
    }
    $servername = "localhost";
    $username = "root";
    $password = ""; 
    $dbname = "contact";

    // Create connection
    $myConn = mysqli_connect($servername,$username,$password,$dbname);
    // Check connection
    if(!$myConn){
        die("Connection failed: " . mysqli_connect_error());
    }
    else{
        echo "Connected successfully";
        $sql = "INSERT INTO `queries` (`Name`, `email`, `phone`, `description`) VALUES ('$name', '$email', '$phone', '$desc')";

        if (mysqli_query($myConn, $sql)) {
            echo "<br>New record created successfully";
            mysqli_close($myConn);
        } else {
            echo "Error creating table: " . mysqli_error($myConn);
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    <h1>Contact US</h1>
    <div class="container">
        <h2>Enter Your Query</h2>
        <form action="contact.php" method="post">
            <div class="row">
                <div class="col-lg mb-3">
                    <label for="name" class="form-label">Full Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Enter Full Name">
                </div>
                <div class="col-lg mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
                <div class="col-lg mb-3">
                    <label for="phone" class="form-label">Phone/Cell</label>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="+92-314-2308332">
                </div>
                <div class="col-lg mb-3">
                    <label for="desc" class="form-label">Query</label>
                    <textarea class="form-control" id="desc" name="desc" rows="1"></textarea>
                </div>
                <div class="col-auto">
                    <label for="submit" class="form-label">Action</label>
                    <button type="submit" class="form-control btn btn-primary mb-3" id="submit">Submit</button>
                </div>
            </div>
        </form>
    </div>    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>