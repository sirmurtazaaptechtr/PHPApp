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
        $name = $email = $gender = $comment = $website = "";
        $nameerror="";

        function test_input($data) {
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }

        function gengo($a,$b)
        {
            $a = $b;
            return $a+$b;
        }

        $r = gengo(12,2);

        echo $r;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if(empty($_POST["name"]))
            {
                $nameerror = "name is required!";

            }
            else
            {
                $name = test_input($_POST["name"]);
            }
            $email = test_input($_POST["email"]);
            $website = test_input($_POST["website"]);
            $comment = test_input($_POST["comment"]);
        }        
        
        
    ?> 

    <h2>PHP Form Validation Example</h2>
    <form method="post" action="Feb202023-1.php">
        Name: <input type="text" name="name">
        <span>* <?php echo $nameerror;?></span>
        <br><br>
        E-mail: <input type="text" name="email">
        <br><br>
        Website: <input type="text" name="website">
        <br><br>
        Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        <br><br>
        Gender:
        <input type="radio" name="gender" value="female">Female
        <input type="radio" name="gender" value="male">Male
        <input type="radio" name="gender" value="other">Other
        <br><br>
        <input type="submit" name="submit" value="Submit">
    </form> 
    <?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>