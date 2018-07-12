<?php
/**
 * Created by PhpStorm.
 * User: phpuser
 * Date: 11.07.18
 * Time: 12:05
 */
//namespace Shop;
class MailMessage
{
    private $messageBody;
    private $to;
    private $subject;
    private $from;
    public function setTo($to)
    {
        $this->to = $to;
    }
    public function setSubject($subject)
    {
        $this->subject = $subject;
    }
    public function setBody($messageBody)
    {
        $this->messageBody = $messageBody;
    }
    public function setFrom($from)
    {
        $this->from = $from;
    }
    public function getTo()
    {
        return $this->to;
    }
    public function getSubject()
    {
        return $this->subject;
    }
    public function getBody()
    {
        return $this->messageBody;
    }
    public function getFrom()
    {
        return $this->from;
    }
}