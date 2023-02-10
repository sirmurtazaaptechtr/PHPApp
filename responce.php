<?php
    if($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        $fName = $_POST['fName'];
        $mName = $_POST['mName'];
        $lName = $_POST['lName'];
        $dob = $_POST['dob'];
        $gdr = $_POST['gdr'];
        $email = $_POST['email'];
        
        echo "<h2>".$fName." ".$mName." ".$lName.", ".$dob.", ".$gdr." and ".$email."</h2>";
    }
?>