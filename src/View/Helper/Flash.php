<?php
namespace MonthlyBasis\Flash\View\Helper;

use MonthlyBasis\Flash\Model\Service as FlashService;
use Zend\View\Helper\AbstractHelper;

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
