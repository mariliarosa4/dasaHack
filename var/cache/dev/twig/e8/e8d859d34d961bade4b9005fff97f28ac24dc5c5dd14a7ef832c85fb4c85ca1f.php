<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_80fb3a719a8df43bc36ec504dc75df625d94e38a75044c2f8ac923e5e7692b72 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_69f1cb53e7a9bb9ba42e28b5074a3b4d52b2b250a7e960a4bb012b88434faab2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69f1cb53e7a9bb9ba42e28b5074a3b4d52b2b250a7e960a4bb012b88434faab2->enter($__internal_69f1cb53e7a9bb9ba42e28b5074a3b4d52b2b250a7e960a4bb012b88434faab2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_88fd9595ff84c9a18467f660c927b60ad523dc99d7b8d784422d2d7a6edae1aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88fd9595ff84c9a18467f660c927b60ad523dc99d7b8d784422d2d7a6edae1aa->enter($__internal_88fd9595ff84c9a18467f660c927b60ad523dc99d7b8d784422d2d7a6edae1aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_69f1cb53e7a9bb9ba42e28b5074a3b4d52b2b250a7e960a4bb012b88434faab2->leave($__internal_69f1cb53e7a9bb9ba42e28b5074a3b4d52b2b250a7e960a4bb012b88434faab2_prof);

        
        $__internal_88fd9595ff84c9a18467f660c927b60ad523dc99d7b8d784422d2d7a6edae1aa->leave($__internal_88fd9595ff84c9a18467f660c927b60ad523dc99d7b8d784422d2d7a6edae1aa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
