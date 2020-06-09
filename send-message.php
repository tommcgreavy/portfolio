<?php

    if(isset($_POST['submit'])) {
        $name = $_POST['name'];
        $bizname = $_POST['bizname'];
        $email = $_POST['email'];
        $service = $_POST['service'];
        $message = $_POST['message'];

        $to = "info@tommcgreavy.co.uk";
        $txt = "You have recieved a message from: ".$name."\n\nBusiness name: ".$bizname."\n\nThey are messaging you about: ".$service."\n\nMessage: ".$message."\n\nYou can contact them back on: ".$email;
        $subject = "Website Message";
        
        $headers = "From: info@tommcgreavy.co.uk";

        mail($to, $subject, $txt, $headers);
        header("Location: index?sent=true#contactStrip");
    }
    else {
        header("Location: index.php");
    }

?>
