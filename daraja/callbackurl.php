<?php
header("Content-Type: application/json");

$stkCallbackResponse = file_get_contents('php://input');
$logFile = "stkTinypesaResponse.json";
$log = fopen($logFile, "a");
fwrite($log, $stkCallbackResponse);
fclose($log);

$callbackContent = json_decode($stkCallbackResponse);

$ResultCode = $callbackContent->Body->stkCallback->ResultCode;
$CheckoutRequestID = $callbackContent->Body->stkCallback->CheckoutRequestID;
$Amount = $callbackContent->Body->stkCallback->CallbackMetadata->Item[0]->Value;
$MpesaReceiptNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[1]->Value;
$PhoneNumber = $callbackContent->Body->stkCallback->CallbackMetadata->Item[4]->Value;

if ($ResultCode == 0) {

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


    // Check connection
    if ($conn->connect_error) {
        die("<h1>Connection failed:</h1> " . $conn->connect_error);
    }
   else{

      
    $insert = $conn->query("INSERT INTO daraja(CheckoutRequestID,ResultCode,amount,MpesaReceiptNumber,PhoneNumber) VALUES ('$CheckoutRequestID','$ResultCode','$Amount','$MpesaReceiptNumber','$PhoneNumber')");
      if($conn->query == TRUE ){
          echo"New record created";
      } else{
          echo"Error:" .$conn->error;
      }
    $conn = null;
}
}