<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Donn&eacute;es envoy&eacute;es</title>
</head>

<body>
<?php 
//require 'vendor/autoload.php';
// If you're using Composer (recommended)
// Comment out the above line if not using Composer
require("sendgrid/sendgrid-php.php");
// If not using Composer, uncomment the above line and
// download sendgrid-php.zip from the latest release here,
// replacing <PATH TO> with the path to the sendgrid-php.php file,
// which is included in the download:
// https://github.com/sendgrid/sendgrid-php/releases

$email = new \SendGrid\Mail\Mail(); 
$email->setFrom("leuzleuz9@gmail.com", "Example User");
$email->setSubject("Sending with SendGrid is Fun");
$email->addTo("jobrek17@gmail.com", "Example User");
$email->addContent("text/plain", "and easy to do anywhere, even with PHP");
$email->addContent(
    "text/html", "<strong>and easy to do anywhere, even with PHP</strong>"
);
$sendgrid = new \SendGrid(getenv('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'));
try {
    $response = $sendgrid->send($email);
    print $response->statusCode() . "\n";
    print_r($response->headers());
    print $response->body() . "\n";
} catch (Exception $e) {
    echo 'Caught exception: '. $e->getMessage() ."\n";
}

?>

<h1>
les donnees <a href="home.html">ici pour retourner sur le site 
</a>
</h1>
</body>
</html>
