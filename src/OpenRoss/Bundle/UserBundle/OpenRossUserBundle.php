<?php

namespace OpenRoss\Bundle\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class OpenRossUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}
