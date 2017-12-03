<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_fa10caccd14d783da51d499414c86b1c3d818eb4b968e27d33d8564a79fb74ee extends Twig_Template
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
        $__internal_a0334b50e83e99eaffde3b6fb4d87af238b275b49a35dc9d2f55d80eba83618a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0334b50e83e99eaffde3b6fb4d87af238b275b49a35dc9d2f55d80eba83618a->enter($__internal_a0334b50e83e99eaffde3b6fb4d87af238b275b49a35dc9d2f55d80eba83618a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_3c3acbc5d351b959926fcb4902f63f378bba798fee2210fca9431fa07512ac33 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3c3acbc5d351b959926fcb4902f63f378bba798fee2210fca9431fa07512ac33->enter($__internal_3c3acbc5d351b959926fcb4902f63f378bba798fee2210fca9431fa07512ac33_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_a0334b50e83e99eaffde3b6fb4d87af238b275b49a35dc9d2f55d80eba83618a->leave($__internal_a0334b50e83e99eaffde3b6fb4d87af238b275b49a35dc9d2f55d80eba83618a_prof);

        
        $__internal_3c3acbc5d351b959926fcb4902f63f378bba798fee2210fca9431fa07512ac33->leave($__internal_3c3acbc5d351b959926fcb4902f63f378bba798fee2210fca9431fa07512ac33_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
