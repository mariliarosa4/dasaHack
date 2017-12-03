<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_5d54ece49f3eaea3b8641a621aa5ea65eab7f2456c91cd9fb7e51d715f7116e9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
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
        $__internal_6768b877870b01f3382a863d3ec012d3ac21e6c4de51c75ea4ca5678ae282d6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6768b877870b01f3382a863d3ec012d3ac21e6c4de51c75ea4ca5678ae282d6a->enter($__internal_6768b877870b01f3382a863d3ec012d3ac21e6c4de51c75ea4ca5678ae282d6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8c1c79f956bd34c8fd8ff185eefbf76cd4d5207309bfe93852e8d51f30b11337 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c1c79f956bd34c8fd8ff185eefbf76cd4d5207309bfe93852e8d51f30b11337->enter($__internal_8c1c79f956bd34c8fd8ff185eefbf76cd4d5207309bfe93852e8d51f30b11337_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6768b877870b01f3382a863d3ec012d3ac21e6c4de51c75ea4ca5678ae282d6a->leave($__internal_6768b877870b01f3382a863d3ec012d3ac21e6c4de51c75ea4ca5678ae282d6a_prof);

        
        $__internal_8c1c79f956bd34c8fd8ff185eefbf76cd4d5207309bfe93852e8d51f30b11337->leave($__internal_8c1c79f956bd34c8fd8ff185eefbf76cd4d5207309bfe93852e8d51f30b11337_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_dd33cc4cbb86d0bfbf119f5415848ad655e2b8a44c914139b26b4c192417e398 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd33cc4cbb86d0bfbf119f5415848ad655e2b8a44c914139b26b4c192417e398->enter($__internal_dd33cc4cbb86d0bfbf119f5415848ad655e2b8a44c914139b26b4c192417e398_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_b69862b831b43b5bccd21d802a4e996a43b88cbfcc50aea4750cd4421c26eaad = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b69862b831b43b5bccd21d802a4e996a43b88cbfcc50aea4750cd4421c26eaad->enter($__internal_b69862b831b43b5bccd21d802a4e996a43b88cbfcc50aea4750cd4421c26eaad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_b69862b831b43b5bccd21d802a4e996a43b88cbfcc50aea4750cd4421c26eaad->leave($__internal_b69862b831b43b5bccd21d802a4e996a43b88cbfcc50aea4750cd4421c26eaad_prof);

        
        $__internal_dd33cc4cbb86d0bfbf119f5415848ad655e2b8a44c914139b26b4c192417e398->leave($__internal_dd33cc4cbb86d0bfbf119f5415848ad655e2b8a44c914139b26b4c192417e398_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_870ff6cc8f6b131cd174ae2ba48763486beb81394a69a73df57f79c786f040d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870ff6cc8f6b131cd174ae2ba48763486beb81394a69a73df57f79c786f040d8->enter($__internal_870ff6cc8f6b131cd174ae2ba48763486beb81394a69a73df57f79c786f040d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_fbed2292c5186aec98d6a0e26982e8f3c0a461d34134217eb8f2c109b884574d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbed2292c5186aec98d6a0e26982e8f3c0a461d34134217eb8f2c109b884574d->enter($__internal_fbed2292c5186aec98d6a0e26982e8f3c0a461d34134217eb8f2c109b884574d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_fbed2292c5186aec98d6a0e26982e8f3c0a461d34134217eb8f2c109b884574d->leave($__internal_fbed2292c5186aec98d6a0e26982e8f3c0a461d34134217eb8f2c109b884574d_prof);

        
        $__internal_870ff6cc8f6b131cd174ae2ba48763486beb81394a69a73df57f79c786f040d8->leave($__internal_870ff6cc8f6b131cd174ae2ba48763486beb81394a69a73df57f79c786f040d8_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_9b7aaa043d7a1d1c5022a133ee9845f5b2ec228066f0fcad8419a78f3edbf302 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b7aaa043d7a1d1c5022a133ee9845f5b2ec228066f0fcad8419a78f3edbf302->enter($__internal_9b7aaa043d7a1d1c5022a133ee9845f5b2ec228066f0fcad8419a78f3edbf302_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_c0f824d633da8cada8818f3ac4f88d5ba8dfe7fa8e035758eaece80ce8b86928 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0f824d633da8cada8818f3ac4f88d5ba8dfe7fa8e035758eaece80ce8b86928->enter($__internal_c0f824d633da8cada8818f3ac4f88d5ba8dfe7fa8e035758eaece80ce8b86928_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_c0f824d633da8cada8818f3ac4f88d5ba8dfe7fa8e035758eaece80ce8b86928->leave($__internal_c0f824d633da8cada8818f3ac4f88d5ba8dfe7fa8e035758eaece80ce8b86928_prof);

        
        $__internal_9b7aaa043d7a1d1c5022a133ee9845f5b2ec228066f0fcad8419a78f3edbf302->leave($__internal_9b7aaa043d7a1d1c5022a133ee9845f5b2ec228066f0fcad8419a78f3edbf302_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
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
", "@WebProfiler/Collector/exception.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
