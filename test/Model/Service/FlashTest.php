<?php
namespace MonthlyBasis\FlashTest\Model\Service;

use MonthlyBasis\Flash\Model\Service as FlashService;
use PHPUnit\Framework\TestCase;

class FlashTest extends TestCase
{
    protected function setUp(): void
    {
        $this->flashService = new FlashService\Flash();
    }

    public function test___destruct_instantiateAndUnsetInstances_expectedValues()
    {
        $flashService1 = new FlashService\Flash();
        $flashService1->set('message', 'a');
        $this->assertSame('a', $flashService1->get('message'));
        unset($flashService1);

        $flashService2 = new FlashService\Flash();
        $this->assertSame('a', $flashService2->get('message'));
        unset($flashService2);

        $flashService3 = new FlashService\Flash();
        $this->assertNull($flashService3->get('message'));
        unset($flashService3);
    }

    public function test_setAndGet_expectedValues()
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

        $this->assertNull(
            $this->flashService->get('nonexistent key')
        );
    }
}
