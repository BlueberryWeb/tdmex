<?php 
require 'class/PHPMailerAutoload.php';  
//Create a new PHPMailer instance
$mail = new PHPMailer;
$mail->CharSet = "UTF-8";
$mail->isSMTP();
$mail->SMTPDebug = 0;
$mail->Host = 'smtp.gmail.com';
$mail->Host = gethostbyname('smtp.mailgun.org');
$mail->Port = 587;
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';

$mail->SMTPOptions = array(
   'ssl' => array(
       'verify_peer' => false,
       'verify_peer_name' => false,
       'allow_self_signed' => true
   )
);
 
$mail->Username = 'info@web.blueberry.expert';   // SMTP username
$mail->Password = 'be28c81d70e569baa910748d4565d056-fb87af35-2837cea7';   // SMTP password

//Set who the message is to be sent to
$mail->setFrom('projects@blueberry.mx', 'Admin TDMEX'); 
//Set who the message is to be sent from 
$mail->addAddress('projects@blueberry.mx', 'Gery Morales'); 
$mail->addAddress('fidel.galvan@blueberry.mx', 'Fidel Galvan');  
$mail->addAddress('contabilidad@tdmex.com.mx', 'Jose Miguel Diaz Reynoso');  
$mail->addAddress('soluciones.logisticas@tdmex.com.mx', 'Natalia Alejandra Nuño Diaz');  


$mail->Subject = 'Cotización TDMEX '.$_POST['subject'];
$mail->Body    = 'Mensaje Web Contacto: \n';
 

    if(isset($_POST['email'])) {
          // validation expected data exists
          if(
     
            !isset($_POST['name']) ||
     
            !isset($_POST['email']) ||
     
            !isset($_POST['subject']) ||

            !isset($_POST['mobile']) ||
     
            !isset($_POST['message'])) {
     
            //died('Datos invalidos.');       
     
          }

            $name_con = $_POST['name']; 
            $email_from= $_POST['email'];  
            $subject = $_POST['subject'];  
            $mobile = $_POST['mobile'];  
            $city = $_POST['city'];
            $town = $_POST['town'];
            $from = $_POST['from'];
            $delevery = $_POST['delevery'];
            $width = $_POST['width'];
            $height = $_POST['height'];
            $weigth = $_POST['weigth'];
            $length = $_POST['length'];
            $sendtype = $_POST['sendtype'];
      
      //Set an alternative reply-to address
      $mail->addReplyTo($_POST['email'], $_POST['email'], $_POST['mobile'], $_POST['message']);

      
            $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
            $nom_exp = '/^[A-Za-z0-9._ áéíóúÁÉÍÓÚ]/';
            $num_tel = '/^[0-9-() ]/';
            if(!preg_match($email_exp,$email_from)){
                $error_message .= 'La dirección de email no es valida.<br />';
            }
            if(!preg_match($nom_exp,$name_con)){
                $error_message .= 'El nombre contiene caracteres no validos.<br />';
            }
            if(!preg_match($num_tel,$mobile)){
               $error_message .= 'El número de teléfono contiene caracteres no validos.<br />';
            }

            function clean_string($string) {
              $bad = array("content-type","bcc:","to:","cc:","href");
              return str_replace($bad,"",$string);
            }
      
            $email_message = "---Información del contacto.---\n\n";            
            $email_message .= "Nombre: ".clean_string($name_con)."\n";
            $email_message .= "Asunto: ".clean_string($subject)."\n";
            $email_message .= "Email: ".clean_string($email_from)."\n";
            $email_message .= "Teléfono: ".clean_string($mobile)."\n";
            $email_message .= "---Información de cotización.---\n\n"; 
            $email_message .= "Ciudad: ".clean_string($city)."\n";
            $email_message .= "Municipio: ".clean_string($town)."\n";
            $email_message .= "Origen: ".clean_string($from)."\n";
            $email_message .= "Destino: ".clean_string($delevery)."\n";
            $email_message .= "Ancho: ".clean_string($width)."\n";
            $email_message .= "Peso: ".clean_string($weigth)."\n";
            $email_message .= "Altura: ".clean_string($height)."\n";
            $email_message .= "Longitud: ".clean_string($length)."\n";
            $email_message .= "Tipo de envío: ".clean_string($sendtype)."\n";
            $mail->Body = "".$email_message;
      
      if($mail->send()){        
        header('Location: http://tdmex.blueberry.expert/index.php?success=true'); 
        exit;
      }else{
        echo 'Message could not be sent.<br>';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
        exit;
        header('Location: http://tdmex.blueberry.expert/index.php?success=false');
        
      }
        
    }

?>