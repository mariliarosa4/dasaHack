<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_4bd0b9aa65688a53c23b37aed6b9e4f4ceb88b2ac35bc14e6a9447cfd4257854 extends Twig_Template
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
        $__internal_89c9bb8eb9061e732cf796d967baba1b6bae381e359b8b1f3e0fed805a600ef5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_89c9bb8eb9061e732cf796d967baba1b6bae381e359b8b1f3e0fed805a600ef5->enter($__internal_89c9bb8eb9061e732cf796d967baba1b6bae381e359b8b1f3e0fed805a600ef5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_5d7eb0750ed23ab128935b4763a6e841782d386a1347a4e0961be64cf4dba1c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d7eb0750ed23ab128935b4763a6e841782d386a1347a4e0961be64cf4dba1c2->enter($__internal_5d7eb0750ed23ab128935b4763a6e841782d386a1347a4e0961be64cf4dba1c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_89c9bb8eb9061e732cf796d967baba1b6bae381e359b8b1f3e0fed805a600ef5->leave($__internal_89c9bb8eb9061e732cf796d967baba1b6bae381e359b8b1f3e0fed805a600ef5_prof);

        
        $__internal_5d7eb0750ed23ab128935b4763a6e841782d386a1347a4e0961be64cf4dba1c2->leave($__internal_5d7eb0750ed23ab128935b4763a6e841782d386a1347a4e0961be64cf4dba1c2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
