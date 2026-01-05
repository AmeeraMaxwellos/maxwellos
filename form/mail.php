<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php'; // Path to Composer's autoload or the downloaded files


function sendmail($sender,$subject,$message,$attachement=false){
    $mail = new PHPMailer(true);
    try {
        // $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host       = 'smtppro.zoho.com'; 
        $mail->SMTPAuth   = true;               
        $mail->Username   = 'hr@maxwellos.com'; 
        $mail->Password   = 'Maxwell_hr123';        
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; 
        $mail->Port       = 465;                    
        if($attachement!=false){
            $mail->addAttachment($attachement);
        }
        $mail->setFrom('hr@maxwellos.com', 'admin');
        $mail->addAddress($sender, $sender);
       
        $mail->isHTML(true);                                   
        $mail->Subject = $subject;
        $mail->Body    = $message;
        $mail->send();
       
        return true;
    } catch (Exception $e) {
        // echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
         return false;
    } 
}


?>
