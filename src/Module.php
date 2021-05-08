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
                    FlashHelper\Flash::class => function ($sm) {
                        return new FlashHelper\Flash(
                            $sm->get(FlashService\Flash::class)
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
                FlashService\Flash::class => function ($sm) {
                    return new FlashService\Flash();
                },
            ],
        ];
    }
}
