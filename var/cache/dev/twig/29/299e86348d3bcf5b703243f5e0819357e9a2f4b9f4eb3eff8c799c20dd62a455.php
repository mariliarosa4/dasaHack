<?php

/* WebProfilerBundle:Collector:exception.html.twig */
class __TwigTemplate_6a749129187158c6f4ec256c7f3be34327e35cf0522ccd52f7cc1840e5496d4d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_665d3db5b972cfc052f8b8094b57ec231bf91ee8df4d910ac2c3d8c2f7d072e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_665d3db5b972cfc052f8b8094b57ec231bf91ee8df4d910ac2c3d8c2f7d072e7->enter($__internal_665d3db5b972cfc052f8b8094b57ec231bf91ee8df4d910ac2c3d8c2f7d072e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $__internal_72b5b7f9e5ab9a9d5df7fdec1a119c68809b92000e2576f3933474573068dff1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_72b5b7f9e5ab9a9d5df7fdec1a119c68809b92000e2576f3933474573068dff1->enter($__internal_72b5b7f9e5ab9a9d5df7fdec1a119c68809b92000e2576f3933474573068dff1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_665d3db5b972cfc052f8b8094b57ec231bf91ee8df4d910ac2c3d8c2f7d072e7->leave($__internal_665d3db5b972cfc052f8b8094b57ec231bf91ee8df4d910ac2c3d8c2f7d072e7_prof);

        
        $__internal_72b5b7f9e5ab9a9d5df7fdec1a119c68809b92000e2576f3933474573068dff1->leave($__internal_72b5b7f9e5ab9a9d5df7fdec1a119c68809b92000e2576f3933474573068dff1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_d1f25b77e79ce59c6d8c33e1f48f87d924a918410726ae7325a7dd70e1b01d47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1f25b77e79ce59c6d8c33e1f48f87d924a918410726ae7325a7dd70e1b01d47->enter($__internal_d1f25b77e79ce59c6d8c33e1f48f87d924a918410726ae7325a7dd70e1b01d47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_bfde6ccb2d21a88649ac4103c1356822737924541bea30152bc2180bd16114a0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bfde6ccb2d21a88649ac4103c1356822737924541bea30152bc2180bd16114a0->enter($__internal_bfde6ccb2d21a88649ac4103c1356822737924541bea30152bc2180bd16114a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_bfde6ccb2d21a88649ac4103c1356822737924541bea30152bc2180bd16114a0->leave($__internal_bfde6ccb2d21a88649ac4103c1356822737924541bea30152bc2180bd16114a0_prof);

        
        $__internal_d1f25b77e79ce59c6d8c33e1f48f87d924a918410726ae7325a7dd70e1b01d47->leave($__internal_d1f25b77e79ce59c6d8c33e1f48f87d924a918410726ae7325a7dd70e1b01d47_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_6fb4dae6ab527a8198734de07481f6134e4d1124f93249ea0a6601e6768aca3d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fb4dae6ab527a8198734de07481f6134e4d1124f93249ea0a6601e6768aca3d->enter($__internal_6fb4dae6ab527a8198734de07481f6134e4d1124f93249ea0a6601e6768aca3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_bae9cde736b4e51a57f7c9e227cd3e37df6cd4b5c6df50ea8760872654177be7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bae9cde736b4e51a57f7c9e227cd3e37df6cd4b5c6df50ea8760872654177be7->enter($__internal_bae9cde736b4e51a57f7c9e227cd3e37df6cd4b5c6df50ea8760872654177be7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_bae9cde736b4e51a57f7c9e227cd3e37df6cd4b5c6df50ea8760872654177be7->leave($__internal_bae9cde736b4e51a57f7c9e227cd3e37df6cd4b5c6df50ea8760872654177be7_prof);

        
        $__internal_6fb4dae6ab527a8198734de07481f6134e4d1124f93249ea0a6601e6768aca3d->leave($__internal_6fb4dae6ab527a8198734de07481f6134e4d1124f93249ea0a6601e6768aca3d_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a283d906fbe434186c61c64b3615fec85c87da412a428329b650e2a02dcf3794 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a283d906fbe434186c61c64b3615fec85c87da412a428329b650e2a02dcf3794->enter($__internal_a283d906fbe434186c61c64b3615fec85c87da412a428329b650e2a02dcf3794_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_3757f5e5e95222d23a6aba1c571e182420bf2af4df67618f2040e53319445cce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3757f5e5e95222d23a6aba1c571e182420bf2af4df67618f2040e53319445cce->enter($__internal_3757f5e5e95222d23a6aba1c571e182420bf2af4df67618f2040e53319445cce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute((isset($context["collector"]) ? $context["collector"] : $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_3757f5e5e95222d23a6aba1c571e182420bf2af4df67618f2040e53319445cce->leave($__internal_3757f5e5e95222d23a6aba1c571e182420bf2af4df67618f2040e53319445cce_prof);

        
        $__internal_a283d906fbe434186c61c64b3615fec85c87da412a428329b650e2a02dcf3794->leave($__internal_a283d906fbe434186c61c64b3615fec85c87da412a428329b650e2a02dcf3794_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "WebProfilerBundle:Collector:exception.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/exception.html.twig");
    }
}
