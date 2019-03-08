<?php

require('vendor/autoload.php');

use Curl\Curl;

function isPost() {
    return $_SERVER['REQUEST_METHOD'] == 'POST';
}

function sendMail($email, $name) {
    $sendGridApiKey = '';
    $curl = new Curl;

    $curl->setHeader('Authorization', 'Bearer ' . $sendGridApiKey);

    $curl->post('https://api.sendgrid.com/api/mail.send.json', [
        'to' => $email,
        'from' => $email,
        'subject' => 'Contato de teste do site de teste',
        'text' => $name . ' te enviou um e-mail',
    ]);

    var_dump($curl->response);
}
