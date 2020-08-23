<?php
$email = "";
if(isset($_POST['submit']))

{
 
    $email = $_POST['email'];
    //connect to database
    $conn = new mysqli('localhost', 'root', '', 'emaillist');
    //insert emails to the database table
    $cmd = "INSERT into myemaillist value('$email');";
    $result = mysqli_query($conn, $cmd);
    //check if subscription was successful
     if($result)
    {
        echo $success = "Congratulations! You have successfully subscribed to our mailing list.";
    }
    else {
        echo $error = "Sorry! Subscription was not successful, please provide a valid email address.";
    }

}

?>