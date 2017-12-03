<?php

/* WebProfilerBundle:Profiler:open.html.twig */
class __TwigTemplate_d618b59fca9a830b8ab3ed0eeb533711d1b9c8f96a2fe56b9fec819474ef979e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "WebProfilerBundle:Profiler:open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_006c60636c9cdc2cc39f143b2d4a1a1f2d79b51f993fe9f1e3be7f9d71994227 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_006c60636c9cdc2cc39f143b2d4a1a1f2d79b51f993fe9f1e3be7f9d71994227->enter($__internal_006c60636c9cdc2cc39f143b2d4a1a1f2d79b51f993fe9f1e3be7f9d71994227_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $__internal_9aa2f3c81a14319d9cc89bcee5f0a93fc9dc137f64924ba9e7ee78337dabe51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9aa2f3c81a14319d9cc89bcee5f0a93fc9dc137f64924ba9e7ee78337dabe51d->enter($__internal_9aa2f3c81a14319d9cc89bcee5f0a93fc9dc137f64924ba9e7ee78337dabe51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_006c60636c9cdc2cc39f143b2d4a1a1f2d79b51f993fe9f1e3be7f9d71994227->leave($__internal_006c60636c9cdc2cc39f143b2d4a1a1f2d79b51f993fe9f1e3be7f9d71994227_prof);

        
        $__internal_9aa2f3c81a14319d9cc89bcee5f0a93fc9dc137f64924ba9e7ee78337dabe51d->leave($__internal_9aa2f3c81a14319d9cc89bcee5f0a93fc9dc137f64924ba9e7ee78337dabe51d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_edcc0df06bfd0a48c64a635055dbf9b94957053017b5c04a9c2a18e9f5af2f60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_edcc0df06bfd0a48c64a635055dbf9b94957053017b5c04a9c2a18e9f5af2f60->enter($__internal_edcc0df06bfd0a48c64a635055dbf9b94957053017b5c04a9c2a18e9f5af2f60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61a9bf9451c727201efd893ecd9a9544778da724abc5d6fbafa2e1f194f981d7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61a9bf9451c727201efd893ecd9a9544778da724abc5d6fbafa2e1f194f981d7->enter($__internal_61a9bf9451c727201efd893ecd9a9544778da724abc5d6fbafa2e1f194f981d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_61a9bf9451c727201efd893ecd9a9544778da724abc5d6fbafa2e1f194f981d7->leave($__internal_61a9bf9451c727201efd893ecd9a9544778da724abc5d6fbafa2e1f194f981d7_prof);

        
        $__internal_edcc0df06bfd0a48c64a635055dbf9b94957053017b5c04a9c2a18e9f5af2f60->leave($__internal_edcc0df06bfd0a48c64a635055dbf9b94957053017b5c04a9c2a18e9f5af2f60_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_49cd8bdc3b26a5a6589b01ee56989ff59fcd65bab9df0eb671e8007e5246b330 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49cd8bdc3b26a5a6589b01ee56989ff59fcd65bab9df0eb671e8007e5246b330->enter($__internal_49cd8bdc3b26a5a6589b01ee56989ff59fcd65bab9df0eb671e8007e5246b330_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_295b764fc70934a3dbf6ed91b7480216b2c813599fcfd0da703bb03cf32206c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_295b764fc70934a3dbf6ed91b7480216b2c813599fcfd0da703bb03cf32206c0->enter($__internal_295b764fc70934a3dbf6ed91b7480216b2c813599fcfd0da703bb03cf32206c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, (isset($context["file"]) ? $context["file"] : $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt((isset($context["filename"]) ? $context["filename"] : $this->getContext($context, "filename")), (isset($context["line"]) ? $context["line"] : $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_295b764fc70934a3dbf6ed91b7480216b2c813599fcfd0da703bb03cf32206c0->leave($__internal_295b764fc70934a3dbf6ed91b7480216b2c813599fcfd0da703bb03cf32206c0_prof);

        
        $__internal_49cd8bdc3b26a5a6589b01ee56989ff59fcd65bab9df0eb671e8007e5246b330->leave($__internal_49cd8bdc3b26a5a6589b01ee56989ff59fcd65bab9df0eb671e8007e5246b330_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "WebProfilerBundle:Profiler:open.html.twig", "C:\\xampp\\htdocs\\dasaHack\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle/Resources/views/Profiler/open.html.twig");
    }
}
