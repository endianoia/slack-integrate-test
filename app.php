<?php
    require 'vendor/autoload.php';
    $sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));

    $mail = new SendGrid\Email();
    $mail
        ->addTo('[wasuremono.7z@gmail.com]')
        ->setFrom('[wasuremono7z@gmail.com]')
        ->setSubject('[タイトル]')
        ->setText('[本文]')
    ;

    $result = $sendgrid->send($mail);
?>
