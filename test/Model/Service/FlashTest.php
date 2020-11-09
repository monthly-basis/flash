<?php
namespace MonthlyBasis\FlashTest\Model\Service;

use MonthlyBasis\Flash\Model\Service as FlashService;
use PHPUnit\Framework\TestCase;

class FlashTest extends TestCase
{
    protected function setUp()
    {
        $this->flashService = new FlashService\Flash();
    }

    public function testDestruct()
    {
        $flashService1 = new FlashService\Flash();
        $flashService1->set('message', 'a');
        $this->assertSame('a', $flashService1->get('message'));
        unset($flashService1);

        $flashService2 = new FlashService\Flash();
        $this->assertSame('a', $flashService2->get('message'));
        unset($flashService2);

        $flashService3 = new FlashService\Flash();
        $this->assertEmpty($flashService3->get('message'));
        unset($flashService3);

        $flashService4 = new FlashService\Flash();
        $this->assertEmpty($flashService4->get('message'));
    }

    public function testSetAndGet()
    {
        $message = 'today is an amazing day';
        $this->flashService->set('message', $message);
        $this->assertSame(
            $message,
            $this->flashService->get('message')
        );

        $message = 12345;
        $this->flashService->set('message', $message);
        $this->assertSame(
            $message,
            $this->flashService->get('message')
        );
    }
}
