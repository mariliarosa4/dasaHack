<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class HistoriaFamiliarController extends Controller
{
    /**
     * @Route("/historiafamiliar", name="historiafamiliar")
     */
    public function historiaFamiliarAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('historiaFamiliar.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
