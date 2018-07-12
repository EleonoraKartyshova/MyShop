<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:23
 */
require_once 'MailMessage.php';
require_once 'Mailer.php';
require_once 'SendMailTransport.php';
//namespace Shop;

$mailer = new Mailer();
$mailMessage = new MailMessage();
$mailMessage->setTo("sendto@gmail.com");
$mailMessage->setSubject("Subject");
$mailMessage->setBody("Hello!");
$mailMessage->setFrom("mymail@gmail.com");
$mailer->setTransport(new SendMailTransport());
$mailer->send($mailMessage);

