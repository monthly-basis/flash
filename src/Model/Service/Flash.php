<?php
namespace MonthlyBasis\Flash\Model\Service;

use MonthlyBasis\Flash\Model\Service as FlashService;

class Flash
{
    protected $setKeys = [];

    public function __construct()
    {
        if (!isset($_SESSION)) {
            $_SESSION = [];
        }
        if (!isset($_SESSION['flash'])) {
            $_SESSION['flash'] = [];
        }
    }

    public function __destruct()
    {
        foreach (array_keys($_SESSION['flash']) as $key) {
            if (!in_array($key, $this->setKeys)) {
                unset($_SESSION['flash'][$key]);
            }
        }
    }

    public function get(string $key)
    {
        return $_SESSION['flash'][$key] ?? null;
    }

    public function set(string $key, $value) : FlashService\Flash
    {
        $this->setKeys[]         = $key;
        $_SESSION['flash'][$key] = $value;
        return $this;
    }
}
