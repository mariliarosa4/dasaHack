<?php

/* TwigBundle:Exception:exception.rdf.twig */
class __TwigTemplate_9618fb385f27548aaf717ce25d8363a3037fd38d77cd4a84866ea38449ca69c6 extends Twig_Template
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
        $__internal_296b35e3325df34251817f4d92c0e7f85dedf01ddd514dea3bdea4a756f528b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_296b35e3325df34251817f4d92c0e7f85dedf01ddd514dea3bdea4a756f528b3->enter($__internal_296b35e3325df34251817f4d92c0e7f85dedf01ddd514dea3bdea4a756f528b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        $__internal_88f1a5358f8f6f652565a7fb2f9fc186086f91bb97813ed29f49f00cfaeced85 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_88f1a5358f8f6f652565a7fb2f9fc186086f91bb97813ed29f49f00cfaeced85->enter($__internal_88f1a5358f8f6f652565a7fb2f9fc186086f91bb97813ed29f49f00cfaeced85_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => (isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_296b35e3325df34251817f4d92c0e7f85dedf01ddd514dea3bdea4a756f528b3->leave($__internal_296b35e3325df34251817f4d92c0e7f85dedf01ddd514dea3bdea4a756f528b3_prof);

        
        $__internal_88f1a5358f8f6f652565a7fb2f9fc186086f91bb97813ed29f49f00cfaeced85->leave($__internal_88f1a5358f8f6f652565a7fb2f9fc186086f91bb97813ed29f49f00cfaeced85_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.rdf.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "TwigBundle:Exception:exception.rdf.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle/Resources/views/Exception/exception.rdf.twig");
    }
}
