<?php

namespace Test\Bar;

use ZF\Apigility\ApigilityModuleInterface;

class Module implements ApigilityModuleInterface
{
    public function getConfig()
    {
        return array();
    }
}
