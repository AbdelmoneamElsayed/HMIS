<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="Register.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="regform">
        <h1>
 Registration Form</h1>
</div>
<div class="main">
    
        <form method="POST">
            <div id="name">
                <h2 class="name">Name </h2>
                <input class="firstname" type="text" name="first_name"><br>
                <label class="firstlabel">first name</label>
                <input class="lastname" type="text" name="last_name"><br>
                <label class="lastlabel">last name</label>
            </div>
            <h2 class="name">Password </h2><input class="company" type="Password" name="Password">
            <h2 class="name">Email</h2><input class="email" type="email" name="email">
            <h2 class="name">Phone</h2><input class="Code" type="text" name="area_code"><label class="area-code">Area Code</label>
            <input class="number" type="text" name="phone"><label class="phone-number">Phone Number</label>
            <h2 class="name">Gender</h2>
            <select class="option" name="gender">
                <option disabled="disabled" selected="selected">--Choose option--</option>
                <option>Male</option>
                <option>Female</option>
                <option>other</option>
            </select>
    
            <h2 id="coustomer">
Do you agree our Terms?</h2>
<label class="radio">
                <input class="radio-one" type="radio" checked="checked" name="rdiobtn">
                <span class="checkmark"></span>
                Yes
            </label>
    
            <label class="radio">
                <input class="radio-two" type="radio" name="rdiobtn">
                <span class="checkmark"></span>
                No
            </label>
    
            <button type="submit">Register</button>
    
    
        </form>
</div>
</body>
</html>


<?php
$servername = "localhost";
$username="root";
$password="";
$db = "medical";

// Create connection
$conn = new mysqli($servername, $username, $password, $db);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO patient (fname, lname, password , email , phone , gender) VALUES ('".$_POST["first_name"]."','".$_POST["last_name"]."','".$_POST["Password"]."','".$_POST["email"]."','".$_POST["phone"]."','".$_POST["gender"]."')";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>




