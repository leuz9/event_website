<?php 
//Pour définir chaque input du formulaire, ajouter le signe de dollar devant

$nom = $_POST['nom'];
$mailheaders .= $_POST['email'];
$msg .= $_POST['message'];
//Pourait continuer ainsi jusqu'à la fin du formulaire

$recipient = "leuzleuz9@gmail.com";
$subject = "Formulaire";


mail($recipient, $subject, $msg, $mailheaders);

echo "<HTML><HEAD>";
echo "<TITLE>Formulaire envoyer!</TITLE></HEAD><BODY>";
echo "<H1 align=center>Merci, $nom </H1>";
echo "<P align=center>";
echo "Votre formulaire à bien été envoyé !</P>";
echo '<a href="home.html">Retour à l\'accueil</a>';
echo "</BODY></HTML>";

?>