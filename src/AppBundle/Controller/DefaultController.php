<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller {

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('dashboard.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/maps", name="maps")
     */
    public function mapsAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('maps.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/userDashboard", name="userDashboard")
     */
    public function userDashboardAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('maps.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

}
