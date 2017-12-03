<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $trimmedPathinfo = rtrim($pathinfo, '/');
        $context = $this->context;
        $request = $this->request;
        $requestMethod = $canonicalMethod = $context->getMethod();
        $scheme = $context->getScheme();

        if ('HEAD' === $requestMethod) {
            $canonicalMethod = 'GET';
        }


        // 
        if ('' === $trimmedPathinfo) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => '',);
        }

        // questionario
        if ('/questionario' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\QuestionarioController::questionarioAction',  '_route' => 'questionario',);
        }

        // app_questionario_salvarquestionario
        if ('/salvarQuestionario' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\QuestionarioController::salvarQuestionarioAction',  '_route' => 'app_questionario_salvarquestionario',);
        }

        // app_rest_salvardados
        if ('/salvarDados' === $pathinfo) {
            return array (  '_controller' => 'AppBundle\\Controller\\RESTController::salvarDadosAction',  '_route' => 'app_rest_salvardados',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
