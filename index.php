
<?php 
$firstWord = "Hello";
$secondWord = "World";
    echo "<p>";
    echo '$firstWord = "'. $firstWord .'"
    <br>$secondWord = "'. $secondWord .'""';
    echo "</p>";

    $config = [
        'protocol' => 'smtp',
        'smtp_host' => 'ssl://smtp.gmail.com',
        'smtp_port' => 465,
        'mailtype' => 'html',
        'smtp_user' => '',
        'smtp_pass' => '',
        'newline' => "\r\n",
    ];

    $to = "novoikanal96@gmail.com";
    $subject = "Hello";
    $message = "This is a test, please disregard.";
    $headers .= 'Return-Path: test@domain.tld' ."\r\n";
    $headers .= 'From: Sender <test@domain.tld>' . "\r\n";
    mail($to, $subject, $message, $headers);
