<?php
$insert = false;
if(isset($_POST['name'])){
    // Set connection variables
    $server = "localhost";
    $username = "root";
    $password = "";
    $dbname="art";

    // Create a database connection
    $con = mysqli_connect($server, $username, $password,$dbname);

    if($con->connect_error)
    {
        die("Connection failed:" .$con->connect_error);
    }
    
    // Collect post variables
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($_SERVER['REQUEST_METHOD'] == "POST"){

    // Check if username is empty
        if(empty(trim($_POST["username"]))){
            $username_err = "Username cannot be blank ";
            echo($username_err);
        } 
    
        if(empty(trim($_POST['password']))){
            $password_err = "Password cannot be blank ";
            echo($password_err);
        }
        if(strlen(trim($_POST['password'])) < 5){
            $password_err = "Password cannot be less than 5 characters ";
            echo($password_err);
        }
        if(strlen(trim($_POST['password'])) > 10){
            $password_err = "Password cannot be more than 10 characters ";
            echo($password_err);
        }
        else{
            $password = trim($_POST['password']);
        }
    
        // Check for confirm password field
        if(trim($_POST['password']) !=  trim($_POST['cpassword'])){
            $password_err = "Passwords should match ";
            echo($password_err);
        }
    
                    

        else{
        
            $sql = "SELECT username FROM customer WHERE username = '$username'";
            $stmt = mysqli_query($con, $sql);
            $row = mysqli_num_rows($stmt);
            if($row>0){
                echo "Error, Username already exists. Try something else.";
            }
            else 
            {
                if(empty($username_err) && empty($password_err) && empty($confirm_password_err)){
                // $password=password_hash($password,PASSWORD_DEFAULT);
                $sql = "INSERT INTO `art`.`customer` (`name`, `email`, `phone`, `address`, `username`, `password`) VALUES ('$name', '$email', '$phone', '$address', '$username', '$password');";
                $stmt = mysqli_query($con, $sql);
                    if($stmt)
                    {   
                         echo "Thanks for submitting.";
                    }
                }
            
            }   
        
        }
        mysqli_close($con);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Travel Form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto|Sriracha&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="register_style.css">
</head>
<body>
    <div class="container">
        <h1>Welcome to Online Art Gallery</h3>
        <p>Enter your details and submit this form.</p>
        
        <form action="register_customer.php" method="post">
            <input type="name" name="name" id="name" placeholder="Enter your name">
            <input type="email" name="email" id="email" placeholder="Enter your email">
            <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
            <textarea name="address" id="address" cols="30" rows="10" placeholder="Enter your address"></textarea>
            <input type="username" name="username" id="username" placeholder="Enter your username">
            <input type="password" name="password" id="password" placeholder="Enter your password">
            <input type="cpassword" name="cpassword" id="cpassword" placeholder="Confirm Password">
            <button class="btn">Submit</button>  
        </form>
    </div>
    <script src="index.js"></script>
    
</body>
</html>
