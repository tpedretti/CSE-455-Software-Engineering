<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';


class EmailHandler
{
    function testEmail()
    {
        $this->mail = new PHPMailer(true);

        try
        {
            //Server settings
            //$mail->SMTPDebug = 2;                            // Enable verbose debug output
            $this->mail->isSMTP();                                   // Set mailer to use SMTP
            $this->mail->Host       = '';                    // Specify main and backup SMTP servers
            $this->mail->SMTPAuth   = true;                          // Enable SMTP authentication
            $this->mail->Username   = '';            // SMTP username
            $this->mail->Password   = '';                // SMTP password
            $this->mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
            $this->mail->Port       = 465;                           // TCP port to connect to       

            $this->mail->setFrom('', 'noreply');
            $this->mail->addAddress(""); 

            // Content
            $this->mail->isHTML(true); // Set email format to HTML
            $this->mail->Subject = '[Eir.Plus] Confirm your new account';
            $this->mail->Body    = '<p>Welcome to Eir.Plus!</p>
                          <p>  </p>
                          <p>If the above link is not clickable, try copying and pasting it into the address bar of your web browser.</p>';        
            //$this->db->insertRegToken($registrationCode, $userEmail);        
            $this->mail->send();
        } 
        catch (Exception $ex) 
        {
            echo "Message could not be sent. Mailer Error: {$this->mail->ErrorInfo}";
        }
    }
    
    function sendSupportTicket($userEmail, $userTitle, $userMessage)
    {
        $this->mail = new PHPMailer(true);
        try
        {
            $this->mail->isSMTP();                                   // Set mailer to use SMTP
            $this->mail->Host       = '';                    // Specify main and backup SMTP servers
            $this->mail->SMTPAuth   = true;                          // Enable SMTP authentication
            $this->mail->Username   = '';            // SMTP username
            $this->mail->Password   = '';                // SMTP password
            $this->mail->SMTPSecure = 'ssl';                         // Enable TLS encryption, `ssl` also accepted
            $this->mail->Port       = 465;                           // TCP port to connect to       

            $this->mail->setFrom('', 'noreply');
            $this->mail->addAddress($userEmail); 

            // Content
            $this->mail->isHTML(true); // Set email format to HTML
            $this->mail->Subject = '[Eir.Plus] Thank you for contacting support.';
            $this->mail->Body    = 
                         '<p>Thank you for contacting support, we\'ll get back to you as fast as we can!</p>
                          <p>User Issue:</p>
                          <p>Title: '. $userTitle .'</p>
                          <p>Title: '. $userMessage .'</p>';     
            //$this->db->insertRegToken($registrationCode, $userEmail);        
            $this->mail->send();
        } 
        catch (Exception $ex) 
        {

        }
    }
}
?>