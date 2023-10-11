<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Transactions</title>
</head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/fontawesome.min.css">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" />
<link href="" rel="stylesheet" />
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" ">
<link rel="stylesheet" href="style.css">
<body>
    <br>
    <h4 align="center">Donation Transaction Records 🎁</h4>
    <br><br>
    <div class="card-body">
        <div class="table-responsive">
        <table class="table">
  <thead>
    <tr>
      <th scope="col">Transaction NO</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Transaction ID</th>
      <th scope="col">Amount</th>
    </tr>
  </thead>
  <tbody>
    <?php

   // Replace these variables with your local MySQL database credentials
$local_server = 'localhost';
$local_username = 'root';
$local_password = '';
$local_db = 'travelblog';

$active_group = 'default';
$query_builder = TRUE;

// Connect to DB
$conn = mysqli_connect($local_server, $local_username, $local_password, $local_db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

    $query1= mysqli_query($conn,"SELECT*from daraja");
    while($row=mysqli_fetch_array($query1))
    {
        ?>
        <tr>
        <td style="color:black;"><?php echo $row['ID']; ?></td>
        <td style="color:green;"><?php echo $row['PhoneNumber']; ?></td>
        <td style="color:crimson;"><?php echo $row['MpesaReceiptNumber']; ?></td>
        <td style="color:green;"><?php echo $row['amount']; ?></td>
        
        </tr>

<?php } ?>
  </tbody>
</table>
        </div>
    </div>
</body>
</html>