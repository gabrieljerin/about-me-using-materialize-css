<?php

$function = $_REQUEST['function'];
switch ($function) {
    case "sendMail":send_mail();
        break;
}

function clean_string($string) {
    $bad = array("content-type", "bcc:", "to:", "cc:", "href");
    return str_replace($bad, "", $string);
}

function send_mail() {
    $email_to = "jerin_alex@hotmail.com";
    $email_subject = "New Mail";
    $email_message = "Form details below.\n\n";
    $email_message .= "First Name: " . clean_string($_POST['first_name']) . "\n";
    $email_message .= "Last Name: " . clean_string($_POST['last_name']) . "\n";
    $email_message .= "Email: " . clean_string($_POST['email']) . "\n";
    $email_message .= "Comments: " . clean_string($_POST['message']) . "\n";
    $headers = 'From: ' . $_POST['email']. "\r\n" .
            'Reply-To: ' . $_POST['email'] . "\r\n" .
            'X-Mailer: PHP/' . phpversion();
    mail($email_to, $email_subject, $email_message, $headers);
    header('Content-type: application/json');
    echo json_encode(1);
}
?>

