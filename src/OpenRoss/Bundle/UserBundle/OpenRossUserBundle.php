<?php

namespace OpenRoss\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * Class OpenRossUserBundle
 * @package OpenRoss\Bundle\UserBundle
 */
class OpenRossUserBundle extends Bundle
{
    /**
     * @return string
     */
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
