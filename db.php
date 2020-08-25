<?php
$email = "";
if(isset($_POST['submit'])) {
 
    $email=$_POST['email'];

    $to="nwobodokenechukwu2@gmail.com";
    $subject="Form Submission";
    $message="Hi there,"."\n\n"."We have receive your subscription notification from".$email."\n"."Thanks for subscribing.";
    $headers="From: ".$email;
    //connect to database
    $conn = new mysqli('nwhazdrp7hdpd4a4.cbetxkdyhwsb.us-east-1.rds.amazonaws.com', 'zuc5zpd54khl1jyx', 'af1paj9pu44i3od9', 'lcnqo7ym6zeztv6b');  
    //insert emails to the database table
    $cmd = "INSERT into myemaillist value('$email');";
    $result = mysqli_query($conn, $cmd);
    //check if subscription was successful
     if($result || mail($to, $subject, $message, $headers)) {
        echo $success = "Congratulations! You have successfully subscribed to our mailing list.";
    }
    else {
        echo $error = "Sorry! Subscription was not successful, please provide a valid email address.";
    }

}

?>