<?php 
$name = $_POST["name"];
$visitor_email = $_POST["email"];
$subject = $_POST["subject"];
$message = $_POST["message"];
$toEmail  = $_POST["sanjusaah649@gmail.com"];




$mailHeaders = "User Name: $name.\n". 
                "User Email: $visitor_email.\n". 
                 "Subject: $subject.\n". 
                    "User Message: $message .\n";





if(mail($toEmail, $name, $mailHeaders)){
   $message = "Your Information is Submitted To Adminstration.";
}

#after submission, user will be at the same page
header("Location: contact.html");

?>

