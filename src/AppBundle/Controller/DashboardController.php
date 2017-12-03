<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Resposta;
use AppBundle\Entity\Unit;
use AppBundle\Entity\Pergunta;

class DashboardController extends Controller {

    public $em;

    public function __construct() {
        $this->logControle = new LogController();
    }

    /**
     * @Route("/dashboard", name="dashboard")
     */
    public function dashboardAction(Request $request) {
        $this->em = $this->getDoctrine()->getManager()->getConnection();

        $query = $this->em->executeQuery("select * from view_exam_dose_score where city_name='Rio de Janeiro' ");

        foreach ($query->fetchAll() as $row) {
            $jsonGrafico[] = $row;
            $this->logControle->log("Resultado : " . print_r($jsonGrafico, true));
        }



        return $this->render('dashboard.html.twig', array('grafico' => $jsonGrafico));
    }

    /**
     * @Route("/userDashboard", name="user")
     */
    public function userDashboardAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('user.html.twig', [
                    'base_dir' => realpath($this->getParameter('kernel.project_dir')) . DIRECTORY_SEPARATOR,
        ]);
    }

    /**
     * @Route("/table", name="table")
     */
    public function tableAction(Request $request) {
        // replace this example code with whatever you need
        return $this->render('table.html.twig', [
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

}
