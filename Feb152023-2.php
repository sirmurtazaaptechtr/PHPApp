<?php
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
        
    $nameErr = $emailErr = $genderErr = $websiteErr = "";
    $name = $email = $gender = $comment = $website = "";
    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        if(empty(test_input($_POST["fullName"])))
        {       
            $nameErr = "*Name is required";
        }else {        
            $name = test_input($_POST["fullName"]);
        }
        $email = test_input($_POST["email"]);
        $website = test_input($_POST["website"]);
        $comment = test_input($_POST["comment"]);
        $gender = test_input($_POST["gender"]);
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mb-3">
            <div class="col-md">
                <h1>PHP Form Validation Example</h1>
            </div>
        </div>
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
            <div class="row mb-3">
                <div class="col-md">
                    <h6 class="text-danger">*required</h6>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="fullName" class="form-label"><b>Full Name</b></label>
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" id="fullName" name="fullName" placeholder="John Doe">                    
                </div>
                <div class="col-md-2">
                    <span class="error text-danger"><?php echo $nameErr;?></span>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="email" class="form-label"><b>Email address</b></label>
                </div>
                <div class="col-md">
                    <input type="email" class="form-control" id="email" name="email" placeholder="name@example.com">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="website" class="form-label"><b>WebSite</b></label>
                </div>
                <div class="col-md">
                    <input type="text" class="form-control" id="website" name="website" placeholder="www.website.com">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="comment" class="form-label"><b>Comment</b></label>
                </div>
                <div class="col-md">
                    <textarea name="comment" id="comment" cols="30" rows="10"></textarea>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-2">
                    <label for="gender" class="form-label"><b>Gender</b></label>
                </div>
                <div class="col-md" id="gender">
                    <input type="radio" name="gender" value="female">Female
                    <input type="radio" name="gender" value="male">Male
                    <input type="radio" name="gender" value="other">Other
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md">
                    <input class="btn btn-success" type="submit" value="Submit">
                    <input class="btn btn-danger" type="reset" value="Reset">
                </div>
            </div>
        </form>
        <?php
            echo $name.", ".$email.", ".$website.", ".$comment." & ".$gender;
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>