<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_72715f3f9b43be9551e560ea5e04186fdcc2c36da980752869d46c6c98aa4c7e extends Twig_Template
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
        $__internal_7ae978eb2ac158c411d5373c9df5a319690376a6b034e81fce88782f9e2fec11 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ae978eb2ac158c411d5373c9df5a319690376a6b034e81fce88782f9e2fec11->enter($__internal_7ae978eb2ac158c411d5373c9df5a319690376a6b034e81fce88782f9e2fec11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_29fca4ae696d60de70a0373a499aeaaa0c2d3e51dc57aec08478a1fe356f11a6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29fca4ae696d60de70a0373a499aeaaa0c2d3e51dc57aec08478a1fe356f11a6->enter($__internal_29fca4ae696d60de70a0373a499aeaaa0c2d3e51dc57aec08478a1fe356f11a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_7ae978eb2ac158c411d5373c9df5a319690376a6b034e81fce88782f9e2fec11->leave($__internal_7ae978eb2ac158c411d5373c9df5a319690376a6b034e81fce88782f9e2fec11_prof);

        
        $__internal_29fca4ae696d60de70a0373a499aeaaa0c2d3e51dc57aec08478a1fe356f11a6->leave($__internal_29fca4ae696d60de70a0373a499aeaaa0c2d3e51dc57aec08478a1fe356f11a6_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
