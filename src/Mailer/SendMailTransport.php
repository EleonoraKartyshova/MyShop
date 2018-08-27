<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:11
 */
//namespace Shop;
class SendMailTransport
{
    function smTransport(MailMessage $mailMessage)
    {
        echo $mailMessage->getTo() , $mailMessage->getSubject() , $mailMessage->getBody() , $mailMessage->getFrom();
    }
}