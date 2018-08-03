<?php
namespace LeoGalleguillos\Flash;

use LeoGalleguillos\Flash\Model\Service as FlashService;
use LeoGalleguillos\Flash\View\Helper as FlashHelper;
use Zend\Mvc\MvcEvent;

class Module
{
    public function getConfig()
    {
        return [
            'view_helpers' => [
                'aliases' => [
                    'flash' => FlashHelper\Flash::class,
                ],
                'factories' => [
                    FlashHelper\Flash::class => function ($serviceManager) {
                        return new FlashHelper\Flash(
                            $serviceManager->get(FlashService\Flash::class)
                        );
                    },
                ],
            ],
        ];
    }

    public function getServiceConfig()
    {
        return [
            'factories' => [
                FlashService\Flash::class => function ($serviceManager) {
                    return new FlashService\Flash();
                },
            ],
        ];
    }
}
