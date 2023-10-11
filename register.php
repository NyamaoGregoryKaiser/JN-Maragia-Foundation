<?php
require_once("config.php");

if (isset($_POST['register'])) {
    // Filter data that is inputted
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $ward = filter_input(INPUT_POST, 'ward', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $gender = filter_input(INPUT_POST, 'gender', FILTER_SANITIZE_STRING);
    $phone = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_STRING);
    $village = filter_input(INPUT_POST, 'village', FILTER_SANITIZE_STRING);
    $photo = $_FILES['photo']['name']; // Assuming the file input field name is 'photo'

    if (empty($username)) {
        // Handle the case when 'username' is empty
        echo "Error: Username field is required.";
        exit();
    }
    // Encrypt the password
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    // Menyiapkan query
    $sql = "INSERT INTO members (username, ward, email, gender, password, phone, village, photo) 
            VALUES (:username, :ward, :email, :gender, :password, :phone, :village, :photo)";
    $stmt = $db->prepare($sql);

    // Bind parameter ke query
    $params = array(
        ":username" => $username,
        ":ward" => $ward,
        ":email" => $email,
        ":gender" => $gender,
        ":password" => $password,
        ":phone" => $phone,
        ":village" => $village,
        ":photo" => $photo
    );

    // Eksekusi query untuk menyimpan ke database
    $saved = $stmt->execute($params);

    // Jika query simpan berhasil, maka member sudah terdaftar
    // Maka alihkan ke halaman login
    if ($saved) {
        header("Location: login.php");
        exit(); // It's good practice to add an exit() after header() to prevent further execution of the script.
    } else {
        // Handle any errors that might occur during the database operation
        // For example, display an error message or log the error.
        echo "Error: Failed to register member.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register to JN Maragia foundation</title>

    <link rel="stylesheet" href="css/bootstrap.min.css" />
</head>
<body class="bg-light">

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">

        <p>&larr; <a href="index.php">Home</a>

        <h4>Let us all join hand in Making Bonchari a desirable home</h4>
        <p>Already have an account? <a href="login.php">Sign in here</a></p>

        <form action="register.php" method="POST" enctype="multipart/form-data">

            <div class="form-group">
                <label for="username">Full name</label>
                <input class="form-control" type="text" name="username" placeholder="Full Name" />
            </div>

            <div class="form-group">
                <label for="homeward">Ward</label>
                <input class="form-control" type="text" name="ward" placeholder="Ward" />
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input class="form-control" type="email" name="email" placeholder="Your Email" />
            </div>
            <div class="form-group">
                <label for="phone">phone</label>
                <input class="form-control" type="text" name="phone" placeholder="07000000" />
            </div>

            <div class="form-group">
            <label for="gender">Gender:</label>
		<select id="gender" name="gender">
			<option value="male">Male</option>
			<option value="female">Female</option>
			<option value="other">Other</option>
		</select><br><br>
            </div>
            <div class="form-group">
            <label for="photo">Photo</label>
            <input class="form-control" type="file" name="photo" accept="image/*" />
            </div>



            <div class="form-group">
                <label for="village">village</label>
                <input class="form-control" type="text" name="village" placeholder="village" />
            </div>
            <div class="form-group">
                <label for="password">password</label>
                <input class="form-control" type="password" name="password" placeholder="password" />
            </div>

            <input type="submit" class="btn btn-success btn-block" name="register" value="Register" />

        </form>
            
        </div>

        <div class="col-md-6">
            <img class="img img-responsive" src="img/connect4.png" />
        </div>

    </div>
</div>

</body>
</html>