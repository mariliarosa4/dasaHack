<?php

/* WebProfilerBundle:Profiler:ajax_layout.html.twig */
class __TwigTemplate_706943a73a69727d5e5e089c9a20f44ad1296883b63db329c8e7ca7100b2eb50 extends Twig_Template
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
        $__internal_2c2d784a482c85cfe14ce090539eac16d488d399a50f8434ff5fc3e860427015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c2d784a482c85cfe14ce090539eac16d488d399a50f8434ff5fc3e860427015->enter($__internal_2c2d784a482c85cfe14ce090539eac16d488d399a50f8434ff5fc3e860427015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        $__internal_9ed2ad92bf35de6c8a800b971e949bda09ffa8f256c62aba5a226a21096a901e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed2ad92bf35de6c8a800b971e949bda09ffa8f256c62aba5a226a21096a901e->enter($__internal_9ed2ad92bf35de6c8a800b971e949bda09ffa8f256c62aba5a226a21096a901e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_2c2d784a482c85cfe14ce090539eac16d488d399a50f8434ff5fc3e860427015->leave($__internal_2c2d784a482c85cfe14ce090539eac16d488d399a50f8434ff5fc3e860427015_prof);

        
        $__internal_9ed2ad92bf35de6c8a800b971e949bda09ffa8f256c62aba5a226a21096a901e->leave($__internal_9ed2ad92bf35de6c8a800b971e949bda09ffa8f256c62aba5a226a21096a901e_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_bb0d35740de0a0d2774bedbbb48cde5965552a37f3015e270762acb8a6df12ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb0d35740de0a0d2774bedbbb48cde5965552a37f3015e270762acb8a6df12ac->enter($__internal_bb0d35740de0a0d2774bedbbb48cde5965552a37f3015e270762acb8a6df12ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_150d5786075f373bf534a4b0fd0fea38a08ad6e76d5e9bd6e337b8279159b277 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_150d5786075f373bf534a4b0fd0fea38a08ad6e76d5e9bd6e337b8279159b277->enter($__internal_150d5786075f373bf534a4b0fd0fea38a08ad6e76d5e9bd6e337b8279159b277_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_150d5786075f373bf534a4b0fd0fea38a08ad6e76d5e9bd6e337b8279159b277->leave($__internal_150d5786075f373bf534a4b0fd0fea38a08ad6e76d5e9bd6e337b8279159b277_prof);

        
        $__internal_bb0d35740de0a0d2774bedbbb48cde5965552a37f3015e270762acb8a6df12ac->leave($__internal_bb0d35740de0a0d2774bedbbb48cde5965552a37f3015e270762acb8a6df12ac_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:ajax_layout.html.twig";
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
", "WebProfilerBundle:Profiler:ajax_layout.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/ajax_layout.html.twig");
    }
}
