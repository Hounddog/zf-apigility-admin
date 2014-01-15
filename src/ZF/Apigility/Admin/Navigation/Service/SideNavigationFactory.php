<?php
/**
 * @license   http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 * @copyright Copyright (c) 2013 Zend Technologies USA Inc. (http://www.zend.com)
 */

namespace ZF\Apigility\Admin\Navigation\Service;

use Zend\Navigation\Service\DefaultNavigationFactory;

class SideNavigationFactory extends DefaultNavigationFactory
{
    protected function getName()
    {
        return 'ag-sidenav';
    }
}