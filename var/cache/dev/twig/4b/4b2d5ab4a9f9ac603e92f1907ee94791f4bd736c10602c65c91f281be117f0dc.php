<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_b1ae45e6c525af639d29c6ee237b9149c3c15a6d09b3bcb07fc13f114b2cf538 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1abd64572323c7df3815d4a200ccaf5e76f5e432186487828655fc450c2ff4db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1abd64572323c7df3815d4a200ccaf5e76f5e432186487828655fc450c2ff4db->enter($__internal_1abd64572323c7df3815d4a200ccaf5e76f5e432186487828655fc450c2ff4db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_6febc2a9eb1dc4dd5711501d7b060da25ab7e0e74ef7e809eb07e1f44d279271 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6febc2a9eb1dc4dd5711501d7b060da25ab7e0e74ef7e809eb07e1f44d279271->enter($__internal_6febc2a9eb1dc4dd5711501d7b060da25ab7e0e74ef7e809eb07e1f44d279271_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_1abd64572323c7df3815d4a200ccaf5e76f5e432186487828655fc450c2ff4db->leave($__internal_1abd64572323c7df3815d4a200ccaf5e76f5e432186487828655fc450c2ff4db_prof);

        
        $__internal_6febc2a9eb1dc4dd5711501d7b060da25ab7e0e74ef7e809eb07e1f44d279271->leave($__internal_6febc2a9eb1dc4dd5711501d7b060da25ab7e0e74ef7e809eb07e1f44d279271_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_38de284d7886357cca623ab8d1566219b00fcd86a81be9e46dd51c929705d0ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38de284d7886357cca623ab8d1566219b00fcd86a81be9e46dd51c929705d0ce->enter($__internal_38de284d7886357cca623ab8d1566219b00fcd86a81be9e46dd51c929705d0ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_ad90d6a7fda1a7ebfd5b0b3a647280762f05590ac0dda30643bff1c77ca5a2fd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ad90d6a7fda1a7ebfd5b0b3a647280762f05590ac0dda30643bff1c77ca5a2fd->enter($__internal_ad90d6a7fda1a7ebfd5b0b3a647280762f05590ac0dda30643bff1c77ca5a2fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_ad90d6a7fda1a7ebfd5b0b3a647280762f05590ac0dda30643bff1c77ca5a2fd->leave($__internal_ad90d6a7fda1a7ebfd5b0b3a647280762f05590ac0dda30643bff1c77ca5a2fd_prof);

        
        $__internal_38de284d7886357cca623ab8d1566219b00fcd86a81be9e46dd51c929705d0ce->leave($__internal_38de284d7886357cca623ab8d1566219b00fcd86a81be9e46dd51c929705d0ce_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
