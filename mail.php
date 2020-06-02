<?php
  $name = $_POST['name'];
  $visitor_email = $_POST['email'];
  $message = $_POST['message'];
  $subject = $_POST['subject'];
  $number = $_POST['number'];
  $email_from = 'sgaadarshinfotech@gmail.com';
  $email_subject = "New Form Submission";
  $email_body = "User Name: $name. \n".
                "User Email: $visitor_email. \n".
                "User No: $number. \n".
                "User Sub: $subject. \n".
                "User Message: $message. \n";

  $to = "sgaadarshinfotech@gmail.com";
  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";
  mail($to,$email_subject,$email_body,$headers);
  header("Location: contact.html");
  echo "Your details has send successfully";
?>