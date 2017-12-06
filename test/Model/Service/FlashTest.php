<?php
namespace LeoGalleguillos\FlashTest\Model\Service;

use LeoGalleguillos\Flash\Model\Service\Flash as FlashService;
use PHPUnit\Framework\TestCase;

class FlashTest extends TestCase
{
    protected function setUp()
    {
        $this->flashService = new FlashService();
    }

    public function testInstance()
    {
        $this->assertInstanceOf(FlashService::class, $this->flashService);
    }

    public function testDestruct()
    {
        $flashService1 = new FlashService();
        $flashService1->setMessage('a');
        $this->assertSame('a', $flashService1->getMessage());
        unset($flashService1);

        $flashService2 = new FlashService();
        $flashService2->setMessages(['a', 'b', 'c']);
        $this->assertSame('a', $flashService2->getMessage());
        unset($flashService2);

        $flashService3 = new FlashService();
        $this->assertEmpty($flashService3->getMessage());
        $this->assertSame(['a', 'b', 'c'], $flashService3->getMessages());
        unset($flashService3);

        $flashService4 = new FlashService();
        $this->assertEmpty($flashService4->getMessage());
        $this->assertEmpty($flashService4->getMessages());
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
