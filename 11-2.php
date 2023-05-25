<?php
    $to = "pnp14072005@gmail.com";
    $subject = "Test Email";

    $message = "mail() in PHP works!";

    $retval = mail($to, $subject, $message);

    if ($retval == true) {
    echo "Message sent successfully!";
    } else {
    echo "Message could not be sent!";
    }
?>

<!-- Message sent successfully! -->