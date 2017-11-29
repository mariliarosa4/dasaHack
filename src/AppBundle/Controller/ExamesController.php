<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class ExamesController extends Controller
{
    /**
     * @Route("/exames", name="neuropsico")
     */
    public function examesAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('exames.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
