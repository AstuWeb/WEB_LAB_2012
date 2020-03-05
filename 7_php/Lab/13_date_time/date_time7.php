<?php
// 5_10.php

$msg = "From: mail@example.com\r\n" .
       "To: mail@somedomain.com\r\n" .
       "Subject: ISO date format\r\n";
$msg .= date("c") . "\r\n\r\n";
$msg .= "This is the body of the email message\r\n";

echo $msg;
