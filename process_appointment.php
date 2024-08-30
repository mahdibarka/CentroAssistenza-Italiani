<?php
// Configuration de l'adresse email pour l'envoi
$to = 'mahdibarka29@gmail.com'; // Remplacez par votre adresse email

// Récupération des données du formulaire
$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$country_code = htmlspecialchars($_POST['country_code']);
$phone = htmlspecialchars($_POST['phone']);
$appointment_date = htmlspecialchars($_POST['appointment_date']);
$appointment_time = htmlspecialchars($_POST['appointment_time']);
$message = htmlspecialchars($_POST['message']);

// Sujet et contenu de l'email
$subject = 'Nouvelle Réservation de Rendez-vous';
$body = "Nom Complet: $fullname\n";
$body .= "Adresse Email: $email\n";
$body .= "Numéro de Téléphone: $country_code $phone\n";
$body .= "Date du Rendez-vous: $appointment_date\n";
$body .= "Heure du Rendez-vous: $appointment_time\n";
$body .= "Message: $message\n";

// En-têtes de l'email
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

// Envoi de l'email
if (mail($to, $subject, $body, $headers)) {
    // Redirection vers la même page après envoi
    header('Location: Réservation.html?success=true');
} else {
    // Redirection vers la même page avec un message d'erreur
    header('Location: Réservation.html?error=true');
}
exit();
?>
