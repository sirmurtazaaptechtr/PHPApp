<?php
// Connect to the Database 
$servername = "localhost";
$username = "root";
$password = "";
$database = "notesdb";

// Create a connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Die if connection was not successful
if (!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else {
    echo
    "<div class='alert alert-success alert-dismissible fade show' role='alert'>
        <strong>Success!</strong> Database connected successfully.
        <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
    </div>";
}
?>