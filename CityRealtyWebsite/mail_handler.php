<?php 
if(isset($_POST['submit'])){
    $to = "pchris24@cs.ucy.ac.cy"; // this is your Email address
    $from = $_POST['mail']; // this is the sender's Email address
    $onoma = $_POST['onoma'];
    $phone = $_POST['phone'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $onoma . " wrote the following:" . "\n\n" . $_POST['message'];
 
    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);
    echo "Mail Sent. Thank you " . $onoma . ", we will contact you shortly.";
    }
?>