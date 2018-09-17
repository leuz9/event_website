<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Donn&eacute;es envoy&eacute;es</title>
</head>

<body>
<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$nom = $_POST['nom'];
$mailheaders .= $_POST['email'];
$msg .= $_POST['message'];
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "leuzleuz9@gmail.com";
$subject = "Formulaire";


mail($recipient, $subject, $msg, $mailheaders);


echo "<H1 align=center>Merci, $nom </H1>";





?>


Les donn&eacute;es ont &eacute;t&eacute; envoy&eacute;s, cliquez <a href="#">ici pour retourner sur le site 
</a>
</body>
</html>
