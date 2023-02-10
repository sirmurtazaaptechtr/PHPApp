<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="responce.php" method="post">
        <input type="text" placeholder="First Name" id="fName" name="fName">
        <input type="text" placeholder="Middle Name" id="mName" name="mName">
        <input type="text" placeholder="Last Name" id="lName" name="lName">
        <br><br>
        <label for="dob">Date of Birth : </label>
        <input type="date" name="dob" id="dob">
        <br><br>
        <label for="gdr">Gender : </label>
        <select name="gdr" id="gdr">
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="other">Other</option>
        </select>
        <br><br>
        <input type="email" placeholder="example@email.com" id="email" name="email">
        <br><br>
        <input type="submit" value="Send">
    </form>    
</body>
</html>