<?php
// Configuration
$servername = "localhost";
$username="root";
$password="";
$db = "medical";

// Connect To DB
$con = mysqli_connect($localhost, $username, $password, $db);  

// Check For connection Errors
if(mysqli_connect_errno()) {  
    die("Failed to connect with MySQL: ". mysqli_connect_error());  
}  
// If username found in database
if(isset($_POST['email']))
   {

        // Get username and password
        $email = $_POST['email'];  
        $password = $_POST['password'];  
      
        // SELECT Query
        $sql = "select * from doctor where email = '$email' and password = '$password'";  
        // store Query
        $result = mysqli_query($con, $sql);  
        // get rows from DB and store them into Array
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        // Count DB Rows
        $count = mysqli_num_rows($result);  
        // if found 
        if($count == 1)
        {  
            // Redirect to html page
            header('Location: Dashboard Doctor Screen.php'); 
            exit(); 
        }  
        else
        {  
            // if not found 
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        } 

    }




?>