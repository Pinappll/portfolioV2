<?php
if(isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $mail = $_POST['mail'];
    $objet = $_POST['objet'];
    $message = $_POST['message'];
    
    // Adresse email du destinataire
    $to = 'joshua.grandville@gmail.com';
    
    // Sujet du mail
    $subject = 'Nouveau message de '.$nom.' ('.$mail.') - '.$objet;
    
    // Corps du mail
    $body = "Vous avez reçu un nouveau message de ".$nom." (".$mail.") :\n\n".$message;
    
    // Envoi du mail
    if(mail($to, $subject, $body)) {
        // Redirection vers une page de succès d'envoi
        header('Location: confirmation.php');
    } else {
        // Redirection vers une page d'erreur d'envoi
        header('Location: erreur.php');
    }
} else {
    // Redirection vers la page du formulaire si le formulaire n'a pas été soumis
    header('Location: formulaire.php');
}
?>
