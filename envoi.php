<?php 
// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require("sendgrid/sendgrid-php.php");
$sendgrid = new SendGrid("SENDGRID_APIKEY");
$email    = new SendGrid\Email();

$email->addTo("leuzleuz9@gmail.com")
      ->setFrom("jobrek17@gmail.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);

?>