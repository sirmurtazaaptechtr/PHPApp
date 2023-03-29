<?php
  // define variables and set to empty values
  $nameErr = $emailErr = $genderErr = $websiteErr = null;
  $name = $email = $gender = $comment = $website = null;
  
  function test_input($data) {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
  }    
  if ($_SERVER["REQUEST_METHOD"] == "POST") {

      if (empty($_POST["fullName"])) {
        $nameErr = "Name is required";
      } else {
        $name = test_input($_POST["fullName"]);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
          $nameErr = "Only letters and white space allowed";
        }
      }
      
      if (empty($_POST["email"])) {
        $emailErr = "Email is required";
      } else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
        
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid (this regular expression also allows dashes in the URL)
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
      }
  }
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
    echo "Connected successfully";
    $sql = "INSERT INTO `inquiries` (`FullName`, `Email`, `Website`, `Comment`, `Gender`) VALUES ('$name', '$email', '$website', '$comment', '$gender')";
    $result = mysqli_query($myConn, $sql);

    if ($result) 
    {
      echo "<br>New record created successfully";
      echo "<h4>Your Input:</h4>";
      echo $name;
      echo "<br>";
      echo $email;
      echo "<br>";
      echo $website;
      echo "<br>";
      echo $comment;
      echo "<br>";
      echo $gender;
      mysqli_close($myConn);
    }
    else 
    {
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
    <!-- Latest compiled and minified CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container my-3">
        <h2>Personal Information Card</h2>
        <p class="text-danger"><strong>* required field</strong></p>
        <form action="Mar272023-1.php" method="post">
            <div class="my-3">
                <label for="fullName" class="form-label"><strong>Full Name : <span class="text-danger">* <?php echo $nameErr;?></span></strong></label>
                <input type="text" name="fullName" value="<?php echo $name;?>" id="fullName" class="form-control">
            </div>
            <div class="my-3">
                <label for="email" class="form-label"><strong>Email Address : <span class="text-danger">* <?php echo $emailErr;?></span></strong></label>
                <input type="email" name="email" value="<?php echo $email;?>" id="email" class="form-control">
            </div>
            <div class="my-3">
                <label for="website" class="form-label"><strong>Website (URL) : <span class="text-danger"><?php echo $websiteErr;?></span></strong></label>
                <input type="url" name="website" value="<?php echo $website;?>" id="website" class="form-control">
            </div>
            <div class="my-3">
                <label for="comment" class="form-label"><strong>Comment : </strong></label>
                <textarea name="comment" id="comment" rows="5" class="form-control"><?php echo $comment;?></textarea>
            </div>
            <div class="my-3">
                <label for="comment" class="form-label"><strong>Gender : <span class="text-danger">* <?php echo $genderErr;?></span></strong></label>
                <div class="form-check">
                    <div class="row">
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrF" name="gender" <?php if (isset($gender) && $gender=="Female") echo "checked";?> value="Female">
                            <label class="form-check-label" for="gdrF">Female</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrM" name="gender"  <?php if (isset($gender) && $gender=="Male") echo "checked";?> value="Male">
                            <label class="form-check-label" for="gdrM">Male</label>
                        </div>
                        <div class="col-sm-1">
                            <input type="radio" class="form-check-input" id="gdrO" name="gender" <?php if (isset($gender) && $gender=="Other") echo "checked";?> value="Other">
                            <label class="form-check-label" for="gdrO">Other</label>
                        </div>
                    </div>
                </div>
            </div>
            <input type="submit" value="Submit" class="btn btn-success">            
        </form>
    </div>
    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>