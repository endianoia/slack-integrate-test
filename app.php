<?php
    require 'vendor/autoload.php';
    $sendgrid = new SendGrid(getenv('SENDGRID_USERNAME'), getenv('SENDGRID_PASSWORD'));

    $mail = new SendGrid\Email();
    $mail
        ->addTo('[送信先メールアドレス]')
        ->setFrom('[送信元メールアドレス]')
        ->setSubject('[タイトル]')
        ->setText('[本文]')
    ;

    $result = $sendgrid->send($mail);
?>
