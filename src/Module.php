<?php
namespace MonthlyBasis\Flash;

use Laminas\Mvc\MvcEvent;
use MonthlyBasis\Flash\Model\Service as FlashService;
use MonthlyBasis\Flash\View\Helper as FlashHelper;

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
