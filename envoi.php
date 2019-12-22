<?php

/*on récupère les données du formulaire*/

$nom = $_POST['nom'] ;
$email = $_POST['email'] ;
$message = $_POST['message'] ;

/*on les envoie avec la fonction mail()*/

$retour = mail('solene.tessiore@gmail.com', 'Envoi d\'un formulare', "Nom: <b>".$nom."</b><br>\nEmail: <b>".$email."</b><br>\nMessage: <b>".$message."</b><br>\n", 
'From : adresseDeMonSite');
if ($retour) {
    echo '<p>Votre message a bien été envoyé.</p>';
}
else {
    echo '<p>Erreur lors de l\'envoi<p>';
}

?>