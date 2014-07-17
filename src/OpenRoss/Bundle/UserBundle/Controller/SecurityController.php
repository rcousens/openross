<?php

namespace OpenRoss\Bundle\UserBundle\Controller;

use FOS\UserBundle\Controller\SecurityController as BaseSecurityController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class SecurityController
 * @package OpenRoss\Bundle\UserBundle\Controller
 */
class SecurityController extends BaseSecurityController
{
    /**
     * @param Request $request
     * @return RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function loginAction(Request $request)
    {
        if ($this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            return new RedirectResponse($this->container->get('router')->generate('openross_dashboard_dashboard_index'), 302);
        } else {
            return parent::loginAction($request);
        }
    }
}
