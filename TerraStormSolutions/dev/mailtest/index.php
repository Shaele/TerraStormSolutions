<?php

$to = 'pbenikovszky@gmail.com';

$subject = 'Test email'

$message = '<h1>Hi there.</h1><p>This is a test email</p>';

$headers = "Content-type: text/html\r\n";

mail($to, $subject, $message, $headers);

?>
