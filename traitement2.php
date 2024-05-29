
<?php
    $nom = $_POST['name'];
    $email = $_POST['email'];
    $protocol = $_POST['protocol'];
    $merise = $_POST['merise'];
    $anglais = $_POST['angl'];
    $francais = $_POST['fr'];
    $algo = $_POST['algo'];
    $javascript = $_POST['jav'];
    $bootstrap = $_POST['boot'];
    $html = $_POST['html'];
    $css = $_POST['css'];
    $wordpress = $_POST['wordpress'];
    $laravel = $_POST['laravel'];
    $coef1 = $_POST['coef1'];
    $coef2 = $_POST['coef2'];
    $coef3 = $_POST['coef3'];
    $coef4 = $_POST['coef4'];
    $coef5 = $_POST['coef5'];
    $coef6 = $_POST['coef6'];
    $coef7 = $_POST['coef7'];
    $coef8 = $_POST['coef8'];
    $coef9 = $_POST['coef9'];
    $coef10= $_POST['coef10'];
    $coef11 = $_POST['coef11'];

    $moyenne = ($protocol * $coef1 + $merise * $coef2 + $anglais * $coef3 + $francais * $coef4 + $algo * $coef5 + $javascript * $coef6 + $bootstrap * $coef7 + $html * $coef8 + $css * $coef9 + $wordpress * $coef10 + $laravel * $coef11) / ($coef1 + $coef2 + $coef3 + $coef4 + $coef5 + $coef6 + $coef7 + $coef8 + $coef9 + $coef10 + $coef11);

    $message = "
    <html>
    <head>
        <style>

            .content{
                max-width: 800px;
                margin: auto; 
                background-color: #121b46; 
                padding: 20px; 
                border-radius: 10px; 
                box-shadow: 0 0 20px;
            }
            .sous-content{
                text-align: center;
            }
            h1{
                color: #333333; 
                text-shadow: 2px 2px 4px rgba(0,0,0,0.1); 
                text-align: center; 
                font-size:35px;
                color:#ffffff;
            }
            table {
                width: 800px;
                font-family: sans-serif;
                font-weight: 100;
                border-collapse: collapse;
                overflow: hidden;
                box-shadow: 0 0 20px;
            }
            th{
                background-color: #ffffff33;
                 padding: 12px;
                 color: #black;
                font-size: 20px;
                text-align: left;
            }
            td{
                background-color: #ffffff33; padding: 12px; color: #ffffff;
                text-align: left;
                font-size: 20px;
            }
            thead th{
                background-color: #e0f2ff;
            }
            tbody tr:hover{
                background-color: #ffffff4d;
            }
            tbody td {
                position: relative;
            }
        a{
        color:white;
        }

        
        </style>
    </head>
    <body>
        <div >
            <div class='content'>
                <div class='sous-content'>
                    <h1>Bulletin de notes:<br>$nom</h1>
                    <table>
                        <thead>
                            <tr>
                                <th>Champ</th>
                                <th>Valeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nom de l'élève</td>
                                <td>$nom</td>
                            </tr>
                            <tr>
                                <td>Email de l'élève</td>
                                <td ><a>$email<a></td>
                            </tr>
                            <tr>
                                <td>Note PHP</td>
                                <td>$protocol</td>
                            </tr>
                            <tr>
                                <td>Note Merise</td>
                                <td>$merise</td>
                            </tr>
                            <tr>
                                <td>Note Anglais</td>
                                <td>$anglais</td>
                            </tr>
                            <tr>
                                <td>Note Français</td>
                                <td>$francais</td>
                            </tr>
                            <tr>
                                <td>Note Algorithmique</td>
                                <td>$algo</td>
                            </tr>
                            <tr>
                                <td>Note Javascript</td>
                                <td>$javascript</td>
                            </tr>
                            <tr>
                                <td>Note Bootstrap</td>
                                <td>$bootstrap</td>
                            </tr>
                            <tr>
                                <td>Note HTML</td>
                                <td>$html</td>
                            </tr>
                            <tr>
                                <td>Note CSS</td>
                                <td>$css</td>
                            </tr>
                            <tr>
                                <td>Note Wordpress</td>
                                <td>$wordpress</td>
                            </tr>
                            <tr>
                                <td>Note Laravel</td>
                                <td>$laravel</td>
                            </tr>
                            <tr>
                                <td>Moyenne de l'élève</td>
                                <td style='color:#e0f2ff'>$moyenne</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
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
        $mail->Password   = 'zvhbclwluosvidzp'; 
        $mail->SMTPSecure = 'ssl'; 
        $mail->Port       = 465;

        $mail->setFrom('from@example.com', 'vs');
        $mail->addAddress('diabfatima934@gmail.com'); 
        $mail->isHTML(true); 
        $mail->Subject = 'Bulletin de notes de ' . $nom; 
        $mail->Body    = $message;
        $mail->AltBody = 'Ceci est le corps du message en texte brut pour les clients de messagerie ne prenant pas en charge HTML';
        // Envoi du message
        $mail->send();
        echo 'Le message a été envoyé';
    } catch (Exception $e) {
        echo "Le message n'a pas pu être envoyé. Erreur du Mailer : {$mail->ErrorInfo}";
    }
?>