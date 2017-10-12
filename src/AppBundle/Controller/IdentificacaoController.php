<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class IdentificacaoController extends Controller
{
    /**
     * @Route("/identificacao", name="homepage")
     */
    public function identificacaoAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('identificacao.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
    }
}
