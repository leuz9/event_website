<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Donn&eacute;es envoy&eacute;es</title>
</head>

<body>
<?php 
require 'vendor/autoload.php';
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$request_body = json_decode('{
  "personalizations": [
    {
      "to": [
        {
          "email": "leuzleuz9@gmail.com"
        }
      ],
      "subject": "Hello World from the SendGrid PHP Library!"
    }
  ],
  "from": {
    "email": "jobrek17@gmail.com"
  },
  "content": [
    {
      "type": "text/plain",
      "value": "Hello, Email!"
    }
  ]
}');

$apiKey = getenv('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');
$sg = new \SendGrid($apiKey);

$response = $sg->client->mail()->send()->post($request_body);
echo $response->statusCode();
echo $response->body();
echo $response->headers();

?>


Les donn&eacute;es ont &eacute;t&eacute; envoy&eacute;s, cliquez <a href="#">ici pour retourner sur le site 
</a>
</body>
</html>
