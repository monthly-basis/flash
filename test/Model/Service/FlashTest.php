<?php
namespace LeoGalleguillos\Flash\Model\Service;

use LeoGalleguillos\Flash\Model\Service\Flash as FlashService;
use PHPUnit\Framework\TestCase;

class FlashTest extends TestCase
{
    protected function setUp()
    {
        $_SESSION                      = [];
        $_SESSION['flash']             = [];
        $_SESSION['flash']['message']  = '';
        $_SESSION['flash']['messages'] = [];
        $this->flashService = new FlashService();
    }

    public function testInitialize()
    {
        $this->assertInstanceOf(FlashService::class, $this->flashService);
    }
}
