<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $message = $_POST['textarea'];

    $email_from = 'leonieduplessis@hotmail.com';

    $email_subject = "New Form Submission";

    $email_body =  "Guest Name: $name.\n".
                        "Guest Email: $visitor_email.\n".
                            "Guest Message: $textarea.\n;"

    $to = "leonieduplessis62@gmail.com"

    $headers = "From: $email_from \r\n";

    $headers = "Reply-To: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers );

    header("Location: index.html");

?>