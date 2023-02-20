<?php
    if($_SERVER['REQUEST_METHOD'] == 'GET')
    {
        $fName = $_GET['fName'];
        $mName = $_GET['mName'];
        $lName = $_GET['lName'];
        $dob = $_GET['dob'];
        $gdr = $_GET['gdr'];
        $email = $_GET['email'];
        
        echo "<h2>".$fName." ".$mName." ".$lName.", ".$dob.", ".$gdr." and ".$email."</h2>";
    }
?>