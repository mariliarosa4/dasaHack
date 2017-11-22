<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class EvolucaoNeuroPsicoController extends Controller
{
    /**
     * @Route("/neuropsico", name="neuropsico")
     */
    public function neuropsicoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('evolucaoNeuroPsico.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
