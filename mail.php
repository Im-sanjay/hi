<?
$first_name = $_POST{'w3lName'};
$email = $_POST{'email'};
$number = $_POST{'w3lnumber'};

// $subject = $_POST{'subject'};
$message = $_POST['w3lMessage'];




$email_message = "

First Name: ".$first_name."

Email: ".$email."
Number: ".$number."

Message: ".$message."

";

mail ("sanjaykumarrofficial@gmail.com" , "You Received a Message", $email_message);
header("location: ../index.html");
?>


