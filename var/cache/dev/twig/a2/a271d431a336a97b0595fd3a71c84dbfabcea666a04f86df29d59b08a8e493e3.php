<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_01ab22293a64081a3cd4646e9e1cde5b6020ba0a40251d5aae407d0a6c967466 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bd43fdc54bd1125cc94010475f615c3bb6cf5ff732f9da347cc45b5303181173 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd43fdc54bd1125cc94010475f615c3bb6cf5ff732f9da347cc45b5303181173->enter($__internal_bd43fdc54bd1125cc94010475f615c3bb6cf5ff732f9da347cc45b5303181173_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_1f85b4b45f41925688659faa314bd0d52e4855a0e8d9e771b427064d13afac9c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f85b4b45f41925688659faa314bd0d52e4855a0e8d9e771b427064d13afac9c->enter($__internal_1f85b4b45f41925688659faa314bd0d52e4855a0e8d9e771b427064d13afac9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bd43fdc54bd1125cc94010475f615c3bb6cf5ff732f9da347cc45b5303181173->leave($__internal_bd43fdc54bd1125cc94010475f615c3bb6cf5ff732f9da347cc45b5303181173_prof);

        
        $__internal_1f85b4b45f41925688659faa314bd0d52e4855a0e8d9e771b427064d13afac9c->leave($__internal_1f85b4b45f41925688659faa314bd0d52e4855a0e8d9e771b427064d13afac9c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_f600f1799cac40cbe374b1e580df3507a22014fee3f3a350f51c2bb4033fe53e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f600f1799cac40cbe374b1e580df3507a22014fee3f3a350f51c2bb4033fe53e->enter($__internal_f600f1799cac40cbe374b1e580df3507a22014fee3f3a350f51c2bb4033fe53e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9ee0637ee20a371be6d39ffe7e3d9c82ce085a0ee09163f6ab2494e1792a4a6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ee0637ee20a371be6d39ffe7e3d9c82ce085a0ee09163f6ab2494e1792a4a6e->enter($__internal_9ee0637ee20a371be6d39ffe7e3d9c82ce085a0ee09163f6ab2494e1792a4a6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9ee0637ee20a371be6d39ffe7e3d9c82ce085a0ee09163f6ab2494e1792a4a6e->leave($__internal_9ee0637ee20a371be6d39ffe7e3d9c82ce085a0ee09163f6ab2494e1792a4a6e_prof);

        
        $__internal_f600f1799cac40cbe374b1e580df3507a22014fee3f3a350f51c2bb4033fe53e->leave($__internal_f600f1799cac40cbe374b1e580df3507a22014fee3f3a350f51c2bb4033fe53e_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
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

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
