<?php
namespace LeoGalleguillos\Flash\Model\Service;

use LeoGalleguillos\Flash\Model\Service\Flash as FlashService;
use PHPUnit\Framework\TestCase;

class FlashTest extends TestCase
{
    protected function setUp()
    {
        $this->flashService = new FlashService();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(FlashService::class, $this->flashService);
    }

    public function testClear()
    {
        $this->flashService->clear();
        $this->assertEmpty(
            $this->flashService->getMessage()
        );
        $this->assertEmpty(
            $this->flashService->getMessages()
        );

        $message = 'today is an amazing day';
        $this->flashService->setMessage($message);

        $messages = [
            'today is an amazing day',
            'and we are going to celebrate',
        ];
        $this->flashService->setMessages($messages);

        $this->flashService->clear();
        $this->assertEmpty(
            $this->flashService->getMessage()
        );
        $this->assertEmpty(
            $this->flashService->getMessages()
        );
    }

    public function testSetAndGetMessage()
    {
        $message = 'today is an amazing day';
        $this->flashService->setMessage($message);
        $this->assertSame(
            $message,
            $this->flashService->getMessage()
        );

        $message = 12345;
        $this->flashService->setMessage($message);
        $this->assertSame(
            (string) $message,
            $this->flashService->getMessage()
        );
    }

    public function testSetAndGetMessages()
    {
        $messages = [
            'today is an amazing day',
            'and we are going to celebrate',
        ];
        $this->flashService->setMessages($messages);
        $this->assertSame(
            $messages,
            $this->flashService->getMessages()
        );

        $messages = [];
        $this->flashService->setMessages($messages);
        $this->assertSame(
            $messages,
            $this->flashService->getMessages()
        );
    }
}
