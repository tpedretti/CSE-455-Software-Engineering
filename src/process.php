<?php
require_once 'includes/config.inc.php';
require_once 'includes/emailUser.php';

//echo "Hello from process.php";

if($_SERVER["REQUEST_METHOD"] == "POST")
{
    //echo "Inside the POST Submit!";
    
    if(isset($_POST['inputEmail']) && isset($_POST['issueContent']) && isset($_POST['issueText']))
    {
        //$db = mysqli_connect(DB_HOSTNAME, DB_USERNAME, DB_PASSWORD);
        $db = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD);
        mysqli_select_db($db, DB_NAME);
        
        $inputEmail = $_POST['inputEmail'];
        $issueContent = $_POST['issueContent'];
        $issueText = $_POST['issueText'];
        
        $query = "INSERT INTO `supportTickets`(`userEmail`, `ticTitle`, `ticIssue`, `open`) VALUES (\"$inputEmail\", \"$issueContent\", \"$issueText\", 1) ";
        $result = mysqli_query($db, $query);
        $mail = new EmailHandler();
        $mail->sendSupportTicket($inputEmail, $issueContent, $issueText);
        /*echo '</br>';
        echo '<pre>' , var_dump($db) , '</pre>';
        echo '</br>';
        echo '<pre>' , var_dump($result) , '</pre>';*/
        
        header('Location: http://www.eir.plus/');
    }
}
?>