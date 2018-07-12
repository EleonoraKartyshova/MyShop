<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:04
 */
//namespace Shop;
class Mailer
{
    public $transport;

    public function setTransport(SendMailTransport $tr)
    {
        $this->transport = $tr;
    }
    public function send($mailMessage)
    {
         $this->transport->smTransport($mailMessage);
    }
}