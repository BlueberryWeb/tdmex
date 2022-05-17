
<?php
/**
 * Copyright 2010-2019 Amazon.com, Inc. or its affiliates. All Rights Reserved.
 *
 * This file is licensed under the Apache License, Version 2.0 (the "License").
 * You may not use this file except in compliance with the License. A copy of
 * the License is located at
 *
 * http://aws.amazon.com/apache2.0/
 *
 * This file is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */


$nombre = trim($_POST['name']);
$email = trim($_POST['email']);
$telefono = trim($_POST['mobile']);
$asunto = trim($_POST['subject']);
$ciudad = trim($_POST['city']);
$municipio = trim($_POST['town']);
$origen = trim($_POST['from']);
$destino = trim($_POST['delevery']);
$ancho = trim($_POST['width']);
$alto = trim($_POST['height']);
$peso = trim($_POST['weigth']);
$longitud = trim($_POST['length']);
$tipo_envio = trim($_POST['sendtype']);



// Import PHPMailer classes into the global namespace.
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// If necessary, modify the path in the require statement below to refer to the
// location of your Composer autoload.php file.
require './vendor/autoload.php';

// Replace sender@example.com with your "From" address.
// This address must be verified with Amazon SES.
$sender = 'noreply.tdmex@gmail.com';
$senderName = 'Pagina TDMEX';

// Replace recipient@example.com with a "To" address. If your account
// is still in the sandbox, this address must be verified.
$recipient1 = 'pruebascorreosbb@gmail.com';
$recipient2 = 'noreply.tdmex@gmail.com';
$recipient3 = 'contabilidad@tdmex.com.mx';
$recipient4 = 'fidelberry1@gmail.com';
$recipient5 = 'soluciones.logisticas@tdmex.com.mx';
$recipient6 = 'litdmex@gmail.com';
$recipient7 = 'jonathan.alv.tdmex@gmail.com';

// Replace smtp_username with your Amazon SES SMTP user name.
$usernameSmtp = 'noreply.tdmex@gmail.com';

// Replace smtp_password with your Amazon SES SMTP password.
$passwordSmtp = 'norepl1.tdm3x';

// Specify a configuration set. If you do not want to use a configuration
// set, comment or remove the next line.
$configurationSet = 'ConfigSet';

// If you're using Amazon SES in a region other than US West (Oregon),
// replace email-smtp.us-west-2.amazonaws.com with the Amazon SES SMTP
// endpoint in the appropriate region.
$host = 'smtp.gmail.com';
$port = 587;

// The subject line of the email
$subject = 'Mensaje de TDMEX en la web';

// The plain-text body of the email
$bodyText =  "Correo de la web";

// The HTML-formatted body of the email
$bodyHtml = '

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1"/>
  <meta name="x-apple-disable-message-reformatting"/>
  <link rel="preconnect" href="https://fonts.googleapis.com"/>
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin/>
</head>
<body style="margin:0;padding:0;">
  <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;background:#ffffff;">
    <tr>
      <td align="center" style="padding:0;">
        <table role="presentation" style="width:602px;border-collapse:collapse;border:0px solid #cccccc;border-spacing:0;text-align:left;">
          <tr>
            <td align="left" style="padding:10px 0 30px 0;">
              <img src="https://i.postimg.cc/ry0VTtsS/favicon.png" alt="TDMEX" width="200" style="height:auto;display:block;" />
              <hr>
            </td>
          </tr>
          <tr>
            <td style="padding:0px 30px 42px 20px;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;">
                <tr>
                    <center>
                        <td style="padding:0 0 36px 0;color:#153643;">
                            <h1 style="color: #005249; text-align: center; font-size: 3.5rem;">NUEVO CONTACTO</h1>
                            <h4 style="margin:0 0 12px 0;font-size: 20px; text-align: center;">Se ha capturado un nuevo lead en <b style="font-weight: 600; color: #005249;">TDMEX</b></h4>
                            <ul style="color: #aba9a8; list-style: none; text-align: center;">
                            <li style="margin-bottom: 10px;">Nombre: ' . $nombre . '</li>
                            <li style="margin-bottom: 10px;">Correo electrónico: ' . $email . '</li>
                            <li style="margin-bottom: 10px;">Celular:  ' . $telefono . '</li>
                            <li style="margin-bottom: 10px;">Asunto:  ' . $asunto . '</li>
                            <li style="margin-top: 40px;">Ciudad: ' . $ciudad . '</li>
                            <li style="margin-top: 40px;">Municipio: ' . $municipio . '</li>
                            <li style="margin-top: 40px;">Origen: ' . $origen . '</li>
                            <li style="margin-top: 40px;">Destino: ' . $destino . '</li>
                            <li style="margin-top: 40px;">Ancho: ' . $ancho . '</li>
                            <li style="margin-top: 40px;">Alto: ' . $alto . '</li>
                            <li style="margin-top: 40px;">Peso: ' . $peso . '</li>
                            <li style="margin-top: 40px;">Longitud: ' . $longitud . '</li>
                            <li style="margin-top: 40px;">Tipo de envío: ' . $tipo_envio . '</li>
                            </ul>

                        </td>
                    </center>
                </tr>
              </table>
            </td>
          </tr>
          <tr>
            <td style="padding:30px;background:#000000;">
              <table role="presentation" style="width:100%;border-collapse:collapse;border:0;border-spacing:0;font-size:9px;">
                <tr>
                  <td style="padding:0;width:50%;"align="right">
                    <img src="https://i.postimg.cc/4dpfLLNY/materialized-blueberry.gif" alt="MATERIALIZED BY Blueberry"/>
                  </td>
                </tr>
              </table>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
    
    ';

$mail = new PHPMailer(true);

try {
  // Specify the SMTP settings.
  $mail->isSMTP();
  $mail->From($sender);
  $mail->Username   = $usernameSmtp;
  $mail->From   = $usernameSmtp;
  $mail->Password   = $passwordSmtp;
  $mail->Host       = $host;
  $mail->Port       = $port;
  $mail->SMTPAuth   = true;
  $mail->SMTPSecure = 'tls';
  // $mail->SMTPDebug = true;
  $mail->addCustomHeader('X-SES-CONFIGURATION-SET', $configurationSet);

  // Specify the message recipients.
  $mail->addAddress($recipient1);
  $mail->addAddress($recipient2);
  $mail->addAddress($recipient3);
  $mail->addAddress($recipient4);
  $mail->addAddress($recipient5);
  $mail->addAddress($recipient6);
  $mail->addAddress($recipient7);
  // You can also add CC, BCC, and additional To recipients here.

  // Specify the content of the message.
  $mail->isHTML(true);
  $mail->Subject    = $subject;
  $mail->Body       = $bodyHtml;
  $mail->AltBody    = $bodyText;
  $mail->Send();
  echo "Correo enviado";
  header("Location: {$_SERVER['HTTP_REFERER']}");
} catch (phpmailerException $e) {
  echo "An error occurred. {$e->errorMessage()}", PHP_EOL; //Catch errors from PHPMailer.
} catch (Exception $e) {
  echo "Email not sent. {$mail->ErrorInfo}", PHP_EOL; //Catch errors from Amazon SES.
}

?>

