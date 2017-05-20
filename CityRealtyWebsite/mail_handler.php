<?php 
if(isset($_POST['submit'])){
    $to = "pchris24@cs.ucy.ac.cy"; // this is your Email address
    $from = $_POST['mail']; // this is the sender's Email address
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = "". $_POST['name'] . " wrote the following:" . "\n\n" . $_POST['message'] . "\n\n" . $_POST['phone'];
 
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers,$name);
    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    }
?>
