<?php
// Download PHPMailer from http://sourceforge.net/projects/phpmailer/files/latest/download?source=files 


    require_once 'plivo.php';
    require_once 'phpmailer/class.phpmailer.php';
    $to = $_POST['To'];
    $from = $_POST['From'];
    $text = $_POST['Text'];

define('GUSER', '<username@gmail.com>'); // Gmail username  
define('GPWD','<password>'); //Gmail password

function smtpmailer($to, $from, $from_name, $subject, $body) {   
    global $error;  
    $mail = new PHPMailer();  // create a new object  
    $mail->IsSMTP(); // enable SMTP  
    $mail->SMTPDebug = 0;  // debugging: 1 = errors and messages, 2 = messages only  
    $mail->SMTPAuth = true;  // authentication enabled  
    $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail  
    $mail->Host = 'smtp.gmail.com';  
    $mail->Port = 465;   
    $mail->Username = GUSER;    
    $mail->Password = GPWD;             
    $mail->SetFrom($from, $from_name);  
    $mail->Subject = $subject;  
    $mail->Body = $body;  
    $mail->AddAddress($to); 
    if(!$mail->Send()) {  
        $error = 'Mail error: '.$mail->ErrorInfo;   
        return false;  
    } else {  
        $error = 'Message sent!';  
        return true;  
    }  
} 

smtpmailer('<to_mailAddress>', '', '<From@mail.com>', $from, 'Plivo message', $text);
?>
