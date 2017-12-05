<?php
namespace LeoGalleguillos\Flash\Model\Service;

class Flash
{
    private $messageWasSet   = false;
    private $messagesWereSet = false;

    public function __destruct()
    {
        if (!$this->messageWasSet) {
            $_SESSION['flash']['message'] = '';
        }

        if (!$this->messagesWereSet) {
            $_SESSION['flash']['messages'] = [];
        }
    }

    public function getMessage() : string
    {
        return $_SESSION['flash']['message'];
    }

    public function getMessages() : array
    {
        return $_SESSION['flash']['messages'];
    }

    public function setMessage(string $message)
    {
        $this->messageWasSet          = true;
        $_SESSION['flash']['message'] = $message;
    }

    public function setMessages(array $messages)
    {
        $this->messagesWereSet         = true;
        $_SESSION['flash']['messages'] = $messages;
    }
}
