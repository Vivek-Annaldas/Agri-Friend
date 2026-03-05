<?php

// send email
$to  = "itsgokuui23@gmail.com";
$subject = "Test email using php";
$body = "Hi there, this is just a demo test email using php.";
$header = "From:pratiksalunke1905@gmail.com";

$result = mail($to,$subject,$body,$header);

if($result){
    echo "Mail send successfully!";
}else{
    echo "Problem while sending mail!";
}

// SETTINGS TO BE MADE
// (replace demo@gmail.com with your mail)
// (also use your App_generated_key)

// inside php.ini
/* SMTP=smtp.gmail.com
   smtp_port=25
   sendmail_from=demo@gmail.com
   sendmail_path=C:\xampp\sendmail\sendmail.exe
*/

// inside sendmail.ini
/* smtp_server=smtp.gmail.com
   smtp_port=587
   error_logfile=error.log
   debug_logfile=debug.log
   auth_username=demo@gmail.com
   auth_password=App_generated_key
   force_sender=demo@gmail.com
