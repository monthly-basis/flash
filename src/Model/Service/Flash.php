<?php
namespace LeoGalleguillos\Flash\Model\Service;

class Flash
{
    private $message  = '';
    private $messages = [];

    public function __construct()
    {
        $this->message  = $_SESSION['flash']['message'];
        $this->messages = $_SESSION['flash']['messages'];
    }

    public function clear()
    {
        $this->message  = '';
        $this->messages = [];
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function getMessages()
    {
        return $this->messages;
    }

    public function setMessage(string $message)
    {
        $this->message = $message;
    }

    public function setMessages(array $messages)
    {
        $this->messages = $messages;
    }
}
