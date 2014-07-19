<?php

namespace OpenRoss\Bundle\DemoChartsBundle\Controller;

use RC\AmChartsBundle\AmCharts\AmColumnChart;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DemoChartsController extends Controller
{
    /**
     * @Route("/demo/charts")
     * @Template()
     */
    public function indexAction()
    {
        $columnChart = new AmColumnChart();
        $columnChart->addData(array('country' => 'USA', 'visits' => 3025, 'color' => '#FF0F00'));
        $columnChart->addData(array('country' => 'Japan', 'visits' => 1625, 'color' => '#FF9E01'));
        $columnChart->addData(array('country' => 'Russia', 'visits' => 2025, 'color' => '#ABC311'));
        $columnChart->addData(array('country' => 'UK', 'visits' => 4025, 'color' => '#F00FA1'));
        $columnChart->addValueAxis(array('axisAlpha' => 0, 'position' => 'left', 'title' => 'Visitors from country'));
        $columnChart->addGraph(array('balloonText' => '<b>[[category]]: [[value]]</b>', 'colorField' => 'color', 'fillAlphas' => 0.9, 'lineAlpha' => 0.2, 'valueField' => 'visits'));
        $columnChart->setCategoryField('country');

        return array('chart' => $columnChart);
    }
}
