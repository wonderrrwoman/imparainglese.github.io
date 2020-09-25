<?php
    $user_name = $_POST['name'];
    $user_surname = $_POST['name2'];
    $user_email = $_POST['mail'];
    $user_message = $_POST['message'];

    $email_from = 'imparainglese@kbodlieva.com';
    $email_subject = "New Form Submissions"
    $email_body = "Name: $user_name.\n".
                  "Surname: $user_surname.\n".
                  "Email: $user_email.\n".
                  "Message:$user_message.\n".

    $to = "bodlievak@seznam.cz";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $user_email\r\n";
    mail($to, $email_subject, $email_body, $headers);
    header("Location: index.html");

 ?>
