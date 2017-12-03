<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\JsonResponse;
use AppBundle\Entity\Pergunta;
use AppBundle\Entity\Resposta;

class QuestionarioController extends Controller {

    public $em;
    public $error = null;

    public function __construct() {
        $this->logControle = new LogController();
    }

    /**
     * @Route("/questionario/{acession}", name="questionario")
     */
    public function questionarioAction(Request $request, $acession) {
        $this->em = $this->getDoctrine()->getManager();
        $qbPerguntas = $this->em->createQueryBuilder();
        $qbPerguntas
                ->select('p')
                ->from('AppBundle:Pergunta', 'p')
                 //  ->orderBy('p.or', 'ASC')
                ->getQuery()
                ->execute();
        $resultadoPerguntas = $qbPerguntas->getQuery()->getArrayResult();
        foreach ($resultadoPerguntas as $pergunta) {

            $arrayPerguntas[] = array(
                "idPergunta" => $pergunta['idPergunta'],
                "descricaoPergunta" => $pergunta['descricaoPergunta']
            );
        }
        $this->logControle->log("Perguntas : " . print_r($arrayPerguntas, true));
        return $this->render('questionario.html.twig', array('perguntas' => $arrayPerguntas, 'acession'=>$acession));
    }

    /**
     * @Route("/salvarQuestionario/{acession}")
     */
    public function salvarQuestionarioAction(Request $request, $acession) {
        $this->em = $this->getDoctrine()->getManager();
        if (0 === strpos($request->headers->get('Content-Type'), 'application/json')) {
            $data = json_decode($request->getContent(), true);
            $request->request->replace(is_array($data) ? $data : array());

            $this->logControle->log("Request salvar questionario: " . print_r($data, true));
            foreach ($data as $key => $value) {
                try {
                    $respostas = new Resposta();
                    $objetoPergunta = $this->getDoctrine()
                            ->getRepository('AppBundle:Pergunta')
                            ->findOneBy(array('idPergunta' => $key));
                    $this->logControle->log("Objeto pergunta: " . print_r($objetoPergunta, true));
                    $respostas->setIdPergunta($objetoPergunta);
                    $date = new \DateTime();
                    
                    $respostas->setNota($value);
                    $respostas->setAccessionNumber($acession);
                    $respostas->setTimestampResposta($date);

                    $this->em->persist($respostas);
                    $this->em->flush();
                    $retornoRequest = array(
                        "sucesso" => true
                    );
                } catch (\Exception $e) {
                    $this->logControle->log($e->getMessage() . " - " . $e->getCode());

                    $retornoRequest = array(
                        "sucesso" => false
                    );
                }
            }
        } else {
            $retornoRequest = array(
                "sucesso" => false
            );
        }
        $this->logControle->log("retorno request : " . print_r($retornoRequest, true));
        return new JsonResponse($retornoRequest);
    }

}
