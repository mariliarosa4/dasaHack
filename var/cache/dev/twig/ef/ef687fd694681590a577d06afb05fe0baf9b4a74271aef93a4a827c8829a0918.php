<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_298b9d532c6f95ae216b7e059274db33509b27f2aacdee327036a4a77528d802 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_96c61855b4fd68993e6e098d738f7b43690053584dd2fdb200cc4442070fd451 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96c61855b4fd68993e6e098d738f7b43690053584dd2fdb200cc4442070fd451->enter($__internal_96c61855b4fd68993e6e098d738f7b43690053584dd2fdb200cc4442070fd451_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_41ed6e2bea3a71eed5419d10eae78eede05b248aaed131438c9ccafeec7d4e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41ed6e2bea3a71eed5419d10eae78eede05b248aaed131438c9ccafeec7d4e9f->enter($__internal_41ed6e2bea3a71eed5419d10eae78eede05b248aaed131438c9ccafeec7d4e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96c61855b4fd68993e6e098d738f7b43690053584dd2fdb200cc4442070fd451->leave($__internal_96c61855b4fd68993e6e098d738f7b43690053584dd2fdb200cc4442070fd451_prof);

        
        $__internal_41ed6e2bea3a71eed5419d10eae78eede05b248aaed131438c9ccafeec7d4e9f->leave($__internal_41ed6e2bea3a71eed5419d10eae78eede05b248aaed131438c9ccafeec7d4e9f_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_80d48f9e51039a4c75ba54383f30eff58418c75502b27b81377952e3483c6fe4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80d48f9e51039a4c75ba54383f30eff58418c75502b27b81377952e3483c6fe4->enter($__internal_80d48f9e51039a4c75ba54383f30eff58418c75502b27b81377952e3483c6fe4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_0614c26a3b37ae8b45403071c7526b1ba641ed3869f44dacbc4a868c7e3431e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0614c26a3b37ae8b45403071c7526b1ba641ed3869f44dacbc4a868c7e3431e6->enter($__internal_0614c26a3b37ae8b45403071c7526b1ba641ed3869f44dacbc4a868c7e3431e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_0614c26a3b37ae8b45403071c7526b1ba641ed3869f44dacbc4a868c7e3431e6->leave($__internal_0614c26a3b37ae8b45403071c7526b1ba641ed3869f44dacbc4a868c7e3431e6_prof);

        
        $__internal_80d48f9e51039a4c75ba54383f30eff58418c75502b27b81377952e3483c6fe4->leave($__internal_80d48f9e51039a4c75ba54383f30eff58418c75502b27b81377952e3483c6fe4_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_e98585dec02acb51fcece2805086913fd5cac70cdad79d5718944476676eb7d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e98585dec02acb51fcece2805086913fd5cac70cdad79d5718944476676eb7d1->enter($__internal_e98585dec02acb51fcece2805086913fd5cac70cdad79d5718944476676eb7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_5b68f1ccd68333b1e73ef1120848813360e3486ac636029f75830e443c3184b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b68f1ccd68333b1e73ef1120848813360e3486ac636029f75830e443c3184b0->enter($__internal_5b68f1ccd68333b1e73ef1120848813360e3486ac636029f75830e443c3184b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_5b68f1ccd68333b1e73ef1120848813360e3486ac636029f75830e443c3184b0->leave($__internal_5b68f1ccd68333b1e73ef1120848813360e3486ac636029f75830e443c3184b0_prof);

        
        $__internal_e98585dec02acb51fcece2805086913fd5cac70cdad79d5718944476676eb7d1->leave($__internal_e98585dec02acb51fcece2805086913fd5cac70cdad79d5718944476676eb7d1_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a7060c22581b3872d988dd49f7713477f01733e12d3f829ac7eb4e6c7136d9c2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a7060c22581b3872d988dd49f7713477f01733e12d3f829ac7eb4e6c7136d9c2->enter($__internal_a7060c22581b3872d988dd49f7713477f01733e12d3f829ac7eb4e6c7136d9c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_57cf2ced4e7f878d2174444673caa976694d8c1490abef608505dd7479d2dd5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_57cf2ced4e7f878d2174444673caa976694d8c1490abef608505dd7479d2dd5f->enter($__internal_57cf2ced4e7f878d2174444673caa976694d8c1490abef608505dd7479d2dd5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_57cf2ced4e7f878d2174444673caa976694d8c1490abef608505dd7479d2dd5f->leave($__internal_57cf2ced4e7f878d2174444673caa976694d8c1490abef608505dd7479d2dd5f_prof);

        
        $__internal_a7060c22581b3872d988dd49f7713477f01733e12d3f829ac7eb4e6c7136d9c2->leave($__internal_a7060c22581b3872d988dd49f7713477f01733e12d3f829ac7eb4e6c7136d9c2_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
