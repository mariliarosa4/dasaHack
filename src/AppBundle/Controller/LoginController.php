<?php

namespace AppBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Usuarios;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\HttpFoundation\JsonResponse;

class LoginController extends Controller {

    public $formUserLogin;
    public $logControle;
    public $em;
    public $error = null;

    public function __construct() {
        $this->logControle = new LogController();
    }

    /**
     * @Route("/login", name="")
     */
    public function loginAction(Request $request) {
        if ($this->get('session')->get('idUser')) {

            return $this->redirectToRoute('home');
        } else {

            $user = new Usuarios();

            $this->formUserLogin = $this->createFormBuilder($user)
                    ->add('email', TextType::class, array('label' => false))
                    ->add('senha', PasswordType::class, array('label' => false))
                    ->getForm();

            $this->formUserLogin->handleRequest($request);
        }
        if ($this->formUserLogin->isSubmitted() && $this->formUserLogin->isValid()) {
            if ($this->autenticacao($user->getEmailusuario(), $user->getSenhausuario())) {
                $this->em = $this->getDoctrine()->getManager();

                return $this->render('login.html.twig', array(
                            'form' => $this->formUserLogin->createView(), 'erro' => $this->error
                ));
            }
        }
        return $this->render('login.html.twig', array(
                    'form' => $this->formUserLogin->createView(), 'erro' => $this->error
        ));
    }

    public function autenticacao($email, $senha2) {

       // $senha = hash('sha256', $senha2);
        $usuarioAutenticado = $this->getDoctrine()
                ->getRepository('AppBundle:Usuarios')
                ->findBy(array('email' => $email, 'senhau' => $senha));


        if (!$usuarioAutenticado) {
            $this->error = "Usuário ou senha inválidos!";
            return false;
        } else {

            $idUser = $usuarioAutenticado[0]->getCodigousuario();
            $this->get('session')->set('idUser', $idUser);

            return true;
        }
    }

    /**
     * @Route("/logout")
     */
    public function logoutAction() {

        $this->get('session')->invalidate();
        return $this->redirectToRoute('login');
    }

}
