<?php
$nom = $_POST["nom"];
$mail = $_POST["mail"];
$tel = $_POST["tel"];
$mess = $_POST["mess"];
$message = "
    <html>
    <head>
        <style>
            table {
                width: 100%;
                border-collapse: collapse;
            }
            th, td {
                padding: 10px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }
            th {
                background-color:#e0f2ff;
            }
            .container {
                max-width: 600px;
                margin: auto;
                background-color:#e0f2ff;
                padding: 20px;
                border-radius: 5px;
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            }
            .header {
                background-color: #121b46;
                color: #fff;
                padding: 20px;
                text-align: center;
                border-radius: 5px 5px 0 0;
            }
            tr{
                background-color:#e0f2ff;
            }
        </style>
    </head>
    <body>
        <div class='container'>
            <div class='header'>
                <h2>Informations</h2>
            </div>
            <table>
                <tr>
                    <th style='background-color: #f2f2f2; color: #333;'>Nom:</th>
                    <td>$nom</td>
                </tr>
                <tr>
                    <th style='background-color: #f2f2f2; color: #333;'>Adresse email:</th>
                    <td>$mail</td>
                </tr>
                <tr>
                    <th style='background-color: #f2f2f2; color: #333;'>Téléphone:</th>
                    <td>$tel</td>
                </tr>
                <tr>
                    <th style='background-color: #f2f2f2; color: #333;'>Message:</th>
                    <td>$mess</td>
                </tr>
            </table>
        </div>
    </body>
    </html>";

// Import des classes PHPMailer dans l'espace de noms global
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Inclusion des fichiers PHPMailer
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

// Création d'une nouvelle instance de PHPMailer
$mail = new PHPMailer(true);

try {
    // Configuration du serveur SMTP
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'diabfatima934@gmail.com';
    $mail->Password   = 'zvhbclwluosvidzp ';
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;

    $mail->setFrom('from@example.com', 'vs');
    $mail->addAddress('diabfatima934@gmail.com');
    $mail->isHTML(true);
    $mail->Subject = 'Information:';
    $mail->Body    = $message;
    $mail->AltBody = 'Ceci est le corps du message en texte brut pour les clients de messagerie ne prenant pas en charge HTML';

    // Envoi du message
    $mail->send();
    echo 'Le message a été envoyé';
} catch (Exception $e) {
    echo "Le message n'a pas pu être envoyé.";
}
?>
