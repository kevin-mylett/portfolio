<?php

    // Only process POST reqeusts.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form fields and remove whitespace.
        $firstname = strip_tags(trim($_POST["firstname"]));
				$firstname = str_replace(array("\r","\n"),array(" "," "),$firstname);
        $lastname = strip_tags(trim($_POST["lastname"]));
                $lastname = str_replace(array("\r","\n"),array(" "," "),$lastname);
        $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
        $message = trim($_POST["message"]);

        //Check that data was sent to the mailer.
        if ( empty($firstname) OR empty($lastname) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            // Set a 400 (bad request) response code and exit.
            http_response_code(400);
            echo 'Oops! There was a problem with your submission. Please ensure all fields are filled in';
            exit;
        }
    }

require 'PHPMailer/PHPMailerAutoload.php';

$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com';  					  // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pixelstest99@gmail.com';           // SMTP username
$mail->Password = 'Snuggles1';                        // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('pixelstest99@gmail.com', $firstname . ' ' . $lastname);
//$mail->From = "email.address@gmail.com";
//$mail->FromName = ($firstname . ' ' . $lastname);
$mail->addAddress('contact@99pixels.co.uk');     // Add a recipient
$mail->addReplyTo($email, $firstname . ' ' . $lastname);

$mail->isHTML(true);                                  // Set email format to HTML

$email_content = '<p>The following message was sent from <a href="http://www.kevinmylett.com">http://www.kevinmylett.com</a>:</p>';
$email_content .= '<p><span style="font-weight:bold">Name: </span> '.$firstname. ' ' . $lastname.'</p>';
$email_content .= '<p><span style="font-weight:bold">Email: </span>'.$email.'</p>';
$email_content .= '<p><span style="font-weight:bold">Message: </span>'.$message.'</p>';

$mail->Subject = 'New Message from kevinmylett.com';
$mail->Body    = $email_content;

if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo 'Thank You! Your message has been sent. I will be in touch shortly';
}

?>