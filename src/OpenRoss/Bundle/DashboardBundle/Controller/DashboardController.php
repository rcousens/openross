<?php

namespace OpenRoss\Bundle\DashboardBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DashboardController
 * @Route("/dashboard")
 * @package OpenRoss\Bundle\DashboardBundle\Controller
 */
class DashboardController extends Controller
{
    /**
     * @Route("")
     * @Template()
     */
    public function indexAction()
    {
        return array();
    }
}
