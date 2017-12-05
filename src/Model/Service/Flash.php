<?php
namespace LeoGalleguillos\Flash\Model\Service;

class Flash
{
    public function __construct()
    {
        $_SESSION['flash']             = [];
        $_SESSION['flash']['message']  = '';
        $_SESSION['flash']['messages'] = [];
    }

    public function clear()
    {
        $_SESSION['flash']['message'] = '';
        $_SESSION['flash']['messages'] = [];
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
        $_SESSION['flash']['message'] = $message;
    }

    public function setMessages(array $messages)
    {
        $_SESSION['flash']['messages'] = $messages;
    }
}
