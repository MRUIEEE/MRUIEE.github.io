<?php
 
 if ($_SERVER["REQUEST_METHOD"] == "POST"){

    $name =  htmlspecialchars($_POST['name']);
    $email =  htmlspecialchars($_POST['email']);
    $subject =  htmlspecialchars($_POST['subject']);
    $message =  htmlspecialchars($_POST['message']);
    $to = 'deepakrana14725@gmail.com';
    $headers = "From: " . $email . "\r\n" ;
    
    mail($to,$subject,$message,$headers);
    echo "success";
}
 
else{
    echo "Error something went wrong";
}    
 
 
 ?>