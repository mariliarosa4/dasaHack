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
        $__internal_b8835f986dbfc36c21a72b2f0bac669f8738ca817bc42639b297e6d77e11ea4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8835f986dbfc36c21a72b2f0bac669f8738ca817bc42639b297e6d77e11ea4f->enter($__internal_b8835f986dbfc36c21a72b2f0bac669f8738ca817bc42639b297e6d77e11ea4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_a224045b0b998e089ecfd0a4182a75a8865d97f2781a3aa0cf61569180c818f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a224045b0b998e089ecfd0a4182a75a8865d97f2781a3aa0cf61569180c818f8->enter($__internal_a224045b0b998e089ecfd0a4182a75a8865d97f2781a3aa0cf61569180c818f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b8835f986dbfc36c21a72b2f0bac669f8738ca817bc42639b297e6d77e11ea4f->leave($__internal_b8835f986dbfc36c21a72b2f0bac669f8738ca817bc42639b297e6d77e11ea4f_prof);

        
        $__internal_a224045b0b998e089ecfd0a4182a75a8865d97f2781a3aa0cf61569180c818f8->leave($__internal_a224045b0b998e089ecfd0a4182a75a8865d97f2781a3aa0cf61569180c818f8_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c496a430f3cf0c63bb6a687dcd2e79a2890b7a6763a178b918aabcdb19f67606 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c496a430f3cf0c63bb6a687dcd2e79a2890b7a6763a178b918aabcdb19f67606->enter($__internal_c496a430f3cf0c63bb6a687dcd2e79a2890b7a6763a178b918aabcdb19f67606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_5c3777b990acc53ab1608d758286aa0ac3f9d5e10618d59019471173d81125f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5c3777b990acc53ab1608d758286aa0ac3f9d5e10618d59019471173d81125f5->enter($__internal_5c3777b990acc53ab1608d758286aa0ac3f9d5e10618d59019471173d81125f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_5c3777b990acc53ab1608d758286aa0ac3f9d5e10618d59019471173d81125f5->leave($__internal_5c3777b990acc53ab1608d758286aa0ac3f9d5e10618d59019471173d81125f5_prof);

        
        $__internal_c496a430f3cf0c63bb6a687dcd2e79a2890b7a6763a178b918aabcdb19f67606->leave($__internal_c496a430f3cf0c63bb6a687dcd2e79a2890b7a6763a178b918aabcdb19f67606_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e6436c6ca606668a932ef42341eeb72675f1227ee33b8497145db2fb7579855e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e6436c6ca606668a932ef42341eeb72675f1227ee33b8497145db2fb7579855e->enter($__internal_e6436c6ca606668a932ef42341eeb72675f1227ee33b8497145db2fb7579855e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_efbe0ae426cfbbd1071ded7f41a6573cad2eaa63ef1aa3acafafb29ebb4ab9a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_efbe0ae426cfbbd1071ded7f41a6573cad2eaa63ef1aa3acafafb29ebb4ab9a3->enter($__internal_efbe0ae426cfbbd1071ded7f41a6573cad2eaa63ef1aa3acafafb29ebb4ab9a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_efbe0ae426cfbbd1071ded7f41a6573cad2eaa63ef1aa3acafafb29ebb4ab9a3->leave($__internal_efbe0ae426cfbbd1071ded7f41a6573cad2eaa63ef1aa3acafafb29ebb4ab9a3_prof);

        
        $__internal_e6436c6ca606668a932ef42341eeb72675f1227ee33b8497145db2fb7579855e->leave($__internal_e6436c6ca606668a932ef42341eeb72675f1227ee33b8497145db2fb7579855e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_0c4f87431ffd68f132b316a4a0bc0836e8d2452aa4985c20f68b94bab484a919 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0c4f87431ffd68f132b316a4a0bc0836e8d2452aa4985c20f68b94bab484a919->enter($__internal_0c4f87431ffd68f132b316a4a0bc0836e8d2452aa4985c20f68b94bab484a919_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_b4d0a71ea7c616de7781cd3a5cd8c9209f77aa86d25d1b6c2dc6cab5fee629fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b4d0a71ea7c616de7781cd3a5cd8c9209f77aa86d25d1b6c2dc6cab5fee629fc->enter($__internal_b4d0a71ea7c616de7781cd3a5cd8c9209f77aa86d25d1b6c2dc6cab5fee629fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_b4d0a71ea7c616de7781cd3a5cd8c9209f77aa86d25d1b6c2dc6cab5fee629fc->leave($__internal_b4d0a71ea7c616de7781cd3a5cd8c9209f77aa86d25d1b6c2dc6cab5fee629fc_prof);

        
        $__internal_0c4f87431ffd68f132b316a4a0bc0836e8d2452aa4985c20f68b94bab484a919->leave($__internal_0c4f87431ffd68f132b316a4a0bc0836e8d2452aa4985c20f68b94bab484a919_prof);

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
