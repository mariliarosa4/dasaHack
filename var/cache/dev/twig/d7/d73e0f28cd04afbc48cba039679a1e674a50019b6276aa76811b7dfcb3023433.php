<?php

/* WebProfilerBundle:Collector:ajax.html.twig */
class __TwigTemplate_1068454afee879c510c67f8283368bc2247c3ddac8d2eedf860f65bdb10cab3c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:ajax.html.twig", 1);
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
        $__internal_08cb5b785c77f98f59281fa30ef90e5aff63631747fa904e83bd3eabe7a73537 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_08cb5b785c77f98f59281fa30ef90e5aff63631747fa904e83bd3eabe7a73537->enter($__internal_08cb5b785c77f98f59281fa30ef90e5aff63631747fa904e83bd3eabe7a73537_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $__internal_90bab1b027cf2fad28a2c3bea9c88eb28fadbf992b3e87276860e302cd9486cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90bab1b027cf2fad28a2c3bea9c88eb28fadbf992b3e87276860e302cd9486cf->enter($__internal_90bab1b027cf2fad28a2c3bea9c88eb28fadbf992b3e87276860e302cd9486cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_08cb5b785c77f98f59281fa30ef90e5aff63631747fa904e83bd3eabe7a73537->leave($__internal_08cb5b785c77f98f59281fa30ef90e5aff63631747fa904e83bd3eabe7a73537_prof);

        
        $__internal_90bab1b027cf2fad28a2c3bea9c88eb28fadbf992b3e87276860e302cd9486cf->leave($__internal_90bab1b027cf2fad28a2c3bea9c88eb28fadbf992b3e87276860e302cd9486cf_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_06ee476a79392f248c323697415faed9bd21f5382fc7f5e604fbfbd83307409c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_06ee476a79392f248c323697415faed9bd21f5382fc7f5e604fbfbd83307409c->enter($__internal_06ee476a79392f248c323697415faed9bd21f5382fc7f5e604fbfbd83307409c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_18445663454c96b9a1ad5f3a21caf68ec546b4c09c9ecf6e17fa1e918315c4f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_18445663454c96b9a1ad5f3a21caf68ec546b4c09c9ecf6e17fa1e918315c4f7->enter($__internal_18445663454c96b9a1ad5f3a21caf68ec546b4c09c9ecf6e17fa1e918315c4f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_18445663454c96b9a1ad5f3a21caf68ec546b4c09c9ecf6e17fa1e918315c4f7->leave($__internal_18445663454c96b9a1ad5f3a21caf68ec546b4c09c9ecf6e17fa1e918315c4f7_prof);

        
        $__internal_06ee476a79392f248c323697415faed9bd21f5382fc7f5e604fbfbd83307409c->leave($__internal_06ee476a79392f248c323697415faed9bd21f5382fc7f5e604fbfbd83307409c_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:ajax.html.twig";
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
", "WebProfilerBundle:Collector:ajax.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Collector/ajax.html.twig");
    }
}
