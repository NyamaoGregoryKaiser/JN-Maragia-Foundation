<?php
require_once("config.php");

if (isset($_POST['login'])) {
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

    $sql = "SELECT * FROM members WHERE email=:email OR username=:username";
    $stmt = $db->prepare($sql);

    // Bind parameter to query
    $params = array(
        ":email" => $email,
        ":username" => $email // Assuming the username and email inputs share the same name attribute
    );

    $stmt->execute($params);

    $member = $stmt->fetch(PDO::FETCH_ASSOC);

    // If a member is found
    if ($member) {
        // Verify the password
        if (password_verify($password, $member["password"])) {
            // Start a session
            session_start();
            $_SESSION["member"] = $member;
            // Login successful, redirect to timeline
            header("Location: timeline.php");
            exit(); // It's good practice to add an exit() after header() to prevent further execution of the script.
        } else {
            // Password does not match
            echo "Invalid password.";
        }
    } else {
        // Member not found with the provided email or username
        echo "User not found.";
    }
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login to JN Maragia</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">
<style>
        /* Custom styles to override Bootstrap */
        .bg-light {
            /* Change the background color to blue */
            background-color: blue;
        }
    </style>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Enter JN Maragia Foundation</h4>
        <p>Not registered yet?  <a href="register.php">Register here</a></p>

        <form action="" method="POST">

            <div class="form-group">
                <label for="email">email or username</label>
                <input class="form-control" type="text" name="email" placeholder="username or email" />
            </div>


            <div class="form-group">
                <label for="password">Password</label>
                <input class="form-control" type="password" name="password" placeholder="Password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="login" value="Login" />

        </form>
            
        </div>

        <div class="col-md-6">
        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect4.png" />
        </div>
            <!-- isi dengan sesuatu di sini -->
        </div>
        
    </div>
    
</div>
    
</body>
</html>