<?php
// Swiftmailer lib
require_once 'plib/vendor/autoload.php';

$email = "davidguerra816@gmail.com";

// create the activation link

    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
    ->setUsername('davgue77@cjc.edu.bz')
    ->setPassword('ecgqgqcneolxlusw');

    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message('Registration Email'))
    ->setFrom(['davgue77@cjc.edu.bz' => 'Verificition Code'])
    ->setTo([$email])
    ->setBody('Click here to activate your account with us --> ')
    ;

    // Send the message
    $result = $mailer->send($message);



?>