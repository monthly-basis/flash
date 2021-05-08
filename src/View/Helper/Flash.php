<?php
namespace MonthlyBasis\Flash\View\Helper;

use Laminas\View\Helper\AbstractHelper;
use MonthlyBasis\Flash\Model\Service as FlashService;

class Flash extends AbstractHelper
{
    public function __construct(
        FlashService\Flash $flashService
    ) {
        $this->flashService = $flashService;
    }

    public function __invoke()
    {
        return $this->flashService;
    }
}
