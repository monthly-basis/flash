<?php
namespace LeoGalleguillos\Flash;

use LeoGalleguillos\Flash\Model\Service\Flash as FlashService;

class Module
{
    public function getServiceConfig()
    {
        return [
            'factories' => [
                FlashService::class => function ($serviceManager) {
                    return new FlashService();
                },
            ],
        ];
    }
}
